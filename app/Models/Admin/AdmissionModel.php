<?php
namespace App\Models\Admin;
use CodeIgniter\Model;

class AdmissionModel extends Model
{
    protected $table = 'admissions';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'father_name', 'dob', 'course', 'phone', 'email', 'photo'];
}
