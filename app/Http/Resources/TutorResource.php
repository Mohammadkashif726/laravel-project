<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TutorResource extends JsonResource
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
            'user' => $this->user($this->user),
            'profile' => $this->profile($this),
        ];
    }

    public function user(   $user){
        return [
            'user_name' => $user->user_name,
            'gender' => $user->gender,
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'email' => $user->email,
            'date_of_birth' => $user->dateofbirth,
            'phone_code' => $user->phone_code,
            'phone_number' => $user->phone,
            'hourly_rate' => $user->tutor->hourly_rate,
            'monthly_rate' => $user->tutor->monthly_rate,
            'whatsapp_phone_code' => $user->whatsapp_phone_code,
            'whatsapp_number' => $user->whatsapp_number,
            'tag_line' => $user->tag_line,
            'short_desc' => $user->short_desc,
            'over_view' => $user->over_view,
            'profile_image' => $user->profile_image,
            'latitude' => $user->latitude,
            'longitude' => $user->longitude,
            'country' => $user->country,
            'state' => $user->state,
            'city' => $user->city,
            'area' => $user->area,
            'social_linkedin' => $user->social_linkedin,
            'social_facebook' => $user->social_facebook,
            'social_twitter' => $user->social_twitter,
            'social_instagram' => $user->social_instagram
        ];
    }

    public function profile($profile){
        return [
            'CNIC' => $profile->cnic,
        ];
    }
}
