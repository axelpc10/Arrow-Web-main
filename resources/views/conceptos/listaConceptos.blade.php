@extends('layouts.panel')
@section('estilos')
    <!-- JQuery DataTable Css -->
    <link href="{{ asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<style>
    .paginate_button{
        display: none
    }

</style>
    @endsection
@section('contenido')

    <div class="container-fluid">
        <div class="block-header">
            <h2>Lista de Conceptos</h2>
            <small class="text-muted">Bienvenido a la aplicación ARROW</small>
            <div>
                @if (session('mensaje_error'))
                <div class="alert alert-danger" role="alert">
                  {{session('mensaje_error')}}
                </div>
                @endif

                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header ">
                                <h2>Lista de concepto de actividades</h2>
                              
                                <a href="{{route('codigo.principal',$concepto->id_contrato)}}" class="btn btn-raised btn-success m-auto" >Regresar</a>
                          
                            </div>
                           
                            <div class="body table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead class="bg-danger">
                                        <tr class="bg-info justify-content-center">
                                            <th>Codigo</th>
                                            <th>Concepto</th>
                                            <th>Unidad</th>
                                            <th>Cantidad</th>
                                            <th>P. Unitario</th>
                                          
                                            <th>Opciones</th>
                                        </tr>
                                    </thead>                            
                                    <tbody>
                                        @foreach ($conceptos as $concepto)
                                      
                                        <tr>
                                            <td>{{$concepto->codigo}}</td>
                                            <td>{{$concepto->concepto}}</td>
                                            <td>{{$concepto->nombre_unidad}}</td>
                                            <td>{{$concepto->cantidad}}</td>
                                            <td>{{$concepto->punitario}}</td>
                                         
                                            <td class="d-flex Justify-content-between  align-items-center flex-wrap ">
                                                <a href="{{route('concepto.ver',$concepto->id)}}" class="m-auto"><i class="material-icons text-info">visibility</i></a>

                                                @if ($concepto->estatus==1)
                                                <p class="m-auto"> <span class="badge bg-red">Inactivo</span></p>
                                                @endif
                                             
                                             
                                                @if ($concepto->estatus == 0)
                                                                   
                                                <form action="{{route('conceptosec.destroy',$concepto->id)}}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    @can('borrar-concepto')
                                                    <button type="submit" class="m-auto" style="cursor: pointer; background: transparent; border:0px;"><i class="material-icons text-danger">delete</i> </button>
                                                    @endcan
                                              </form >
                                              
                                              <a href="{{route('Avance.show',$concepto->id)}}" class="m-auto"><i class="material-icons">assignment</i></a>
                                                @endif
                          
                                                {{-- <button type="button" class="btn btn-sm btn-raised bg-grey waves-effect"> Ver avance </button> --}}
                                            </td>
                                           
                                        </tr>
                                        @endforeach
                                     
                                    </tbody>
                               
                                </table>
                                <div class="pagination justify-content-end">
                                    {!! $conceptos->links() !!}
                                </div>
                                
                            </div>
                            
                                
                            </div>


                        </div>
                    </div>
                </div>
               
            </div>
        </div>



        <!-- Exportable Table -->
     
        <!-- #END# Exportable Table -->
    </div>

    
@endsection
