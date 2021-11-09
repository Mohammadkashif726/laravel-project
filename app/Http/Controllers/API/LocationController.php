<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\City;
use App\Models\State;
use App\Models\Institute_list;
use App\Models\Degrees_list;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\Hash;
use Mail;


Class LocationController extends AppBaseController {

	public function countries(Request $request){
	    $country = new Country();
	    if(!empty($request->country)){
            $country = $country->where('id', $request->country);
        }
        return $this->sendResponse($country->get());
	}

    public function states($country){
       $states = Country::findOrFail($country)->states;
       return $this->sendResponse($states);
    }

    public function cities($state){
        $cities = State::findOrFail($state)->cities;
        return $this->sendResponse($cities);
    }

    public function areas($city){
        $areas = City::findOrFail($city)->areas;
        return $this->sendResponse($areas);
    }


	public function get_institutes_by_country($country_id){
		return Institute_list::where('country_id', $country_id)->get();
	}

	public function get_all_degrees(){
		return Degrees_list::get();
	}

}