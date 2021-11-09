<?php

namespace App\Repositories;

use App\Models\UserExperience;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UserExperienceRepository
 * @package App\Repositories
 * @version August 1, 2018, 12:26 pm UTC
 *
 * @method UserExperience findWithoutFail($id, $columns = ['*'])
 * @method UserExperience find($id, $columns = ['*'])
 * @method UserExperience first($columns = ['*'])
*/
class UserExperienceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'experience_type_id',
        'company_id',
        'institute_id',
        'from_year',
        'to_year',
        'from_month',
        'to_month',
        'tagline',
        'description',
        'is_currently_work',
        'is_deleted'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return UserExperience::class;
    }
}
