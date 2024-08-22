<?php

namespace App\Models\product;

use CodeIgniter\Model;

class ActivityReviewModel extends Model
{
    protected $table      = 'activity_review';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'options_id',
        'activity_main_id',
        'comment',
        'rate',
        'name',
        'reg_date',
        'last_update'
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