<?php namespace App\Models\Academic;

use CodeIgniter\Model;

class PaperModel extends Model
{
    protected $table = 'papers';
    protected $primaryKey = 'id';
    protected $allowedFields = ['course_id', 'name', 'slug'];
}
