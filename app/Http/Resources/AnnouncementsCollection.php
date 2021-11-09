<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AnnouncementsCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        return [
            'announcement'=> $this->id,
            'title'=> $this->title,
            'slug'=> $this->slug,
            'description'=> $this->description,
            'status'=> $this->status,
            'is_featured'=> $this->is_featured,
            'type'=> $this->type,
            'owner'=> new UserResource($this->owner),
            'batch'=> new BatchesResource($this->batch),
            'event'=> new BatchesResource($this->event),
        ];
    }
}
