<?php

namespace App\Models\transactions;

use CodeIgniter\Model;

class PaymentModel extends Model
{
    protected $table      = 'payment';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'trx_id',
        'order_id',
        'type',
        'method',
        'currency',
        'amount',
        'status',
        'link',
        'captures_id',
        'payment_amount',
        'payment_date',
        'reg_date',
        'last_update',
        'response_detail'
	];

    public function insertData($data)
    {
        try {
            $this->insert($data);
            return $this->getInsertID();
        } catch (Exception $e) {
            return false;
        }
    }

    public function updateByOrderId($orderId, $data)
    {
        try {
            return $this->where('order_id', $orderId)
                            ->set($data)
                            ->update();
        } catch (Exception $e) {
            return false;
        }
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

    public function count($param) {
        return $this->where($param)
                    ->countAllResults();
    }
}
