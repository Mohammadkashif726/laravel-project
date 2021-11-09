<?php

namespace App\Http\Controllers\API\Mobile;

use App\Http\Controllers\API\ApiBaseController;
use App\Http\Resources\Mobile\CourseSubcategoryCourseResource;
use App\Http\Resources\TutorialCategoriesResource;
use App\Models\Course;
use App\Models\TutorialCategory;
use App\Models\TutorialSubCategory;
use Illuminate\Http\Request;

class CourseController extends ApiBaseController
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

    public function listByCategory (Request $request) {
        $tutorialCategories = TutorialCategory::orderBy('name', 'ASC')->get();
        $tutorialCategoriesCollection = TutorialCategoriesResource::collection($tutorialCategories);


        $categoryId = 1;
        if($request->categorySlug){
            $categoryId = TutorialCategory::where('slug', $request->categorySlug)->first()->id;
        }

        $coursesBySubCategories = TutorialSubCategory::when($categoryId, function($query) use ($categoryId){
            return $query->where('category_id', $categoryId);
        })->orderBy('updated_at', 'desc')->get();

        $coursesSubCategories = [];
        foreach($coursesBySubCategories as $coursesSubCategory) {
            $courseSubCategoryWithCourse = new CourseSubcategoryCourseResource($coursesSubCategory);
            array_push($coursesSubCategories, $courseSubCategoryWithCourse);
        }

        // $categorySubCategoryCourseCollection = CourseCategorySubcategoryCollection::collection($tutorialCategories);

        return response()->json([
            'course_categories' => $tutorialCategoriesCollection,
            'courses_by_sub_category' => $coursesSubCategories,
            'request' => $request->categorySlug
        ]);
    }
}
