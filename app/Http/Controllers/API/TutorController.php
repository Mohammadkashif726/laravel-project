<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Tutor;
use App\Models\UserQualification;
use App\Models\UserExperience;

Class TutorController extends Controller{

	public function get_tutor_id($user_verify_id){
		$data=Tutor::where('user_verify_id', $user_verify_id)->get()->toArray();
		if($data!=null){
			return $data[0]['id'];
		}
		else{
			return null;
		}

	}

	public function get_user_id($user_verify_id){
		$data=User::where('user_verify_id', $user_verify_id)->get()->toArray();
		if($data!=null){
			return $data[0]['id'];
		}
		else{
			return null;
		}

	}

	public function personalDetail(Request $request) {
//        $user = $request->user();
//        $tutor = $user->Tutor;
        $tutor = Tutor::with('User')->where('user_id', 169)->get()->toArray();
        $user_verify_id=$request->input('user_verify_id');
        $user_details=User::where('verify_id', $user_verify_id)->get()->toArray();
        if($user_details!=null){
            $tutor_details=Tutor::with('User')->where('user_id', $user_details[0]['id'])->get()->toArray();
            if($tutor_details!=null){
                return response()->json([
                    'status'=>1,
                    'message'=>'Record Found',
                    'success_code'=>200,
                    'data'=>$tutor_details,
                ]);
            }
        }
        else{
            $response_data=array(
                'status'=>0,
                'message'=>"Invalid User ID!",
                'success_code'=>401,
                'data'=>[]
            );
            return response()->json($response_data);
        }
    }
	//Get Tutor basic details
	public function get_tutor_details($user_verify_id){

		$user_details=User::where('verify_id', $user_verify_id)->get()->toArray();
		if($user_details!=null){
			$tutor_details=Tutor::with('User')->where('user_id', $user_details[0]['id'])->get()->toArray();
			if($tutor_details!=null){
				return response()->json([
	                'status'=>1,
	                'message'=>'Record Found',
	                'success_code'=>200,
	                'data'=>$tutor_details,
	            ]);
			}
		}
		else{
			$response_data=array(
                'status'=>0,
                'message'=>"Invalid User ID!",
                'success_code'=>401,
                'data'=>[]
            );
            return response()->json($response_data);
		}

	}

	public function update_tutor_personal_details(){
		$input = file_get_contents("php://input");
    	$request = json_decode($input, true);
    	$response_data=[];
    	//For User Table
    	if($request[0]['user']!=null){
    		if(isset($request[0]['user']['username'])){
    			if(User::where('username', $request[0]['user']['username'])->exists())
    			{
    				$response_data=array(
		                'status'=>0,
		                'message'=>"Username has already exists, Please try another username",
		                'success_code'=>401,
		                'data'=>[]
            		);
    			}
    			else{
    				User::where('verify_id', $request[0]['user_verify_id'])->update($request[0]['user']);

    				$response_data=array(
		                'status'=>1,
		                'message'=>"Successfully Updated",
		                'success_code'=>200,
		                'data'=>[]
            		);
    			}
			}
			else{
				User::where('verify_id', $request[0]['user_verify_id'])->update($request[0]['user']);
					$response_data=array(
		                'status'=>1,
		                'message'=>"Successfully Updated",
		                'success_code'=>200,
		                'data'=>[]
            		);

			}
    	}

    	//For Tutor Table
    	if($request[0]['tutor']!=null){
    		Tutor::where('user_verify_id', $request[0]['user_verify_id'])->update($request[0]['tutor']);
    				$response_data=array(
		                'status'=>1,
		                'message'=>"Successfully Updated",
		                'success_code'=>200,
		                'data'=>[]
            		);
    	}

    	return response()->json($response_data);

	}

	public function create_new_qualification(Request $request){
		$user_verify_id=$request->input('user_verify_id');
		$country_id= $request->input('country_id');
		$institute_list_id= $request->input('institutes_list_id');
		$degree_level_id= $request->input('degree_level_id');
		$degree_id= $request->input('degree_id');
		$from_year= $request->input('from_year');
		$to_year= $request->input('to_year');

		$tutor_id= $this->get_user_id($user_verify_id);

		if($tutor_id==null){
			$response_data=array(
		        'status'=>0,
		        'message'=>"Unkown User!",
		        'success_code'=>401,
		        'data'=>[]
            );
		}
		else{
            UserQualification::create([
				'user_id'=>$tutor_id,
				'institutes_list_id'=> $institute_list_id,
				'degree_level_id'=> $degree_level_id,
				'degree_id'=> $degree_id,
				'from_year'=> $from_year,
				'to_year'=> $to_year,
			]);

			$response_data=array(
		        'status'=>1,
		        'message'=>"Successfully Added new Qualification!",
		        'success_code'=>200,
		        'data'=>[]
            );
		}

		return response()->json($response_data);
	}

	public function get_all_qualification_by_tutor($user_verify_id){
		$tutor_id= $this->get_tutor_id($user_verify_id);

		$qualification_data=UserQualification::with('Institute','Institute.Country','Degree')->where('tutor_id', $tutor_id)->where('is_deleted', 0)->get();


		$response_data=array(
		    'status'=>1,
		    'message'=>"Success!",
		    'success_code'=>200,
		    'data'=>$qualification_data
         );

		return response()->json($response_data);
	}

	public function delete_qualification(Request $request){
		$qualification_id =$request->input('qualification_id');
        UserQualification::where('id', $qualification_id)->update(['is_deleted'=> 1]);

		$response_data=array(
		    'status'=>1,
		    'message'=>"Successfully Deleted!",
		    'success_code'=>200,
		    'data'=>[]
         );

		return response()->json($response_data);

	}

	public function update_qualification(Request $request){
		$user_verify_id=$request->input('user_verify_id');
		$country_id= $request->input('country_id');
		$institute_list_id= $request->input('institutes_list_id');
		$degree_level_id= $request->input('degree_level_id');
		$degree_id= $request->input('degree_id');
		$from_year= $request->input('from_year');
		$to_year= $request->input('to_year');
		$qualification_id= $request->input('qualification_id');


		$tutor_id= $this->get_tutor_id($user_verify_id);

		if($tutor_id==null){
			$response_data=array(
		        'status'=>0,
		        'message'=>"Unkown User!",
		        'success_code'=>401,
		        'data'=>[]
            );
		}
		else{
            UserQualification::where('id', $qualification_id)->update([
				'institutes_list_id'=> $institute_list_id,
				'degree_level_id'=> $degree_level_id,
				'degree_id'=> $degree_id,
				'from_year'=> $from_year,
				'to_year'=> $to_year,
			]);

			$response_data=array(
		        'status'=>1,
		        'message'=>"Successfully Updated!",
		        'success_code'=>200,
		        'data'=>[]
            );
		}


		return response()->json($response_data);
	}

	public function create_new_experience(Request $request){
		$user_verify_id= $request->input('user_verify_id');

		$company_id= $request->input('company_id');
		$institute_id= $request->input('institute_id');
		$currently_work= $request->input('currently_work');
		$from_date= $request->input('from_date');
		$from_month= $request->input('from_month');
		$to_date= $request->input('to_date');
		$to_month= $request->input('to_month');
		$headline= $request->input('headline');
		$description= $request->input('description');
		$exp_type_id=$request->input('exp_type_id');


		$to_date_changer=$to_date.'-'.$to_month.'-'.'01';
		$tutor_id= $this->get_tutor_id($user_verify_id);
		if($currently_work==1){

			$to_date_changer=null;
			UserExperience::where('tutor_id', $tutor_id)->where('is_currently_work', 1)->update(['is_currently_work'=> 0, 'to_date'=>date('Y-m-d')]);
		}

		if($exp_type_id==4){
            UserExperience::create([
				'tutor_id'=> $tutor_id,
				'company_id'=> $company_id,
				'experience_type_id'=>$exp_type_id,
				'tagline'=>$headline,
				'from_date'=>$from_date.'-'.$from_month.'-'.'01',
				'to_date'=>$to_date_changer,
				'short_description'=>$description,
				'is_currently_work'=>$currently_work
			]);

			$response_data=array(
		        'status'=>1,
		        'message'=>"Successfully Created!",
		        'success_code'=>200,
		        'data'=>[]
            );
		}
		else{
            UserExperience::create([
				'tutor_id'=> $tutor_id,
				'institutes_list_id'=> $institute_id,
				'experience_type_id'=>$exp_type_id,
				'tagline'=>$headline,
				'from_date'=>$from_date.'-'.$from_month.'-'.'01',
				'to_date'=>$to_date_changer,
				'short_description'=>$description,
				'is_currently_work'=>$currently_work
			]);

			$response_data=array(
		        'status'=>1,
		        'message'=>"Successfully Created!",
		        'success_code'=>200,
		        'data'=>[]
            );
		}

		return response()->json($response_data);

	}

	public function update_experience(Request $request){

		$user_verify_id= $request->input('user_verify_id');
		$experience_id=$request->input('exp_id');
		$company_id= $request->input('company_id');
		$institute_id= $request->input('institute_id');
		$currently_work= $request->input('currently_work');
		$from_date= $request->input('from_date');
		$from_month= $request->input('from_month');
		$to_date= $request->input('to_date');
		$to_month= $request->input('to_month');
		$headline= $request->input('headline');
		$description= $request->input('description');
		$exp_type_id=$request->input('exp_type_id');


		$to_date_changer=$to_date.'-'.$to_month.'-'.'01';
		$tutor_id= $this->get_tutor_id($user_verify_id);
		if($currently_work==1){

			$to_date_changer=null;
            UserExperience::where('tutor_id', $tutor_id)->where('is_currently_work', 1)->update(['is_currently_work'=> 0, 'to_date'=>date('Y-m-d')]);
		}



		if($exp_type_id==4){
            UserExperience::where('id', $experience_id)->update([
				'tutor_id'=> $tutor_id,
				'company_id'=> $company_id,
				'institutes_list_id' =>null,
				'experience_type_id'=>$exp_type_id,
				'tagline'=>$headline,
				'from_date'=>$from_date.'-'.$from_month.'-'.'01',
				'to_date'=>$to_date_changer,
				'short_description'=>$description,
				'is_currently_work'=>$currently_work
			]);

			$response_data=array(
		        'status'=>1,
		        'message'=>"Successfully Updated!",
		        'success_code'=>200,
		        'data'=>[]
            );
		}
		else{
            UserExperience::where('id', $experience_id)->update([
				'tutor_id'=> $tutor_id,
				'institutes_list_id'=> $institute_id,
				'company_id'=> null,
				'experience_type_id'=>$exp_type_id,
				'tagline'=>$headline,
				'from_date'=>$from_date.'-'.$from_month.'-'.'01',
				'to_date'=>$to_date_changer,
				'short_description'=>$description,
				'is_currently_work'=>$currently_work
			]);

			$response_data=array(
		        'status'=>1,
		        'message'=>"Successfully Updated!",
		        'success_code'=>200,
		        'data'=>[]
            );
		}



		return response()->json($response_data);
	}

	public function get_all_experience_by_tutor($user_verify_id){
		$tutor_id= $this->get_tutor_id($user_verify_id);

		$experience_data=UserExperience::with('Experience_type', 'Institute', 'Company')->where('tutor_id', $tutor_id)->where('is_deleted', 0)->orderBy('is_currently_work', 'DESC')->orderBy('from_date', 'DESC')->get();

		$response_data=array(
		        'status'=>1,
		        'message'=>"Successfull!",
		        'success_code'=>200,
		        'data'=>$experience_data
            );
		return response()->json($response_data);
	}

	public function delete_experience(Request $request){
		$exp_id =$request->input('experience_id');
        UserExperience::where('id', $exp_id)->update(['is_deleted'=> 1]);

		$response_data=array(
		    'status'=>1,
		    'message'=>"Successfully Deleted!",
		    'success_code'=>200,
		    'data'=>[]
         );

		return response()->json($response_data);
	}
}

