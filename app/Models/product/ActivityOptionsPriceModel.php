<?php

namespace App\Models\product;

use CodeIgniter\Model;

class ActivityOptionsPriceModel extends Model
{
    protected $table      = 'activity_options_availibity_type_age_price';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'avaibility_id',
        'from',
        'to',
        'cust_pays',
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

    public function getLowestPrice($activity_main_id) {
        return $this->db->query(
            "
                SELECT price.cust_pays AS price FROM `activity_options_availibity_type_age_price` AS price
                JOIN `activity_options_availibity` AS av
                ON
                av.`id`=price.`avaibility_id`
                JOIN `activity_options` AS opt
                ON
                opt.`id`=av.`options_id`
                WHERE opt.`activity_main_id`= '".$activity_main_id."'
                ORDER BY price.`cust_pays` ASC
                LIMIT 1
            "
        )->getResult();
    }
}