<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;

class PDFController extends Controller
{
    public function downloadPageAsPDF()
    {
        $data = session('data');
        $html = view('layout.cv')->with(['date'=>$data])->render();
        // Create a Dompdf instance
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $dompdf = new Dompdf($options);

        // Load the HTML content into Dompdf
        $dompdf->loadHtml($html);


        // Set paper size and rendering options (if needed)
        $dompdf->setPaper('A4', 'portrait');

        // Render the PDF (takes some time)
        $dompdf->render();

        // Generate the PDF and force it as a download
        return $dompdf->stream('document.pdf');
    }
}

