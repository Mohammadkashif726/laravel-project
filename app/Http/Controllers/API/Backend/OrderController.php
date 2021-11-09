<?php

namespace App\Http\Controllers\API\Backend;
use App\Mail\SendPaymentDetails;
use App\Mail\SendPaymentReceiptMail;
use App\Models\BatchUser;
use App\Models\CourseOrder;
use App\Http\Controllers\AppBaseController;

use App\Http\Resources\CourseShowResource;
use App\Http\Resources\OrdersListForInstructorResource;
use App\Http\Resources\OrdersShowResource;
use App\Http\Resources\QuestionResource;
use App\Models\Batch;
use App\Models\Course;
use App\Models\Order;
use App\Models\User;
use App\Models\OrderStatus;
use App\Models\Tutorials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends AppBaseController
{
    public function index(Request $request){
        try {
            $orders = Order::paginate(100);
            $return = OrdersShowResource::collection($orders);
        } catch (Exception $e) {
            $return=response()->json(['error' => $e->getMessage()], 500);
        }
        return $return = response()->json([
            'data' => $return
        ], 200);
    }

    public function show(Request $request){
        $orderId = $request->order_id;
        $return = '';
        if($request->order_id !== 'undefined'){
            $userId = auth()->user()->id;
            $order = new OrdersShowResource(Order::find($orderId));

            if($userId == $order->user->id){
                $courses = CourseShowResource::collection($order->courses()->get());

                if($courses->count() > 0){
                    $total_price = 0;
                    foreach($courses as $value){
                        if($value->original_price){
                            $total_price += $value->original_price;
                        }
                    }

                    $total_savings = 0;
                    foreach($courses as $value){
                        if($value->original_price){
                            $courseSaving = $value->original_price*$value->discount_percentage/100;
                            $total_savings += $courseSaving;
                        }
                    }

                    $return = response()->json(
                        [
                            'total_price' => ceil($total_price),
                            'total_savings' => ceil($total_savings),
                            'sell_price' => ceil(bcsub($total_price, $total_savings)),
                            'sum_of_discount' => ceil($total_savings/$total_price*100) . '%',
                            'order' => $order,
                            'courses' => $courses,
                        ]
                    );
                } else {
                    $return = response()->json(
                        [
                            'message' => 'No Course found',
                        ], 200
                    );
                };
            } else {
                $return = response()->json(
                    [
                        'message' => 'Something went wrong',
                    ],
                    500
                );
            }
        } else {
            $return = response()->json($return);
        }

        return $return;
    }
    public function store(Request $request) {

        try {
            if($request->course_reference){
                $courseId = Course::all()->where('course_reference', $request->course_reference)->first()->id;
            }
            $userId = auth()->user()->id;

            $order = createOrFindOrder($request, $userId, $request->order_type);

            // $order->courses()->detach();
            if($order->order_type === Order::COURSE){
                if($request->course_reference){
                    $order->courses()->syncWithoutDetaching($courseId);
                }

                $courses = CourseShowResource::collection($order->courses()->get());
                $total_price = 0;
                foreach($courses as $value){
                    if($value->original_price){
                        $total_price += $value->original_price;
                    }
                }
                $total_savings = 0;
                foreach($courses as $value){
                    if($value->original_price){
                        $courseSaving = $value->original_price*$value->discount_percentage/100;
                        $total_savings += $courseSaving;
                    }
                }
                $order->billing_total = ceil(bcsub($total_price, $total_savings));
                $order->billing_subtotal = $total_price;
                $order->billing_discount = ceil($total_savings/$total_price*100);
            } else {
                $batchId = Batch::where('invite_code', $request->invite_code)->first()->id;
                if($batchId){
                    $order->batches()->syncWithoutDetaching($batchId);
                }
                $order->billing_total = $request->billing_total;
                $order->billing_subtotal = $request->billing_subtotal;
                $order->billing_discount = $request->billing_discount;
            }
            $order->update();
            Mail::to($order->user->email)->send(new SendPaymentDetails($order));
//          'total_price' => ceil($total_price),
//          'total_savings' => ceil($total_savings),
//          'sell_price' => ceil(bcsub($total_price, $total_savings)),
//          'sum_of_discount' => ceil($total_savings/$total_price*100) . '%',

            $return = response()->json([
                'order_id' => $order->id,
            ]);

        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return $return;
    }

    public function destroy($courseReference, Request $request){

        if($courseReference){
            $order= Order::find($request->order_id);
            $course = Course::where('course_reference', $courseReference)->first();

            // $course->order()->detach()->where(['course_id' => $orderId, 'order_id' => $course]);
            $order->courses()->detach($course);
            $return= response()->json(['message' => 'Successfully removed'], 200);
        } else {
            $return= response()->json(['message' => 'Something went wrong'], 500);
        }
        return $return;
    }

    public function courseByOrder($orderReference, $slug, Request $request) {
        $userId = auth()->user()->id;
        $getOrder = Order::where('order_reference', $orderReference)->first();

        $tutorial=Tutorials::all()->where('slug', $slug)->first();
        $getCourse = Course::where('id', $tutorial->course->id)->first();

        if(!$getOrder || !$getCourse || $getOrder->user_id != $userId || OrderStatus::COMPLETED != $getOrder->order_status_id) {
            $result = response()->json([
                'status' => 401,
                'message' => 'You are not authorised to learn this course'
            ]);
        } else {
            $courseOrder = CourseOrder::all()
                ->where('order_id', $getOrder->id)
                ->where('course_id', $getCourse->id)
                ->first();
            if($courseOrder){
                $order = Order::find($getOrder->id);
                $course = Course::find($getCourse->id);
                $tutorial = Tutorials::all()
                    ->where('slug', $request->slug)
                    ->where('course_id', $course->id)
                    ->first();
                $result = response()->json([
                    'status' => 200,
                    'order' => $order,
                    'course' => $getCourse,
                    'courseOwner' => $course->user,
                    'tutorials' => $course->tutorials,
                    'tutorial' => $tutorial,
                    'questions' => QuestionResource::collection($course->questions),
                ]);
            } else {
                $result = response()->json([
                    'status' => 401,
                    'message' => 'You are not authorised to learn this course'
                ]);
            }
        }

        return $result;
    }

    public function ordersCourseListForInstructor(Request $request){
        $user = auth()->user();
        $courseIds = Course::all()->whereIn('user_id', $user->id)->pluck('id');
        $coursesOrderIds = CourseOrder::all()->whereIn('course_id', $courseIds)->pluck('order_id');
        $ordersCompleted = OrdersListForInstructorResource::collection(Order::findMany($coursesOrderIds)->where('order_status_id', OrderStatus::COMPLETED));
        $ordersPending = OrdersListForInstructorResource::collection(Order::findMany($coursesOrderIds)->where('order_status_id', OrderStatus::PENDING_PAYMENT));
        $result = response()->json([
            'status' => 200,
            'orders' => [
                'completed' => $ordersCompleted,
                'pending' => $ordersPending,
            ],
        ]);

        return $result;
    }

    public function sendPaymentDetails($orderReference)
    {
        $order = Order::where('order_reference', $orderReference)->first();
        if($order){
            Mail::to($order->user->email)->send(new SendPaymentDetails($order));
        }
        return $order;
    }

    public function showOrder($orderReference)
    {
        try {
            $order = Order::where('order_reference', $orderReference)->first();
            if($order){
                $orderResource = new OrdersShowResource($order);
                $result = response()->json([
                    'order' => $orderResource,
                ]);
            } else {
                $result = response()->json(['message' => 'Invalid order reference'], 401);
            }

        } catch (Exception $e) {
            $result = response()->json(['error' => $e->getMessage()], 500);
        }
        return $result;
    }

    public function OrderPaymentMark($orderReference) {
        try {
            $order = Order::where('order_reference', $orderReference)->first();

            if($order){
                $order->order_status_id = OrderStatus::COMPLETED;
                $order->update();
                $batches = $order->batches;
                if($batches){
                    foreach($batches as $batch){
                        $batchUser= BatchUser::where('batch_id', $batch->id)
                            ->where('user_id', $order->user->id)->first();
                        $batchUser->is_user_authorize = true;
                        $batchUser->update();
                    }
                }

                Mail::to($order->user->email)->send(new SendPaymentReceiptMail($order));

                $result = response()->json([
                    'order' => $order,
                ]);
            } else {
                $result = response()->json(['message' => 'Invalid order reference'], 401);
            }

        } catch (Exception $e) {
            $result = response()->json(['error' => $e->getMessage()], 500);
        }
        return $result;
    }
}
