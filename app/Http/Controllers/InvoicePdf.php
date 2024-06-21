<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoicePdf extends Controller
{
    public function generate(){
        $data = array("name" => "Gustavo Araujo");
        $pdf = Pdf::loadView("pdf.invoice", $data);
        // $path = public_path();
        // $pdf->save($path."/invoice.pdf");
        //return $pdf->download("invoice.pdf");
        return $pdf->stream("invoice.pdf");
    }
}
