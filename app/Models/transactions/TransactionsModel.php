<?php

namespace App\Models\transactions;

use CodeIgniter\Model;

class TransactionsModel extends Model
{
    protected $table      = 'transactions';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = [
		'trx_date',
        'trx_num',
        'fullname',
        'email',
        'country',
        'phone',
        'currency',
        'rate',
        'total',
        'status',
        'reg_date',
        'last_update'
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

    public function updateData($id, $data)
    {
        try {
            $this->update($id, $data);
            return $this->find($id);
        } catch (Exception $e) {
            return false;
        }
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

    public function count($param) {
        return $this->where($param)
                    ->countAllResults();
    }

    public function countDataTable($where)
    {
        try {
            $query =  $this->join('transactions_detail', 'transactions_detail.trx_id = ' . $this->table . '.id');
            
            if($where!==null) {
                $query->where($where);
            }

            return $query->countAllResults();
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function listDataTable($where, $columnName = null, $columnSortOrder = null, $rowPerPage = null, $start = null)
    {
        try {
            $query =  $this->join('transactions_detail', 'transactions_detail.trx_id = ' . $this->table . '.id');

            if($where!==null) {
                $query->where($where);
            }

            if($columnName !== null && $columnSortOrder !== null){
                $query->orderBy($columnName, $columnSortOrder);
            }

            if($columnName !== null && $columnSortOrder !== null){
                $query->limit($rowPerPage, $start);
            }
            
            return $query->findAll();
        } catch (\Exception $e) {
            throw $e;
        }
    }

}
