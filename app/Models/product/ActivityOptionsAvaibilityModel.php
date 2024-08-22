<?php

namespace App\Models\product;

use CodeIgniter\Model;

class ActivityOptionsAvaibilityModel extends Model
{
    protected $table      = 'activity_options_availibity';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'options_id',
        'schedule_name',
        'schedule_start_date',
        'schedule_end_date',
        'schedule_minpax',
        'schedule_maxpax',
        'reg_date',
        'last_update',
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