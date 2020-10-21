<?php

namespace App\Http\Controllers;

use App\Nota;
use Illuminate\Http\Request;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;


class NotaController extends Controller
{
    public function store(Request $request)
    {
        $info = $request->all();

        unset($info['_token']);

        $nota = Nota::create($info);
        //Despues que guardamos la data en la bd, se imprime

        $pdf = PDF::loadView('reportes.nota', compact('nota'));

        return $pdf->download('nota_romberries.pdf');
    }

    public function download()
    {
        $nota = Nota::find(5);

        $pdf = PDF::loadView('reportes.nota', compact('nota'));
        return $pdf->download('nota_romberries.pdf');
    }
}
