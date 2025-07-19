<?php
namespace App\Controllers;
use Dompdf\Dompdf;

class Receipt extends BaseController
{
    public function index()
    {
        $dompdf = new Dompdf();
        $html = '<h1>Fee Receipt</h1><p>Name: Ram Kumar</p><p>Amount: ₹1500</p>';
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("receipt.pdf", ["Attachment" => false]);
    }
}