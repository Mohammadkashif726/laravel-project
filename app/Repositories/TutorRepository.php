<?php

namespace App\Repositories;

use App\Models\Tutor;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TutorRepository
 * @package App\Repositories
 * @version July 27, 2018, 1:59 pm UTC
 *
 * @method Tutor findWithoutFail($id, $columns = ['*'])
 * @method Tutor find($id, $columns = ['*'])
 * @method Tutor first($columns = ['*'])
*/
class TutorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'fee_type_id',
        'fee_amount',
        'cnic',
        'map_url',
        'website_url',
        'hourly_rate',
        'intro_clip',
        'is_active',
        'is_deleted'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Tutor::class;
    }
}
