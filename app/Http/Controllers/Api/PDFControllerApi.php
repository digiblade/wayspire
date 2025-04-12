<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfControllerApi extends Controller
{
    public function generate(Request $request)
    {
        $html = $request->input('html');

        if (!$html) {
            return response()->json(['error' => 'HTML content is required'], 422);
        }

        $pdf = Pdf::loadHTML($html);

        // Option 1: Return as download
        // return $pdf->download('document.pdf');

        // Option 2: Return as inline response
        return $pdf->stream('document.pdf');
    }
}
