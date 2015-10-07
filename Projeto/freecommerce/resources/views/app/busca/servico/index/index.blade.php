@extends('app.app')

@section('content')

    @include('app.partials.menuCategorias')

    <div class="container-fluid span9 text-center col-md-8 col-md-offset-2">
        <ul class="nav navbar-nav">
            <li><a href="">Visao Geral</a></li>
            <li><a href="">Descricao</a></li>
            <li><a href="">Servicos Extras</a></li>
            <li><a href="">Comentarios</a></li>
        </ul>
    </div>

    <div class="container span6 text-center col-md-5 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <p>Eu vou projetar uma cobertura profissional Album por $5</p>
            </div>
            <div class="panel-body">
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 text-left">
                    <small>em Capa De Ebook</small>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-right">
                    <small><i class="glyphicon glyphicon-time"></i> 4 Dias em media</small>
                </div>
                <br/><br/>

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="http://lorempixel.com/640/480/?1" alt="Chania">
                        </div>

                        <div class="item">
                            <img src="http://lorempixel.com/640/480/?2" alt="Chania">
                        </div>

                        <div class="item">
                            <img src="http://lorempixel.com/640/480/?3" alt="Chania">
                        </div>

                        <div class="item">
                            <img src="http://lorempixel.com/640/480/?4" alt="Chania">
                        </div>
                    </div>

                    <br/>
                    <br/>
                    <br/>

                    <!-- Left and right controls -->
                    <a class="left carousel-inner" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-inner" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
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

    <div class="container span6 text-center col-md-5 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <p>Sobre esse Servico</p>
            </div>
            <div class="panel-body text-justify">
                <p>
                    Looking for something as Complex and Awesome as My First 3 Samples?

                    What you will receive for 5$:
                    Front cover 1600 x 1600 pixels (Size editable)
                    3 FREE revisions so we can make your cover PERFECT!
                    THE BEST CUSTOM COVER EVER
                    100% Satisfaction

                    This is not a logo, poster, flyer, banner, graphic or other design gig. It's just an album cover.
                    You'll get a 1600x1600px image. (The standard album cover size).
                    NB - Please specify a color theme or any other things to use for the cover or label when you are
                    buying the gig. And try to give the maximum resolution images and transparent logos. I will not buy
                    stock images.

                    And i can Do a Audio Wave on Video with your Cover like this video Sample.
                    https://www.youtube.com/watch?v=Q9wW7oezzxA
                    Contact Me.
                    1 Song with 20$
                    5 Songs with 80$
                    10 Songs with 150$
                    Full Album Songs +10 with 10$ for Every Song

                    If you have any questions, feel free to ask me first. Thank you!
                </p>
            </div>
        </div>
    </div>

    <div class="container span6 text-center col-md-5 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <p>Confira os Extras do meu Servico</p>
            </div>
            <div class="panel-body">
                {!! Form::checkbox('name', 'value') !!}
            </div>
            <hr class="featurette-divider">
            <div class="panel-body">
                <br/><br/><br/>
            </div>
            <hr class="featurette-divider">
            <div class="panel-body">
                <br/><br/><br/>
            </div>
            <hr class="featurette-divider">
            <div class="panel-body">
                <br/><br/><br/>
            </div>
        </div>
    </div>

    <div class="container span6 text-center col-md-5 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <p>Comentario</p>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <br />
                </div>
            </div>
        </div>
    </div>
    <div class="container span6 text-center col-md-5 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <p>Comentario</p>
            </div>
            <div class="panel-body">
                <br/>
            </div>
        </div>
    </div>
    <div class="container span6 text-center col-md-5 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <p>Comentario</p>
            </div>
            <div class="panel-body">
                <br/>
            </div>
        </div>
    </div>
    <div class="container span6 text-center col-md-5 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <p>Comentario</p>
            </div>
            <div class="panel-body">
                <br/>
            </div>
        </div>
    </div>


@endsection