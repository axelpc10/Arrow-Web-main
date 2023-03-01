@extends('layouts.panel')
@section('estilos')
    <!-- JQuery DataTable Css -->
    <link href="{{asset('plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{asset('plugins/dropzone/dropzone.css')}}" rel="stylesheet">
<style>
    #dropzoneDragArea{
       background-color: #f2f2f2;
       border: 1px dashed #c0ccda;
       border-radius:6px;
       padding: 60px;
       text-align: center;
       margin-bottom: 15px;
       cursor:pointer;
   }
   .dropzone{
       box-shadow: 0px 2px 20px 0px #f2f2f2;
       border-radius: 10px;
   }

   #demoform{
       background-color: white !important;
   }
   .container-input {
   text-align: center;
   background: #f0f0f0;
   padding: 50px 0;
   border-radius: 6px ;
   width: auto;
   height: auto;
   margin: 0 auto;
   margin-bottom: 20px;
   border: 5px solid #dd5e89;
}

.inputfile {
   width: 0.1px;
   height: 0.1px;
   opacity: 0;
   overflow: hidden;
   position: absolute;
   z-index: -1;
}

.inputfile + label {
   max-width: 80%;
   font-size: 1.25rem;
   font-weight: 700;
   text-overflow: ellipsis;
   white-space: nowrap;
   cursor: pointer;
   display: inline-block;
   overflow: hidden;
   padding: 0.625rem 1.25rem;
}

.inputfile + label svg {
   width: 1em;
   height: 1em;
   vertical-align: middle;
   fill: currentColor;
   margin-top: -0.25em;
   margin-right: 0.25em;
}

.iborrainputfile {
   font-size:16px; 
   font-weight:normal;
   font-family: 'Lato';
}

   
.inputfile-5 + label {
   color: #dd5e89;
}

.inputfile-5:focus + label,
.inputfile-5.has-focus + label,
.inputfile-5 + label:hover {
   color: #dd5e89;
}

.inputfile-5 + label figure {
   width: 100px;
   height: 100px;
   border-radius: 50%;
   background-color: #dd5e89;
   display: block;
   padding: 20px;
   margin: 0 auto 10px;
}

.inputfile-5:focus + label figure,
.inputfile-5.has-focus + label figure,
.inputfile-5 + label:hover figure {
   background-color: #dd5e89;
}

.inputfile-5 + label svg {
   width: 100%;
   height: 100%;
   fill: #fff;
}

</style>

@endsection
@section('contenido')
<div class="container-fluid">
        <div class="block-header">
            <h2>Agregar Contrato</h2>
            <small class="text-muted">Bienvenido a la aplicación ARROW</small>
        </div>

        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
                        @if (session('mensaje_error'))
                        <div class="alert alert-danger" role="alert">
                          {{session('mensaje_error')}}
                        </div>
                        @endif
					</div>
					<div class="body">
                        <div class="row clearfix">
                            @if ($errors->any())
                                <div class="col-md-12">
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>!Revise los campos¡</strong>
                                            @foreach ($errors->all() as $error)
                                                <span >{{ $error }}</span>
                                            @endforeach
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                </div>
                            @endif
                           

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="card">
                                    <div class="header">

                                    </div>
                                    <div class="body">
                                        <form action="{{route('registrar.AvanceIz',$avance->id)}}" method="POST" file=true enctype="multipart/form-data">
                                            @csrf
                                        <div class="row clearfix">
                                           
                                            @if ($l==1)
                                            <div class="col-md-6 m-auto">
                                                <div class="form-group">
                                                    <b>Hombro Izquierdo 1</b>
                                                    <div class="form-line">
                                                        <input  type="number" min="0" step="0.01" step="any" class="form-control"  name="hombro_izquierdo1" placeholder="Hombro Izquierdo 1">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 m-auto">
                                                <div class="form-group">
                                                    <b>Hombro Izquierdo 2</b>
                                                    <div class="form-line">
                                                        <input  type="number" min="0" step="0.01" step="any" class="form-control"  name="hombro_izquierdo2" placeholder="Hombro Izquierdo 2">
                                                    </div>
                                                </div>
                                            </div>

                                          @endif


                                        </div>
                                        @if ($an==1)
                                        <div class="row clearfix">
                                            
                                            <div class="col-md-6 m-auto">
                                                <div class="form-group">
                                                    <b>Ancho 1</b>
                                                    <div class="form-line">
                                                        <input  type="number" min="0" step="0.01" step="any" class="form-control"  name="ancho1" placeholder="ancho1">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 m-auto">
                                                <div class="form-group">
                                                    <b>Ancho 2</b>
                                                    <div class="form-line">
                                                        <input  type="number" min="0" step="0.01" step="any" class="form-control"  name="ancho2" placeholder="ancho2">
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div><br>
                                        @endif


                                        <div class="row clearfix">
                                            
                                        @if ($al==1)
                                            <div class="col-md-6 m-auto">
                                                <div class="form-group">
                                                    <b>Altura</b>
                                                    <div class="form-line">
                                                        <input  type="number" min="0" step="0.01" step="any" class="form-control"  name="altura" placeholder="altura">
                                                    </div>
                                                </div>
                                            </div>

                                            @endif

                                            @if ($ap==1)
                                            <div class="col-md-6 m-auto">
                                                <div class="form-group">
                                                    <b>Ancho </b>
                                                    <div class="form-line">
                                                        <input type="number" min="0" step="0.01" step="any" class="form-control"  name="anchot" placeholder="Ancho ">
                                                    </div>
                                                </div>
                                            </div>
                                            @endif

                                        </div>
                                        
                                        
                                        <div class="row clearfix">
                                            
                                            @if ($pie==1)
                                                <div class="col-md-6 m-auto">
                                                    <div class="form-group">
                                                        <b>Pieza</b>
                                                        <div class="form-line">
                                                            <input type="number" class="form-control"  name="pieza" placeholder="pieza">
                                                        </div>
                                                    </div>
                                                </div>
    
                                                @endif
    
                                                @if ($es==1)
                                                <div class="col-md-6 m-auto">
                                                    <div class="form-group">
                                                        <b>Espesor </b>
                                                        <div class="form-line">
                                                            <input  type="number" min="0" step="0.01" step="any" class="form-control"  name="espesor" placeholder="Ancho ">
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
    
                                         

                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <strong> Foto </strong>
                                                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                                                    <img id="newimg" style="max-height: 200px;">
                                                </div>
                                                
                                                    {{-- <input type="file" name="newimg" id="newimg" accept="image/*" /> --}}
                                                    <div class="container-input">
                                                        <input type="file"  name="newimg" accept="image/*" id="file-5" class="inputfile inputfile-5" data-multiple-caption="{count} archivos seleccionados"  />
                                                        <label for="file-5">
                                                        <figure>
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="iborrainputfile" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"></path></svg>
                                                        </figure>
                                                        <span class="iborrainputfile">Seleccionar archivo</span>
                                                        </label>
                                                        </div>
                                            </div>
                                        <br>
                                       
                                        <div class="col-sm-12">
                                            <center>
                                            <button type="submit" class="btn btn-raised waves-effect g-bg-blush2">Guardar</button>
                                            <a href="" class="btn btn-raised btn-default waves-effect">Cancelar</a>
                                            </center>
                                        </div>
        
                                    {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>  

                        </div>
                    </div>
				</div>
			</div>
		</div>      
        
    </div>

@endsection