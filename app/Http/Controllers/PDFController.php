<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;
 use PDF;

class PDFController extends Controller
{
    public function generatePDF($id)
    {
        $order=Order::findOrFail($id);
        $data = [
            'order' => $order,
            'date' => date('m/d/Y')
        ];
          
        $pdf = PDF::loadView('myPDF', $data)->setOptions(['defaultFont' => 'sans-serif']);;
    
        return $pdf->download('codesolutionstuff.pdf');
    }
}
