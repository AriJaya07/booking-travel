<?php

namespace App\Models\masterdata;

use CodeIgniter\Model;

class CurrencyModel extends Model
{
    protected $table      = 'master_currency';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['name', 'price', 'symbol', 'code'];

    public function getDataByCode($code)
    {
        return $this->where('code', $code)->first();
    }

}