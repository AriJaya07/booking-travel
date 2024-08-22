<?php

namespace App\Models\product;

use CodeIgniter\Model;

class ActivityOptionsTypePriceModel extends Model
{
    protected $table      = 'activity_options_availibity_type_age';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'avaibility_id',
        'type_name',
        'age_from',
        'age_to',
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