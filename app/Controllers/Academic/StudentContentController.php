<?php namespace App\Controllers\Academic;

use App\Controllers\BaseController;
use App\Models\Academic\CourseModel;
use App\Models\Academic\PaperModel;
use App\Models\Academic\UnitModel;
use App\Models\Academic\ChapterModel;

class StudentContentController extends BaseController
{
    public function index()
{
    $courseModel = new \App\Models\Academic\CourseModel();
    $paperModel = new \App\Models\Academic\PaperModel();
    $unitModel = new \App\Models\Academic\UnitModel();
    $chapterModel = new \App\Models\Academic\ChapterModel();

    $data = [
        'courses' => $courseModel->findAll(),
        'papers' => $paperModel->findAll(),
        'units' => $unitModel->findAll(),
        'chapters' => $chapterModel->findAll(),
    ];

    //echo view('templates/headerdash1');
    echo view('student/sidebar_content', $data); // Sidebar left
    echo view('student/chapter_view');        // Right side default message
    echo view('templates/footerdash');
}
 

    public function viewChapter($slug)
    {
        $chapterModel = new ChapterModel();
        $chapter = $chapterModel->where('slug', $slug)->first();

        if (!$chapter) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Chapter not found");
        }

        $courseModel = new CourseModel();
        $paperModel = new PaperModel();
        $unitModel = new UnitModel();

        $data = [
            'chapter' => $chapter,
            'courses' => $courseModel->findAll(),
            'papers' => $paperModel->findAll(),
            'units' => $unitModel->findAll(),
            'chapters' => $chapterModel->findAll()
        ];

        //echo view('templates/headerdash1');
        echo view('student/sidebar_content', $data);
        echo view('student/chapter_view', ['chapter' => $chapter]);
        echo view('templates/footerdash');
    }
}