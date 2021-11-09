<?php

namespace App\Repositories;

use App\Models\User;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UserRepository
 * @package App\Repositories
 * @version September 25, 2018, 6:51 am UTC
 *
 * @method User findWithoutFail($id, $columns = ['*'])
 * @method User find($id, $columns = ['*'])
 * @method User first($columns = ['*'])
*/
class UserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_name',
        'first_name',
        'last_name',
        'email',
        'verified',
        'verify_token',
        'password',

        'profile_image',
        'cover_image',
        'gender',
        'dateofbirth',
        'phone_code',
        'phone',

        'tag_line',
        'short_desc',
        'over_view',

        'profile_views',
        'latitude',
        'longitude',
        'country_id',
        'state_id',
        'city_id',
        'zipcode',
        'whatsapp_phone_code',
        'whatsapp_number',
        'skype_reference',
        'social_facebook',
        'social_twitter',
        'social_linkedin',
        'social_pinterest',
        'social_googlePlus',
        'social_instagram',

        'is_active',
        'is_deleted',
        'verify_id',
        'role_id',
        'remember_token'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return User::class;
    }
}
