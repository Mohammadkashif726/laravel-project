<?php

namespace App\Repositories;

use App\Models\UserQualification;
use Illuminate\Http\Request;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UserQualificationRepository
 * @package App\Repositories
 * @version July 30, 2018, 10:26 am UTC
 *
 * @method UserQualification findWithoutFail($id, $columns = ['*'])
 * @method UserQualification find($id, $columns = ['*'])
 * @method UserQualification first($columns = ['*'])
*/
class UserQualificationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'institute_id',
        'degree_title',
        'degree_image',
        'is_deleted'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return UserQualification::class;
    }

}
