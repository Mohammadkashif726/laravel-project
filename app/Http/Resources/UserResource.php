<?php

namespace App\Http\Resources;

use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'user_name' => $this->user_name,
            'role' => $this->role,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'profile_image' => $this->profile_image,
            'cover_image' => $this->cover_image,
            'gender' => $this->gender,
            'dateofbirth' => $this->dateofbirth,
            'tag_line' => $this->tag_line,
            'short_desc' => $this->short_desc,
            'over_view' => $this->over_view,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'country' => $this->country,
            'state' => $this->state,
            'city' => $this->city,
            'area' => $this->area,
            'zipcode' => $this->zipcode,
            'phone_code' => $this->phone_code,
            'phone' => $this->phone,
            'whatsapp_phone_code' => $this->whatsapp_phone_code,
            'whatsapp_number' => $this->whatsapp_number,
            'skype_reference' => $this->skype_reference,
            'social_facebook' => $this->social_facebook,
            'social_twitter' => $this->social_twitter,
            'social_linkedin' => $this->social_linkedin,
            'social_pinterest' => $this->social_pinterest,
            'social_googlePlus' => $this->social_googlePlus,
            'social_instagram' => $this->social_instagram,
            'is_instructor' => $this->is_instructor,
            'tutor' => $this->role->id === User::TUTOR ? $this->tutorProfile($this) : '',
        ];
    }

    public function tutorProfile($tutor){
        return [
            'CNIC' => $tutor->tutor->cnic,
        ];
    }
}
