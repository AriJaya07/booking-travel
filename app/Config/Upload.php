<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Upload extends BaseConfig
{
    public $validFileTypes = [
        'jpg',
        'jpeg',
        'png',
        'gif',
        // Add more allowed extensions as needed
    ];
}
