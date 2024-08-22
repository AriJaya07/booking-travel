<?php

namespace App\Models\masterdata;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table      = 'master_category';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['name', 'last_update', 'reg_date', ];
}