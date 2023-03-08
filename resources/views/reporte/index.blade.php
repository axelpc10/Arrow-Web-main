@extends('layouts.panel')
@section('estilos')
    <!-- JQuery DataTable Css -->
    <link href="{{asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

@endsection
@section('contenido')
<div class="container-fluid">
        <div class="block-header">
          
            <h2>Reportes </h2>
            <small class="text-muted">Bienvenido a la aplicación ARROW</small>
            @if (session('mensaje'))
            <div class="alert alert-success" role="alert">
              {{session('mensaje')}}
            </div>
            @endif
         
        </div>

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h4 class="text-center">Reporte</h4>
                    </div>
                    <table class="table"> 
                        <thead>
                                <tr>
                                    
                                    <th class="text-center">Fecha de inicio</th>
                                    <th class="text-center">Fecha de termino</th>
                                    <th class="text-center">Imprimir</th>
                                   
                                </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">2</td>
                                    <th class="text-center">
                                        <a href="{}" class="print"><i class="zmdi zmdi-print text-dark"></i></a>
                                    </th>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    

@endsection

