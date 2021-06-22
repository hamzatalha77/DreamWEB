<?php

namespace App\Repositories;

use App\Models\Devoir;
use App\Repositories\BaseRepository;

/**
 * Class DevoirRepository
 * @package App\Repositories
 * @version June 17, 2021, 2:29 pm UTC
*/

class DevoirRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'titre',
        'objet'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Devoir::class;
    }
}
