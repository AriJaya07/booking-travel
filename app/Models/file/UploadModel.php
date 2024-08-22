<?php

namespace App\Models\file;

use CodeIgniter\Model;

class UploadModel extends Model
{
    protected $table      = 'upload_file';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = [
		'name',
		'reg_date',
		'last_update',
		'upload_type',
		'parent_id',
		'filename',
		'file_path'
	];

	public function getUploadByConditions($param, $orderByField, $orderByDirection)
    {
        return $this->where($param)
                    ->orderBy($orderByField, $orderByDirection)
                    ->findAll();
    }
}
