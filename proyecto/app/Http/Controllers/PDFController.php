<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class PDFController extends Controller
{
    public function generatePDF(Request $request)
    {
        // Recibir datos del formulario
        $nombre = $request->input('nombre');
        $numero = $request->input('numero');
        $expiracion = $request->input('expiracion');
        $cvv = $request->input('cvv');
        $monto = $request->input('monto');

        // Crear un PDF
        $pdf = PDF::loadView('pdf_template', compact('nombre', 'numero', 'expiracion', 'cvv', 'monto'));

        // Devolver el PDF como descarga
        return $pdf->download('boleta_compra.pdf');
    }
}
