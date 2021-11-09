<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateTutorAPIRequest;
use App\Http\Requests\API\UpdateTutorAPIRequest;
use App\Http\Resources\TutorResource;
use App\Http\Resources\StudentResource;
use App\Models\Tutor;
use App\Models\UserQualification;
use App\Models\User;
//use App\Repositories\TutorRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
//use Prettus\Repository\Criteria\RequestCriteria;
//use Response;
use Storage;
use File;
use Fileentry;

/**
 * Class TutorController
 * @package App\Http\Controllers\API
 */
class TutorAPIController extends AppBaseController
{
    /** @var  TutorRepository */
    private $tutorRepository;

    public function __construct()
    {
        // $this->tutorRepository = $tutorRepo;
    }

    /**
     * Display a listing of the Tutor.
     * GET|HEAD /tutors
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        // $this->tutorRepository->pushCriteria(new RequestCriteria($request));
        // $this->tutorRepository->pushCriteria(new LimitOffsetCriteria($request));
        // $tutors = $this->tutorRepository->all();

        // return $this->sendResponse($tutors->toArray(), 'Tutors retrieved successfully');
    }

    /**
     * Store a newly created Tutor in storage.
     * POST /tutors
     *
     * @param CreateTutorAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateTutorAPIRequest $request)
    {
//        $input = $request->all();
//        $tutors = $this->tutorRepository->create($input);

//        return $this->sendResponse($tutors->toArray(), 'Tutor saved successfully');
    }

    /**
     * Display the specified Tutor.
     * GET|HEAD /tutors/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Tutor $tutor */
        $tutor = $this->tutorRepository->findWithoutFail($id);

        if (empty($tutor)) {
            return $this->sendError('Tutor not found');
        }

        return $this->sendResponse($tutor->toArray(), 'Tutor retrieved successfully');
    }

    /**
     * Update the specified Tutor in storage.
     * PUT/PATCH /tutors/{id}
     *
     * @param  int $id
     * @param UpdateTutorAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTutorAPIRequest $request)
    {
        $input = $request->all();

        /** @var Tutor $tutor */
        $tutor = $this->tutorRepository->findWithoutFail($id);

        if (empty($tutor)) {
            return $this->sendError('Tutor not found');
        }

        $tutor = $this->tutorRepository->update($input, $id);

        return $this->sendResponse($tutor->toArray(), 'Tutor updated successfully');
    }

    /**
     * Remove the specified Tutor from storage.
     * DELETE /tutors/{id}
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Tutor $tutor */
        $tutor = $this->tutorRepository->findWithoutFail($id);

        if (empty($tutor)) {
            return $this->sendError('Tutor not found');
        }

        $tutor->delete();

        return $this->sendResponse($id, 'Tutor deleted successfully');
    }

    /**
     * Store personal detail of a tutor
     * @param Request $request
     * @return Response\
     */
    public function personalDetail(Request $request)
    {

        if($request->user()->role_id == User::STUDENT){
            $user = $request->user();
            $student = $user->student;
            return $this->sendResponse(new StudentResource($student));
        } else if ($request->user()->role_id == User::TUTOR){
            $user = $request->user();
            $tutor = $user->tutor;
            return $this->sendResponse(new TutorResource($tutor));
        }
    }


    public function updatePersonalDetail(Request $request)
    {
        $user = $request->user();
        try {
            $user->update($request->all());
            $tutor = $request->all();
            if (empty($request->whatsapp_number)) {
                $tutor['whatsapp_number'] = $request->phone;
            }
            $user->tutor->update($tutor);
            return $this->sendResponse('', 'Tutor profile updates successfully.');
        } catch (\Exception $e) {
            return $this->sendError('Tutor profile has not been updated.');
        }
    }

    public function subjectCategories(Request $request)
    {
        $user = $request->user();
        return $this->sendResponse($user->tutor->subjectCategories->pluck('id'));
    }

    public function updateProfilePhoto(Request $request){
        try {
            $base64_image = $request->profile_image;
            if (preg_match('/^data:image\/(\w+);base64,/', $base64_image)) {
                $data = substr($base64_image, strpos($base64_image, ',') + 1);

                $imageName = $request->user()->id.'_'.strtolower($request->user()->user_name) . '_' . date('d-m-Y-H-i') . '.'.'jpg';
                $data = substr($base64_image, strpos($base64_image, ',') + 1);
                $data = base64_decode($data);
                Storage::disk('public')->put('profile_photos/'.$imageName, $data);
                $id = Auth()->user()->id;
                $User = User::find($id);
                $User->profile_image = $imageName;

                $User->save();

                return http_response_code(200);
            }
            // $image = $request->profile_image;  // your base64 encoded
            // $image = str_replace('data:image/png;base64,', '', $image);
            // $image = str_replace(' ', '+', $image);
            // $image->storeAs('profile_photos', $imageName, 'public_uploads');
            // Storage::disk('public_storage')->put('profile_photos/'.$imageName, base64_decode($image));
            // return Storage::disk('local');
        } catch (Exception $e) {
            return http_response_code(500);
        }
    }
}
