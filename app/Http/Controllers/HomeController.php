<?php

namespace App\Http\Controllers;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use App\Models\Historia;
use Ramsey\Uuid\Uuid;


class HomeController extends Controller
{
    public function createPDF(Historia $historia)
    {
        $dompdf = new Dompdf();
        $html = view('pdf.HistoriaPdf', compact('historia'))->render();
    
        $dompdf->loadHtml($html); // Cargar el contenido HTML
    
        $dompdf->setPaper('A4', 'portrait'); // Opcional: definir el tamaño y orientación del papel
    
        $dompdf->render(); // Renderizar el PDF
    
        $name = Uuid::uuid4()->toString(); // Generar el nombre del archivo
                
            return response()->streamDownload(function () use ($dompdf) {
                echo $dompdf->output();
            }, "$name.pdf");
    }
}
