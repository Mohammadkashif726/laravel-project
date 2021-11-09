<?php

namespace App\Repositories;

use App\Models\Student;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class StudentRepository
 * @package App\Repositories
 * @version July 27, 2018, 1:59 pm UTC
 *
 * @method Student findWithoutFail($id, $columns = ['*'])
 * @method Student find($id, $columns = ['*'])
 * @method Student first($columns = ['*'])
*/
class StudentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',

        'is_active',
        'is_deleted'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Student::class;
    }
}
