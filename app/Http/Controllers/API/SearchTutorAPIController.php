<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Http\Resources\StudentShowResource;
use App\Http\Resources\SubjectsResource;
use App\Http\Resources\SubjectSubjectCategoryCollection;
use App\Http\Resources\TutorListCollection;
use App\Http\Resources\TutorShowResource;
use App\Models\Subject;
use App\Models\SubjectCategory;
use App\Models\User;
use App\Models\SubjectSubjectCategory;
use Illuminate\Http\Request;
use Mockery\Exception;

class SearchTutorAPIController extends Controller
{
    public function index(){
        $subjects = Subject::whereNotNull('hourly_rate')->get();
        $subjectCollection = SubjectsResource::collection($subjects);
        return response()->json([
            'data' => $subjectCollection
        ]);
    }

    public function subjectsByCategory(Request $request){
        try {
            $subjectCatParentId = $request->subjectCategory;
            $subjectCategoryList = SubjectCategory::all()->where('parent_id', $subjectCatParentId)->pluck('id');
            $subjectCategories = SubjectSubjectCategory::all()->whereIn('subject_category_id', $subjectCategoryList);
            $subjectsRes = SubjectSubjectCategoryCollection::collection($subjectCategories);
            return response()->json($subjectsRes);
//            $subjects = Subject::all()->whereNotIn('id', [1]);
//            return SubjectsResource::collection($subjects);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function searchTutor(Request $request){
        $state_id = $request->state;
        $city_id = $request->city;
        $subjects_id = $request->subjects;
        $latitude = $request->latitude;
        $longitude = $request->longitude;
        $distance = 10;

        try {
            if(!empty($latitude) && !empty($longitude)){
                $tutor = User::selectRaw('*, ( 6367 * acos( cos( radians( ? ) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians( ? ) ) + sin( radians( ? ) ) * sin( radians( latitude ) ) ) ) AS distance', [$latitude, $longitude, $latitude])
                    ->having('distance', '<', $distance)
                    ->orderBy('distance')
                    ->get();
            } else {
                $tutor = User::whereHas('tutor.subjects', function($query) use($subjects_id) {
                    $query->whereIn('subjects.id', $subjects_id);
                })->with('tutor')->where(['state_id' => $state_id, 'city_id' => $city_id])->get();
    //            $tutor = DB::table('Users')
    //                ->select('id', 'user_name', 'first_name', 'last_name', 'profile_image', 'gender', 'tutor')
    //                ->where(['state_id' => $state_id, 'city_id' => $city_id]
    //            )->get();}
            }
            $tutorsListCollection = TutorListCollection::collection($tutor);


            if(!empty($tutorsListCollection)){
                return $tutorsListCollection;
            }
            return 'No record found';
        } catch (Exception $e){
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function profileShow(Request $request){
        $user_name = $request->userName;
        $user = User::where(['user_name' => $user_name])->first();
        if($user->role_id == User::TUTOR){
            $tutorShowResource = new TutorShowResource($user);
            return $tutorShowResource;
        } else {
            $studentShowResource = new StudentShowResource($user);
            return $studentShowResource;
        }
    }
}
