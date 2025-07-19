<?php 
namespace App\Controllers;

class Gallery extends BaseController
{
    public function index()
    {
        $data = [
            'page_title' => 'छात्र गैलरी - अरुण कम्प्यूटर',
            'meta_description' => 'अरुण कम्प्यूटर के पूर्व छात्रों की समूह तस्वीरें और यादगार पल',
            'gallery' => $this->getGalleryData(),
            'show_welcome_modal' => false
        ];

        return view('templates/headerdash1', $data)
              . view('gallery/index')
              . view('templates/footerdash');
    }

    protected function getGalleryData()
    {
        return [

            [
                'year' => '2024',
                'title' => 'DCA बैच 2023-24',
                'image' => 'batch-2024.jpeg',
                'students_count' => '28 छात्र'
            ],
            [
                'year' => '2023',
                'title' => 'PGDCA बैच 2022-23',
                'image' => 'batch-2023.jpg',
                'students_count' => '35 छात्र'
            ],
            [
                'year' => 'Jan-2024',
                'title' => 'DCA बैच 2024-25',
                'image' => 'june-2024.jpeg',
                'students_count' => '28 छात्र'
            ],
            // Add more batches as needed
            
            [
                'year' => '2018',
                'title' => 'DCA बैच 2017-18',
                'image' => 'batch-2018.jpg',
                'students_count' => '28 छात्र'
            ],
        ];
    }
}