
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container">
            <div class="col-md-4">
            <h2>Busqueda: {{$search}}</h2>
            <br>
            </div>
            <div class="col-md-8 pull-left panel panel-default">
                <form class="col-md-4 pull-right" action="{{url('/buscar/'.$search)}}" method="GET">
                    <label for="filter">Ordenar</label>
                    <select name="filter" class="form-control" id="">
                        <option value="new">Mas Nuevo primero</option>
                        <option value="old">Mas Antiguo primero</option>
                        <option value="alfa">de la A a la Z</option>
                    </select>
                    <input type="submit" value="Ordenar" class="btn-filter btn btn-sm btn-primary"/>
                </form>
            </div>
            <div class="clearfix"></div>
            @include('video.videosList')
            
        </div>
        
    </div>
</div>
@endsection


