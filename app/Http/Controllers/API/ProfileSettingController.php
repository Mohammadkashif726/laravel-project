<?php

namespace App\Http\Controllers\API;

use App\Models\ProfileSetting;
use Illuminate\Http\Request;

class ProfileSettingController extends ApiBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProfileSetting  $profileSetting
     * @return \Illuminate\Http\Response
     */
    public function show(ProfileSetting $profileSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProfileSetting  $profileSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(ProfileSetting $profileSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProfileSetting  $profileSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = auth()->user();
        $profileSetting = $user->profileSetting;
        $profileSetting->update($request->all());
        $response = response()->json([
            'status'=>1,
            'message'=>'Success',
            'success_code'=>200,
            'data'=> $profileSetting,
        ]);
        return $response;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProfileSetting  $profileSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProfileSetting $profileSetting)
    {
        //
    }
}
