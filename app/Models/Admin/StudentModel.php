<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table = 'students'; // आपकी database table का नाम
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'name',
        'course',
        'mobile',
        'email',
        'address',
        'gender',
        'photo'
        // जो fields आपके admission form में हैं
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
