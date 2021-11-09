<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\AppBaseController;

use App\Http\Resources\AnnouncementsCollection;
use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends AppBaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $userId = auth()->user()->id;
        $batchId = $request->batch_id;
        $type = $request->type;
        $batchSlug = $request->batch_slug;
        $accessingforProfile = $request->accessingforProfile;
        $announcementQuery = Announcement::
        when($batchId, function($query) use ($batchId){
            return $query->where('batch_id', $batchId);
        })
            ->when($type, function($query) use ($type){
                return $query->where('type', $type);
            })
            ->when($batchSlug, function($query) use ($batchSlug){
                $batchId = Batch::where('slug', $batchSlug)->first()->id;
                return $query->where('batch_id', $batchId);
            })
            ->when($accessingforProfile, function($query) use ($userId){
                return $query->where('owner_id', $userId);
            })
            ->orderBy('updated_at', 'desc')->get();

        $announcementCollection = AnnouncementsCollection::collection($announcementQuery);

        $result = response()->json([
            'data' => $announcementCollection
        ], 200);

        return $result;
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
        try {
            if($request->id){
                $announcement= Announcement::find($request->id);
            } else {
                $announcement= new Announcement();
            }

            $announcement->owner_id = auth()->user()->id;
            $announcement->title = $request->title;
            $announcement->description = $request->description;
            $announcement->status = $request->status;
            $announcement->is_featured = $request->is_featured;
            $announcement->type = $request->type;
            if($request->batch_id){
                $announcement->batch_id = $request->batch_id;
            }
            if($request->subject_id){
                $announcement->subject_id = $request->subject_id;
            }

            $announcement->save();
            $return = response()->json([
                'status' => 200,
                'announcement' => $announcement
            ]);
            return $return;
            // $tutorial-> $request->selectedTutorialVideo;
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function show(Announcement $announcement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function edit(Announcement $announcement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Announcement $announcement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function destroy($announcement)
    {
        try {
            $announcement = Announcement::findOrFail($announcement);
            $announcement->delete();
            $result = response()->json(['message' => 'success'], 200);
        } catch (Exception $e) {
            $result = response()->json(['error' => $e->getMessage()], 500);
        }

        return $result;
    }
}
