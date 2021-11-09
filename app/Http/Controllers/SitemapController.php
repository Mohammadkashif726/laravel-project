<?php

namespace App\Http\Controllers;

use App\Models\Institute;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Job;
use App\Models\TutorialCategory;
use App\Models\TutorialSubCategory;
use App\Models\EventCategories;
use App\Models\Course;
use App\Models\Event;
use App\Models\Batch;

class SitemapController extends Controller
{
    public function index(){
        return view('sitemapIndex');
    }

    public function users(){
        $users = User::all();
        return response()->view('sitemapUsers', ['users' => $users])->header('Content-Type', 'text/xml');
    }
    public function jobs(){
        $jobs = Job::all();
        return response()->view('sitemapJobs', ['jobs' => $jobs])->header('Content-Type', 'text/xml');
    }
    public function tutorialCategories(){
        $tutorialCategories = TutorialCategory::all();
        return response()->view('sitemapTutorialCategories', ['tutorialCategories' => $tutorialCategories])->header('Content-Type', 'text/xml');
    }
    public function tutorialSubCategories(){
        $tutorialSubCategories = TutorialSubCategory::all();
        return response()->view('sitemapTutorialSubCategories', ['tutorialSubCategories' => $tutorialSubCategories])->header('Content-Type', 'text/xml');
    }
    public function eventCategories(){
        $eventCategories = EventCategories::all();
        // print_r ('<pre>' . $eventCategories);
        return response()->view('sitemapEventCategories', ['eventCategories' => $eventCategories])->header('Content-Type', 'text/xml');
    }
    public function courses(){
        $courses = Course::all();
        return response()->view('sitemapCourses', ['courses' => $courses])->header('Content-Type', 'text/xml');
    }
    public function events(){
        $events = Event::all();
        // print_r('<pre>' . $events);
        return response()->view('sitemapEvents', ['events' => $events])->header('Content-Type', 'text/xml');
    }
    public function institutes(){
        $institutes = Institute::paginate(400);
        // print_r('<pre>' . $institutes);
        return response()->view('sitemapInstitutes', ['institutes' => $institutes])->header('Content-Type', 'text/xml');
    }
    public function batches(){
        $batches = Batch::paginate(400);
        // print_r('<pre>' . $batches);
        return response()->view('sitemapBatches', ['batches' => $batches])->header('Content-Type', 'text/xml');
    }
}
