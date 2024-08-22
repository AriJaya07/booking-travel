<?php

namespace App\Models\masterdata;

use CodeIgniter\Model;

class GuideInfoModel extends Model
{
    protected $table      = 'master_guide_info';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['name', 'last_update', 'reg_date', ];

    public function getDataById($id)
    {
        return $this->find($id);
    }
}