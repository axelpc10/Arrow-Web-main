<?php

namespace App\Http\Controllers;

use App\Models\Avance;
use App\Models\Dato;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Dompdf\Dompdf;
use Dompdf\FontMetrics;

class ReporteController extends Controller
{
    //
    public function index(){
        return view('reporte.index');
    }

  
    public function show($id){
      return view('reporte.show');
    }

    public function imprimirpdf($id){
     
      //Datos de mi avance
        $dato=Dato::find($id);

        // return $dato;

    //Opciones seleccionadas de mi formulario
    $avance=Avance::where('id','=',$dato->id_avance)->first();

    // return $avance;
    $l=$avance->localizacion;
    $ap=$avance->anchoM;
    $an=$avance->anchoP;
    $vt=$avance->volumenT;
    $are=$avance->area;
    $al=$avance->altura;
    $es=$avance->espesor;
    $pie=$avance->pieza;
    $hd1=$dato->hombro_derecho1;
    $hd2=$dato->hombro_derecho2;
    $hi1=$dato->hombro_izquierdo1;
    $hi2=$dato->hombro_izquierdo2;
    $concepto=$dato->concepto;

    $PDFHD=PDF::loadView('reporte.index',['hd1'=>$hd1,'hd2'=>$hd2, 'hi1'=>$hi1,'hi2'=>$hi2,'concepto'=>$concepto,'avance'=>$avance,'l'=>$l,'an'=>$an,'al'=>$al,'ap'=>$ap,'vt'=>$vt,'pie'=>$pie,'es'=>$es,'are'=>$are]);
      //$PDFHD=PDF::loadView('reporte.index');
      //return view('reporte.index',compact('l','ap','an','vt','are','al','es','pie','avance','dato'));

      $PDFHD->setPaper('');

      return $PDFHD->stream();

        //return view('avances.pdfhd',compact('l','ap','an','vt','are','al','es','pie','avance','dato'));
    }
    
}
