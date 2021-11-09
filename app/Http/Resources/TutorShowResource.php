<?php

namespace App\Http\Resources;

use App\Models\SubjectCategory;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class TutorShowResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $subjects = $this->tutor->subjects->map(function($subject){
            $subject->category_name = SubjectCategory::find($subject->pivot->subject_category_id)->name;
            return $subject;
        });
        $subjectData = $subjects->groupBy('category_name');

        $formatted_response = [];
        foreach ($subjectData as $category => $subjects) {
            $formatted_response[] = [
                'category_name' => $category,
                'subjects' => $subjects
            ];
        }

        return [
            'id' => $this->id,
            'user_name' => $this->user_name,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'date_of_birth' => $this->dateofbirth,
            'gender' => $this->gender,
            'monthly_rate' => $this->tutor->monthly_rate,
            'hourly_rate' => $this->tutor->hourly_rate,
            'phone_code' => $this->phone_code,
            'phone_number' => $this->phone,
            'whatsapp_phone_code' => $this->whatsapp_phone_code,
            'whatsapp_number' => $this->whatsapp_number,
            'tag_line' => $this->tag_line,
            'short_desc' => $this->short_desc,
            'over_view' => $this->over_view,
            'profile_image' => $this->profile_image,
            'country' => $this->country,
            'state' => $this->state,
            'city' => $this->city,
            'area' => $this->area,
            'subjectsList' => $formatted_response,
            // 'followers' => $this->followers,
            'qualifications' =>  new UserQualificationCollection($this->qualifications),
            'experiences' => UserExperienceResource::collection($this->experiences),

            'social_linkedin' => $this->social_linkedin,
            'social_facebook' => $this->social_facebook,
            'social_twitter' => $this->social_twitter,
            'social_instagram' => $this->social_instagram,
            'resumes' => ResumeCollection::collection($this->resumes->where('is_active', true)->sortByDesc('is_featured')),

            'created_at' => $this->created_at->format('F d, Y')
        ];
    }
}
