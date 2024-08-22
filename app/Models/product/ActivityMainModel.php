<?php

namespace App\Models\product;

use CodeIgniter\Model;

class ActivityMainModel extends Model
{
    protected $table      = 'activity_main';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['category_id', 'title', 'introduce', 'description', 'highlights', 'inclusions', 'exclusions', 'guide_info_id', 'important_information', 'reg_date', 'last_update',];

    public function insertData($data)
    {
        $this->insert($data);

        // Retrieve the last inserted ID
        return $this->getInsertID();
    }

    public function getDataById($id)
    {
        return $this->find($id);
    }
        
    public function findWithFilePath() {
        return $this->db->query(
            "
            select *, (SELECT file_path FROM `upload_file` WHERE upload_type='ACTIVITY' AND parent_id=am.`id` ORDER BY last_update ASC LIMIT 0,1) as file_path from `activity_main` as am order by last_update desc"
        )->getResult();
    }

    public function getAllActivityWithPrice() {
        return $this->db->query(
            "
            SELECT 
                *,
                (
                SELECT time_duration_val FROM `activity_options`
                WHERE `activity_main_id`=act.`id`
                ORDER BY time_duration_val ASC
                LIMIT 1
                ) AS duration,
                (
                SELECT price.cust_pays FROM `activity_options_availibity_type_age_price` AS price
                JOIN `activity_options_availibity` AS av
                ON
                av.`id`=price.`avaibility_id`
                JOIN `activity_options` AS opt
                ON
                opt.`id`=av.`options_id`
                WHERE opt.`activity_main_id`=act.`id`
                ORDER BY price.`cust_pays` ASC
                LIMIT 1
                ) AS price,
                (
                SELECT file_path FROM `activity_photo`
                WHERE `activity_id`=act.`id`
                ORDER BY reg_date ASC
                LIMIT 1
                ) AS photo
                
                FROM `activity_main` AS act
            "
        )->getResult();
    }
}