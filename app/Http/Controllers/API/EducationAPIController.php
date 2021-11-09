<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\AppBaseController;
use App\Http\Resources\InstituteListCollection;
use App\Models\DegreeLevel;
use App\Models\DegreesList;
use App\Models\Institute;
use App\Models\SubjectCategory;
use Illuminate\Http\Request;
use App\Models\Country;
use \Log;

Class EducationAPIController extends AppBaseController
{


    public function degreeLevels()
    {
        return $this->sendResponse(DegreeLevel::all());
    }

    public function countries(Request $request)
    {
        $country = new Country();
        if (!empty($request->country)) {
            $country = $country->where('id', $request->country);
        }
        return $this->sendResponse($country->get());
    }

    public function degrees(Request $request)
    {
        $degree = new DegreesList();
        if (!empty($request->degreeLevel)) {
            $degree = $degree->where('degree_level_id', $request->degreeLevel);
        }
        return $this->sendResponse($degree->get());
    }

    public function institutes(Request $request)
    {
        if($request->has('city')){
            $cityId = $request->get('city');
            $institutes = Institute::all()->where('city_id', $cityId);
        } elseif ($request->has('type')){
            $typeId = $request->get('type');
            $institutes = Institute::all()->where('type_id', $typeId);
        }
        return InstituteListCollection::collection($institutes);
    }

    public function companies()
    {
        return $this->sendResponse(Institute::with('country', 'state', 'city')->get());
    }



    public static function categoriesMapper($categories)
    {

        $data = [];
        foreach ($categories as $category) {
            $data[] = [
                'id' => $category->id,
                'name' => $category->name,
                'children' => !empty($category->children) ? self::categoriesMapper($category->children) : null,
                'subjects' => self::subjectsMapper($category->subjects)
            ];
        }
        return $data;
    }

    public static function subjectsMapper($subjects){

        foreach ($subjects as $subject) {
            $data[] = [
                'id' => $subject->id,
                'name' => $subject->name,
            ];
        }
        return $data;
    }

    public function subjectCategories(Request $request)
    {
        $subjectCategory = new SubjectCategory();
        if (!empty($request->parent_id)) {
            Log::info('Entering with ' . $request->parent_id . ' Prent Id');
            $subjectCategory = $subjectCategory->where('parent_id', null);

        }
        Log::info('Entering without ' . $request->parent_id . ' Prent id');
        if (!empty($request->subject_category_id)) {
            $subjectCategory = SubjectCategory::findOrFail($request->subject_category_id);
            if (!$subjectCategory->children->isEmpty()) {
                return $this->sendResponse(self::categoriesMapper($subjectCategory->children));
            }
            return $this->sendResponse(self::subjectsMapper($subjectCategory->subjects));
        }

        return $this->sendResponse($subjectCategory->get());
    }
}