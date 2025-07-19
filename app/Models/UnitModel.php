<?php namespace App\Models;

use CodeIgniter\Model;

class UnitModel extends Model
{
    protected $table = 'units';
    protected $primaryKey = 'id';
    protected $allowedFields = ['paper_id', 'name'];




public function getUnitsWithHierarchy()
{
    return $this->db->table('units')
        ->select('units.*, papers.name as paper_title, courses.name as course_title')
        ->join('papers', 'units.paper_id = papers.id')
        ->join('courses', 'papers.course_id = courses.id')
        ->get()
        ->getResult();
}




   public function getChaptersWithHierarchy()
    {
        return $this->db->table('chapters')
            ->select('chapters.*, units.name as unit_title, papers.name as paper_title, courses.name as course_title')
            ->join('units', 'chapters.unit_id = units.id')
            ->join('papers', 'units.paper_id = papers.id')
            ->join('courses', 'papers.course_id = courses.id')
            ->get()
            ->getResult();
    }


}