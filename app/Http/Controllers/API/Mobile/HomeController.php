<?php

namespace App\Http\Controllers\API\Mobile;

use App\Http\Controllers\API\ApiBaseController;
use App\Http\Resources\BatchesResource;
use App\Http\Resources\CourseCollection;
use App\Http\Resources\EventsResource;
use App\Http\Resources\OrdersCollection;
use App\Models\Batch;
use App\Models\Course;
use App\Models\Event;

class HomeController extends ApiBaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function homeList(){

        $user = auth()->user();

        $orders = $user->orders;
        $ordersCollection = OrdersCollection::collection($orders);

        $courses = Course::all();
        $courseCollection = CourseCollection::collection($courses);

        $batches = Batch::all();
        $batchesCollection = BatchesResource::collection($batches);

        $events = Event::all();
        $eventsCollection = EventsResource::collection($events);

        return response()->json([
            'enrollments' => $ordersCollection,
            'courses' => $courseCollection,
            'batches' => $batchesCollection,
            'events' => $eventsCollection,
        ]);
    }
}
