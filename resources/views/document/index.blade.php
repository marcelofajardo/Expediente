@extends('layouts.appUser')
<title>Ver | Expedientes</title>
@section('content')
<div class="container">
    <div class="row">
        
        <hr>
        <h1 class='app-sub-titulo'> <i class='fa fa-file'></i>Codigo del <b>E</b>xpediente  {{$expediente->code}} </h1><hr>   
        <hr>
    </div>      
    <div class="row">
        <div class="panel panel-defauld">
            <div class="panel-body">
                <div>
                   <ul class="list-group">
                        <li class="list-group-item app-list-pdf bg-black-gradient" >
                            <div class="row">
                                <div class="col-lg-7"><h2>Demandante</h2></div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class='col-lg-5'>
                                    <label for="">Cedula:</label>
                                </div>
                                <div class='col-lg-5'>
                                    <p>{{$expediente->demandante->pais==1 ? 'V-' : 'E-'}}{{$expediente->demandante->dni}}</p>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-lg-5">
                                    <label for="">Nombre:</label>
                                </div>
                                <div class="col-lg-5">
                                    <p>{{$expediente->demandante->name}}</p>
                                </div>
                            </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <label for="">Apellido:</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <p>{{$expediente->demandante->lastname}}</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <label for="">E-mail:</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <p>{{$expediente->demandante->email}}</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-group">
                            <li class="list-group-item app-list-pdf bg-gray-active" >
                                <div class="row">
                                    <div class="col-lg-7">
                                        <h2>Demandado</h2>
                                    </div>
                                    <div class="col-lg-5">
                                        <img class='app-img-DD-pdf' src="{{asset('uploads/images/demandado/'.$expediente->imgDemandado)}}" alt="">                        
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class='col-lg-5'>
                                        <label for="">Cedula:</label>
                                    </div>
                                    <div class='col-lg-5'>
                                        <p>{{$expediente->demandado->pais==1 ? 'V-' : 'E-'}}{{$expediente->demandado->dni}}</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <label for="">Nombre:</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <p>{{$expediente->demandado->name}}</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <label for="">Apellido:</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <p>{{$expediente->demandado->lastname}}</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <label for="">E-mail:</label>
                                    </div>
                                    <div class="col-lg-5">
                                        <p>{{$expediente->demandado->email}}</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>    
                    <hr>           
                    <div class="container-fluid">
                        <div class="row">
                            <ul class="list-group">
                            <li class="list-group-item bg-blue-gradient" >
                                <h2>Tipo de la demanda</h2>    
                            </li>
                            <li class="list-group-item"> 
                                <p>{{$expediente->type->type}}</p>
                            </li>
                        </ul>
                    </div>
                    <hr>
                    <div class="container-fluid">
                        <div class="row">
                            <ul class="list-group">
                            <li class="list-group-item bg-aqua-gradient" >
                                <h2>Motivo de la demanda</h2>    
                            </li>
                            <li class="list-group-item"> 
                                <p>{{$expediente->reason->reason}}</p>
                            </li>
                        </ul>
                    </div>
                    <hr>
                    <form class="form-horizontal" method="POST" action="{{route('manageAdmin-More_Document-store')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="text" name='expediente_id' value="{{$expediente->id}}">
                        <div class='center' style='text-align: center;'>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6">
                                    <h2>PDF de Documento:</h2>
                                    <input type="file" name='imgDocument' class="hide imgDocument" id="imgDocument" data-multiple-caption="{count} files selected" require multiple />
                                    <label for="imgDocument"><span>PDF<i class='fa fa-upload'></i> </span></label>      
                                </div>
                                <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6">
                                    <h4>Documento solo debe de estar en un formato (.PDF).</h4>    
                                </div>
                            </div>
                        </div>   
                        <button class='btn btn-primary btn-block'>Crear</button> 

                    </form>
                    <hr>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection