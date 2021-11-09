<?php

namespace App\Models;

use App\Models\Job;
use App\Message;
use App\Notifications\PasswordReset;
use App\Models\CourseOrder;
use App\Models\Order;
use App\Models\Review;
use App\Ticket;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    const STUDENT = 1;
    const TUTOR = 2;
    const INSTITUTE = 3;
    const SUPER_ADMIN = '4';
    const ACTIVE = '1';
    const NOT_ACTIVE = '0';
    const DELETED = '1';
    const NOT_DELETED = '0';
    const VERIFIED = 'VERIFIED';
    const UNVERIFIED = 'UNVERIFIED';
    const ALREADY_VERIFIED = 'ALREADY_VERIFIED';
    const PENDING = 'PENDING';
    const INVALID_ACCOUNT = 'INVALID_ACCOUNT';

    // Instructor profile status
    const INSTRUCTOR_NO = 'NO';
    const INSTRUCTOR_REQUESTED = 'REQUESTED';
    const INSTRUCTOR_APPROVED = 'APPROVED';
    const INSTRUCTOR_PENDING = 'PENDING';
    const INSTRUCTOR_DECLINE = 'DECLINE';
    const INSTRUCTOR_ONHOLD = 'ONHOLD';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_name',
        'verify_id',
        'role_id',
        'verified',
        'first_name',
        'last_name',
        'email',

        'profile_image',
        'cover_image',
        'gender',
        'dateofbirth',
        'created_by_admin',

        'tag_line',
        'short_desc',
        'over_view',

        'verify_token',
        'password',

        'latitude',
        'longitude',
        'country_id',
        'state_id',
        'city_id',
        'area_id',
        'zipcode',
        'phone_code',
        'phone',
        'whatsapp_phone_code',
        'whatsapp_number',
        'skype_reference',
        'social_facebook',
        'social_twitter',
        'social_linkedin',
        'social_pinterest',
        'social_googlePlus',
        'social_instagram',
        'is_instructor',
        'generated_pwd',

        'is_active',
        'is_deleted'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'verify_token',
        'verify_id'
    ];

    /**
     * Validation Rules
     */

    public static $rules = [
        'first_name' => 'required|min:3',
        'last_name' => 'required|min:3',
        'email' => 'required|email',
        'password' => 'required|min:6',
        'role' => 'required',
        'profile_image' => 'required'
    ];

    public function tutor(){
        return $this->hasOne('App\Models\Tutor');
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new PasswordReset($token));
    }

    public function student(){
        return $this->hasOne('App\Models\Student');
    }

    public function role(){
        return $this->belongsTo('App\Models\Role', 'role_id');
    }

    public function roles(){
        return $this->belongsTo('App\Models\Role', 'role_id', 'id');
    }

    public function country(){
        return $this->belongsTo('App\Models\Country', 'country_id');
    }

    public function qualifications(){
        return $this->hasMany('App\Models\UserQualification', 'user_id');
    }

    public function experiences(){
        return $this->hasMany('App\Models\UserExperience', 'user_id');
    }

    public function whatsAppNoCode(){
        return $this->belongsTo('App\Models\Country', 'whatsapp_phone_code');
    }

    public function phoneNoCode(){
        return $this->belongsTo('App\Models\Country', 'phone_code');
    }

    public function state(){
        return $this->belongsTo('App\Models\State','state_id');
    }

    public function city(){
        return $this->belongsTo('App\Models\City','city_id');
    }

    public function area(){
        return $this->belongsTo('App\Models\Area','area_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function followers(){
        return $this->belongsToMany(User::class, 'followers', 'user_id', 'follower_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function followings(){
        return $this->belongsToMany(User::class, 'followers', 'follower_id', 'user_id')->withTimestamps();
    }

    public function isFollowing(User $user)
    {
        return !! $this->followings()->where('follower_id', $user->id)->count();
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function communityFollowers(){
        return $this->belongsToMany(User::class, 'community_user', 'user_id', 'community_id')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function communityFollowings(){
        return $this->belongsToMany(User::class, 'community_user', 'community_id', 'user_id')->withTimestamps();
    }

    public function events(){
        return $this->belongsToMany(Event::class, 'event_user', 'user_id', 'event_id')->withTimestamps();
    }

    public function batches(){
        return $this->hasMany(Batch::class, 'owner_id');
    }

    // Message
    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }

    public function resumes(){
        return $this->hasMany(Resume::class);
    }

    public function jobsByPublisher(){
        return $this->hasMany(Job::class);
    }
    public function jobs(){
        return $this->belongsToMany(Job::class)->withPivot('cv_title', 'cover_letter');
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class)->withTimestamps();
    }

    public function profileSetting(){
        return $this->hasOne(ProfileSetting::class);
    }

    public function libraries(){
        return $this->hasMany(Library::class);
    }

    public function quizzes(){
        return $this->hasMany(Quiz::class, 'user_id');
    }

    public function hasPermission(){
        $hasPermission = false;
        $permissions = $this->getAttribute('permissions');
        if ( $this->is_active && $permissions->count()) {
            $hasPermission = true;
        }
        return (bool) $hasPermission;
    }

    public function quizAnswers() {
        return $this->hasMany(UserQuizAnswer::class, 'user_id');
    }
}
