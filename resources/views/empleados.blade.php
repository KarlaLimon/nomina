@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="d-flex justify-content-start">
                <FONT SIZE=10>Empleados</font>
            </div>

          
            
            <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Agregar empleado
            </button>
      
            <div class="table-responsive">
                <table id="empleados" name="empleados" class="table table-striped table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th style="display:none">Id</th>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Tipo de contrato</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($empleados as $e)
                            <tr>
                                <td style="display:none">{{$e->id}}</td>
                                <td>{{$e->codigo}}</td>
                                <td>{{$e->nombre}}</td>
                                <td>{{$e->correo}}</td>
                                @if($e->fk_id_tipo_contrato == 1)
                                <td>Temporal</td>
                                @else
                                <td>Indeterminado</td>
                                @endif
                                <td><button title="Editar" onclick="terminar_actividad({{$bitacora->id_actividad}})" class="actionbtn btn text-center btn-small btn-link font-weight-bold modificar"  type="submit" data-toggle="modal" data-target="#changeModal"><i class="fa fa-check" aria-hidden="true"></i></button></td>
                                <td><button title="Estatus" onclick="eliminar_actividad_pendiente({{$bitacora->id_actividad}})" class="actionbtn btn text-center btn-small btn-link font-weight-bold eliminar" id="eliminarmodelo" type="submit" data-toggle="modal" data-target="#changeModal"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                <td><button title="Eliminar" onclick="eliminar_actividad_pendiente({{$bitacora->id_actividad}})" class="actionbtn btn text-center btn-small btn-link font-weight-bold eliminar" id="eliminarmodelo" type="submit" data-toggle="modal" data-target="#changeModal"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        
            </div>
            <div class="modal fade modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Agregar empleado</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{route('empleados_create')}}" method="post">
                        @csrf
                    <div class="modal-body">
                        <div class="d-flex justify-content-center">
                            <div class="d-flex flex-row">
                                <div class="p-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Código">
                                    </div>
                                </div>
                                <div class="p-2">
                                    <div class="form-group"> 
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="p-2">
                                    <div class="form-group">   
                                        <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" placeholder="Apellido paterno">
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="d-flex flex-row">
                                <div class="p-2">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" placeholder="Apellido materno">
                                    </div>
                                </div>
                                <div class="p-2">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="correo" name="correo" placeholder="Email">
                                    </div>
                                </div>
                                <div class="p-2">
                                    <div class="form-group">
                                        <select class="js-example-basic-single col-mb-4" id="fk_id_tipo_contrato" name="fk_id_tipo_contrato" name="state">
                                            <option value="1">Temporal</option>
                                                ...
                                            <option value="2">Indeterminado</option>
                                        </select> 
                                    </div>
                                </div>
                            </div> 
                        </div>
                        
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                    <form>
                    </div>
                </div>
            </div>

        </div>
        
    </div>
</div>

@endsection

@section('scripts')
    <script src="jq/empleado.js"></script>
    
@endsection