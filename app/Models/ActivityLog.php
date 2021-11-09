<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActivityLog extends Model
{
    //
    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    const JOB_CREATE = 'JOB_CREATE';
    const JOB_SEARCH = 'JOB_SEARCH';
    const JOB_SHOW = 'JOB_SHOW';
    const TUTOR_SEARCH = 'TUTOR_SEARCH';
    const TUTOR_PROFILE = 'TUTOR_PROFILE';

    const REGISTER_SIGNUP_ALREADY_EIST = 'REGISTER_SIGNUP_ALREADY_EIST';
    const REGISTER_SIGNUP_SUCCESS = 'REGISTER_SIGNUP_SUCCESS';
    const REGISTER_SIGNUP_ERROR = 'REGISTER_SIGNUP_ERROR';
    const REGISTER_RESEND_VERIFICATION_EMAIL = 'REGISTER_RESEND_VERIFICATION_EMAIL';
    const REGISTER_RESEND_VERIFICATION_EMAIL_ERROR = 'REGISTER_RESEND_VERIFICATION_EMAIL_ERROR';

    const LOGIN_SUCCESS = 'LOGIN_SUCCESS';
    const LOGIN_ERROR = 'LOGIN_ERROR';
    const LOGIN_ERROR_NOT_VERIFIED = 'LOGIN_ERROR_NOT_VERIFIED';
    const LOGIN_ERROR_INVALID_CREDENTIALS = 'LOGIN_ERROR_INVALID_CREDENTIALS';
}
