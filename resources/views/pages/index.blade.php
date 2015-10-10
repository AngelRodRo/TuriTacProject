@extends('layout.masterbackground')
@section('content')
    <div class="container" >
        <div class="row">
            <div class="Absolute-Center is-Responsive">
                <div class="phrase container" >
                    <h1>
                        <p class="text-center">FRASE MOTIVADORA</p>
                    </h1>
                </div>
                <div class="container" >
                    <div class="row">
                        <div class="category col-lg-3 col-xs-3" style="padding: 5px ;">
                            <select class="form-control" name="" id="">
                                <option class="form-control" value="">Restaurantes</option>
                                <option class="form-control" value="">Centros de salud</option>
                                <option class="form-control" value="">Lugares turisticos</option>
                            </select>
                        </div>
                        <div class="searcher col-lg-7 col-xs-7 " style="padding: 5px;">
                            <input type="text" class="form-control" required placeholder="Buscar lugar..." >
                        </div>
                        <div class="btn-search col-lg-2 col-xs-2" style="padding: 5px;">
                            <div class="btn btn-primary">Buscar</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop