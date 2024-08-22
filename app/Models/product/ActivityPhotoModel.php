<?php

namespace App\Models\product;

use CodeIgniter\Model;

class ActivityPhotoModel extends Model
{
    protected $table      = 'activity_photo';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = [
		'activity_id',
		'name',
		'filename',
		'file_path',
		'reg_date',
		'last_update'
	];

	public function getUploadByConditions($param, $orderByField, $orderByDirection)
    {
        return $this->where($param)
                    ->orderBy($orderByField, $orderByDirection)
                    ->findAll();
    }

    public function deleteById($id) {
        return $this->delete($id);
    }
}
