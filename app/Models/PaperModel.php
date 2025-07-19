<?php namespace App\Models;

use CodeIgniter\Model;

class PaperModel extends Model
{
    protected $table = 'papers';
    protected $primaryKey = 'id';
    protected $allowedFields = ['course_id', 'name', 'slug'];
}
