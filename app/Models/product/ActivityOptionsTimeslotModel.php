<?php

namespace App\Models\product;

use CodeIgniter\Model;

class ActivityOptionsTimeslotModel extends Model
{
    protected $table      = 'activity_options_availibity_timeslot';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'avaibility_id',
        'days',
        'time_slot',
    ];

    public function insertData($data)
    {
        $this->insert($data);
        return $this->getInsertID();
    }

    public function getDataById($id)
    {
        return $this->find($id);
    }

    public function getByConditions($param, $orderByField, $orderByDirection)
    {
        return $this->where($param)
                    ->orderBy($orderByField, $orderByDirection)
                    ->findAll();
    }
}