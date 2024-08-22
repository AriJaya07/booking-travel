<?php

namespace App\Models\product;

use CodeIgniter\Model;

class ActivityItineraryModel extends Model
{
    protected $table      = 'activity_itinerary';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'activity_main_id',
        'location_name',
        'descriptions',
        'idx',
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

    public function deleteById($id) {
        return $this->delete($id);
    }
}