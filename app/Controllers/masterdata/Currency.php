<?php

namespace App\Controllers\masterdata;

use App\Controllers\BaseController;
use App\Models\masterdata\CurrencyModel;

class Currency extends BaseController
{
    public function index(): string
    {
    }

    public function getCurrency($code) {
        $M_currency = new CurrencyModel();
        $data = $M_currency->getDataByCode($code);

        return $this->response->setJSON($data);
    }
}