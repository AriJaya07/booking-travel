<?php

namespace App\Models\transactions;

use CodeIgniter\Model;

class TransactionsDetailModel extends Model
{
    protected $table      = 'transactions_detail';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = [
		'trx_id',
        'options_id',
        'options_name',
        'img_path',
        'pax',
        'activity_date',
        'timeslot_id',
        'timeslot',
        'subtotal',
        'total',
        'note'
	];

    public function insertData($data)
    {
        $this->insert($data);

        return $this->getInsertID();
    }

    public function getByColumn($columeName, $value) {
        try {
            return $this->where($columeName, $value)->findAll();
        } catch (Exception $e) {
            return false;
        }
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
