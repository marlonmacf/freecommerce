@extends('app.app')

@section('content')

    @include('app.partials.menuCategorias')

    <div class="container-fluid span9 text-center col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel panel-body">
                <div class="row col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <img src="{{"http://lorempixel.com/300/300/?1"}}" class="img-responsive">
                </div>
                <div class="row col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <img src="{{"http://lorempixel.com/300/300/?2"}}" class="img-responsive">
                </div>
                <div class="row col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <img src="{{"http://lorempixel.com/300/300/?3"}}" class="img-responsive">
                </div>
                <div class="row col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <img src="{{"http://lorempixel.com/300/300/?4"}}" class="img-responsive">
                </div>
            </div>
        </div>
    </div>

    <div class="container span6 text-center col-md-5 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel panel-heading"></div>
            <div class="panel panel-body">
                <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
            </div>
            <div class="panel panel-heading"></div>
        </div>
    </div>

    <div class="container span3 text-center col-md-3">
        <div class="panel panel-default"><br/><br/><br/><br/><br/><br/></div>
    </div>

    <div class="container span3 text-center col-md-3">
        <div class="panel panel-default"><br/><br/><br/><br/><br/><br/></div>
    </div>

    <div class="container span3 text-center col-md-3">
        <div class="panel panel-default"><br/><br/><br/><br/><br/><br/></div>
    </div>

@endsection