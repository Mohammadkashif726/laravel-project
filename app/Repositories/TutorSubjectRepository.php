<?php

namespace App\Repositories;

use App\Models\TutorSubject;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TutorSubjectRepository
 * @package App\Repositories
 * @version August 10, 2018, 6:32 pm UTC
 *
 * @method TutorSubject findWithoutFail($id, $columns = ['*'])
 * @method TutorSubject find($id, $columns = ['*'])
 * @method TutorSubject first($columns = ['*'])
*/
class TutorSubjectRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tutor_id',
        'subject_id',
        'subject_category_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TutorSubject::class;
    }
}
