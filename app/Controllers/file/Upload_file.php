<?php

namespace App\Controllers\file;

use App\Controllers\BaseController;

use App\Models\file\UploadModel;

class Upload_file extends BaseController
{
    public function index(): string
    {
        return view('admin/layout/admin_layout');
    }

    public function upload()
    {
        $file = $this->request->getFile('file');
        $parentId = $this->request->getPost('parent_id');

        // Check if the file is uploaded successfully
        if ($file->isValid())
        {
            // Move the uploaded file to a writable directory
            $newName = $file->getRandomName();
            $file->move(ROOTPATH ."public/uploads", $newName);

            // Insert image information into the database
            $data = [
                'name' => "activity_upload",
                'reg_date' => date("Y-m-d H:i:s"),
                'last_update' => date("Y-m-d H:i:s"),
                'upload_type' => "ACTIVITY",
                'parent_id' => $parentId,
                'filename' => $newName,
                'file_path' => 'uploads/'.$newName,
            ];

            $M_upload = new UploadModel();
            $M_upload->insert($data);

            return $this->response->setJSON(['status' => 'success']);
        }
        else
        {
            // Handle the error
            return $this->response->setStatusCode(500)->setJSON(['error' => $file->getErrorString()]);
        }
    }

    public function getUpload() {
        $parentId = $this->request->getGet('parent_id');

        $M_upload = new UploadModel();

        $param = [
            'parent_id' => $parentId,
            'upload_type' => "ACTIVITY",
        ];

        $data['data'] = $M_upload->getUploadByConditions($param, 'last_update', 'DESC');
        $data['status'] = 'success';

        return $this->response->setJSON($data);
    }
}