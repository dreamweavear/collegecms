<?php namespace App\Models\Academic;
use CodeIgniter\Model;


class ChapterModel extends Model {
    protected $table = 'chapters';
    protected $primaryKey = 'id';
    protected $allowedFields = ['unit_id', 'name', 'slug', 'content', 'created_at', 'updated_at'];
    protected $useTimestamps = true;


    protected function generateSlug(array $data)
    {
        if (!empty($data['data']['title'])) {
            $data['data']['slug'] = strtolower(url_title($data['data']['title']));
        }
        return $data;
    }

    public function getChaptersWithHierarchy()
    {
        return $this->db->table('chapters')
            ->select('chapters.*, units.name as unit_name, papers.name as paper_name, courses.name as course_name')
            ->join('units', 'chapters.unit_id = units.id')
            ->join('papers', 'units.paper_id = papers.id')
            ->join('courses', 'papers.course_id = courses.id')
            ->get()
            ->getResult();
    }
}


