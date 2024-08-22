<?php

namespace App\Models\product;

use CodeIgniter\Model;

class ActivityOptionsModel extends Model
{
    protected $table      = 'activity_options';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'activity_main_id',
        'title',
        'languages',
        'private',
        'group_size',
        'is_audio_guide',
        'audio_guide',
        'is_info_booklets',
        'info_booklets',
        'is_time_length',
        'time_duration_val',
        'time_validity_val',
        'stop_accept_time',
        'meeting_point',
        'meeting_point_maplink',
        'describe_point',
        'time_before_activity',
        'reg_date',
        'last_update',
        'status'
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
}