<?php

namespace App\Repositories;

use App\Models\chef;
use App\Repositories\BaseRepository;

/**
 * Class chefRepository
 * @package App\Repositories
 * @version July 31, 2022, 6:18 pm UTC
*/

class chefRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_chef',
        'deskripsi',
        'foto'
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
        return chef::class;
    }
}
