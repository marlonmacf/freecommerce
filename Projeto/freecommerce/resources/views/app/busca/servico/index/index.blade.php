@extends('app.app')

@section('content')

    @include('app.partials.menuCategorias')

    {{-- Menu --}}
    <div class="container-fluid span9 text-center col-md-8 col-md-offset-2">
        <ul class="nav navbar-nav">
            <li><a href="">Visao Geral</a></li>
            <li><a href="">Descricao</a></li>
            <li><a href="">Servicos Extras</a></li>
            <li><a href="">Comentarios</a></li>
        </ul>
    </div>

    {{-- Direita --}}
    <div class="container span6 col-md-5 col-md-offset-2">

        {{-- Galeria --}}
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Eu vou projetar uma cobertura profissional Album por $5</h4>
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

        {{-- Descricao --}}
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Sobre esse Servico</h4>
                </div>
                <div class="panel-body text-justify">
                    <p>
                        Looking for something as Complex and Awesome as My First 3 Samples?

                        What you will receive for 5$:
                        Front cover 1600 x 1600 pixels (Size editable)
                        3 FREE revisions so we can make your cover PERFECT!
                        THE BEST CUSTOM COVER EVER
                        100% Satisfaction

                        This is not a logo, poster, flyer, banner, graphic or other design gig. It's just an album
                        cover.
                        You'll get a 1600x1600px image. (The standard album cover size).
                        NB - Please specify a color theme or any other things to use for the cover or label when you are
                        buying the gig. And try to give the maximum resolution images and transparent logos. I will not
                        buy
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

        {{-- Extras --}}
        <div class="row">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h4>Confira os Extras do meu Servico</h4>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 text-left">
                            <p>Quantidade do servico basico</p>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right">
                            {!! Form::select("extra", ["1($5)","2($10)","3($15)","4($20)","5($25)","6($30)","7($35)","8($40)","9($45)","10($50)","11($55)","12($60)","13($65)","14($70)","15($75)"]) !!}
                        </div>
                    </div>
                </div>

                <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 text-left">
                            {!! Form::checkbox('extra', null) !!}
                            {!! Form::label('extra', "Quantidade") !!}
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right">
                            {!! Form::select("extra", ["1($5)","2($10)","3($15)","4($20)","5($25)","6($30)","7($35)","8($40)","9($45)","10($50)","11($55)","12($60)","13($65)","14($70)","15($75)"]) !!}
                        </div>
                    </div>
                </div>

                <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 text-left">
                            {!! Form::checkbox('extra', null) !!}
                            {!! Form::label('extra', "Quantidade") !!}
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right">
                            {!! Form::select("extra", ["1($5)","2($10)","3($15)","4($20)","5($25)","6($30)","7($35)","8($40)","9($45)","10($50)","11($55)","12($60)","13($65)","14($70)","15($75)"]) !!}
                        </div>
                    </div>
                </div>

                <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 text-left">
                            {!! Form::checkbox('extra', null) !!}
                            {!! Form::label('extra', "Quantidade") !!}
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right">
                            {!! Form::select("extra", ["1($5)","2($10)","3($15)","4($20)","5($25)","6($30)","7($35)","8($40)","9($45)","10($50)","11($55)","12($60)","13($65)","14($70)","15($75)"]) !!}
                        </div>
                    </div>
                </div>

                <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 text-left">
                            {!! Form::checkbox('extra', null) !!}
                            {!! Form::label('extra', "Quantidade") !!}
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right">
                            {!! Form::select("extra", ["1($5)","2($10)","3($15)","4($20)","5($25)","6($30)","7($35)","8($40)","9($45)","10($50)","11($55)","12($60)","13($65)","14($70)","15($75)"]) !!}
                        </div>
                    </div>
                </div>

                <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 text-left">
                            {!! Form::checkbox('extra', null) !!}
                            {!! Form::label('extra', "Quantidade") !!}
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right">
                            {!! Form::select("extra", ["1($5)","2($10)","3($15)","4($20)","5($25)","6($30)","7($35)","8($40)","9($45)","10($50)","11($55)","12($60)","13($65)","14($70)","15($75)"]) !!}
                        </div>
                    </div>
                </div>

                <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 text-left">
                            {!! Form::checkbox('extra', null) !!}
                            {!! Form::label('extra', "Quantidade") !!}
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 text-right">
                            {!! Form::select("extra", ["1($5)","2($10)","3($15)","4($20)","5($25)","6($30)","7($35)","8($40)","9($45)","10($50)","11($55)","12($60)","13($65)","14($70)","15($75)"]) !!}
                        </div>
                    </div>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12 text-right">
                                {!! Form::button('Comprar Agora',['class' => 'btn btn-success']) !!}
                                {!! Form::button('<i class="glyphicon glyphicon-shopping-cart"></i>',['class' => 'btn btn-success']) !!}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- Comentarios --}}
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 text-left">
                            <p><strong>5 Comentarios <i class="glyphicon glyphicon-star"></i><i
                                            class="glyphicon glyphicon-star"></i><i
                                            class="glyphicon glyphicon-star"></i><i
                                            class="glyphicon glyphicon-star-empty"></i><i
                                            class="glyphicon glyphicon-star-empty"></i></strong></p>
                        </div>
                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
                            {!! Form::select("comentarios", ["Mais recentes", "Comentarios Positivos", "Comentarios Negativos"]) !!}
                        </div>
                    </div>
                </div>

                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-left">
                            <a href=""><img src="http://lorempixel.com/640/480/?1"
                                            class="img-responsive img-circle"></a>
                        </div>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 text-left">
                            <small>
                                <p> Nome usuario <i class="glyphicon glyphicon-star"></i><i
                                            class="glyphicon glyphicon-star"></i><i
                                            class="glyphicon glyphicon-star"></i><i
                                            class="glyphicon glyphicon-star-empty"></i><i
                                            class="glyphicon glyphicon-star-empty"></i>
                                </p>

                                <p>
                                    Please specify a color theme or any other things to use for the cover or label
                                    when you are buying the gig.
                                </p>
                            </small>
                        </div>
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-left">
                            <a href=""><img src="http://lorempixel.com/640/480/?2"
                                            class="img-responsive img-circle"></a>
                        </div>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 text-left">
                            <small>
                                <p> Nome usuario <i class="glyphicon glyphicon-star"></i><i
                                            class="glyphicon glyphicon-star"></i><i
                                            class="glyphicon glyphicon-star"></i><i
                                            class="glyphicon glyphicon-star-empty"></i><i
                                            class="glyphicon glyphicon-star-empty"></i>
                                </p>

                                <p>
                                    Please specify a color theme or any other things to use for the cover or label
                                    when you are buying the gig.
                                </p>
                            </small>
                        </div>
                    </div>
                </div>

                <hr class="featurette-divider">

                <div class="panel-body">
                    <div class="form-group">
                        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-left">
                            <a href=""><img src="http://lorempixel.com/640/480/?3"
                                            class="img-responsive img-circle"></a>
                        </div>
                        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 text-left">
                            <small>
                                <p> Nome usuario <i class="glyphicon glyphicon-star"></i><i
                                            class="glyphicon glyphicon-star"></i><i
                                            class="glyphicon glyphicon-star"></i><i
                                            class="glyphicon glyphicon-star-empty"></i><i
                                            class="glyphicon glyphicon-star-empty"></i>
                                </p>

                                <p>
                                    Please specify a color theme or any other things to use for the cover or label
                                    when you are buying the gig.
                                </p>
                            </small>
                        </div>
                    </div>
                </div>

                <hr class="featurette-divider">

            </div>
        </div>

    </div>

    {{-- Esquerda --}}
    <div class="container span3 col-md-3">

        {{-- Comprar Agora --}}
        <div class="panel panel-default">

            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                        {!! Form::button('Comprar Agora',['class' => 'btn btn-success btn-lg btn-block']) !!}
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                        {!! Form::button('<i class="glyphicon glyphicon-shopping-cart"></i>',['class' => 'btn btn-success btn-lg']) !!}
                    </div>
                </div>
            </div>

            <div class="panel-footer">
                <div class="row">
                    <div class="col-xs-8 col-sm-8 ol-md-8 col-lg-8 text-left">
                        <p>Quantidade do servico basico</p>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-right">
                        {!! Form::select("extra", ["1($5)","2($10)","3($15)","4($20)","5($25)","6($30)","7($35)","8($40)","9($45)","10($50)","11($55)","12($60)","13($65)","14($70)","15($75)"]) !!}
                    </div>
                </div>
            </div>

        </div>

        {{-- Avaliacoes --}}
        <div class="panel panel-default">
            <div class="panel panel-body">
                <div class="row">
                    <div class="col-xs-7 col-sm-7 ol-md-7 col-lg-7 text-left">
                        <p>Avaliacao dos clientes</p>
                    </div>
                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
                        <p>
                        <td><i class="glyphicon glyphicon-star"></i><i class="glyphicon glyphicon-star"></i><i
                                    class="glyphicon glyphicon-star"></i><i
                                    class="glyphicon glyphicon-star-empty"></i><i
                                    class="glyphicon glyphicon-star-empty"></i></td>
                        <strong> 3,8</strong></p>
                    </div>
                </div>
                <hr class="featurette-divider">
                <div class="row">
                    <div class="col-xs-7 col-sm-7 ol-md-7 col-lg-7 text-left">
                        <p>Pedidos na fila</p>
                    </div>
                    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-right">
                        <p></td><strong>2</strong></p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Proprietarios --}}
        <div class="panel panel-default">
            <div class="panel-body text-justify">
                <a href=""><img src="http://lorempixel.com/640/480/?" class="img-responsive"></a>
                <hr class="featurette-divider">
                <p>Please specify a color theme or any other things to use for the cover or label when you are buying
                    the gig. And try to give the maximum resolution images and transparent logos. I will not buy stock
                    images. And i can Do a Audio Wave on Video with your Cover like this video Sample.</p>
                <hr class="featurette-divider">
                <div class="text-right">
                    {!! Form::button('<i class="glyphicon glyphicon-comment"></i> Contate-me',['class' => 'btn btn-default']) !!}
                </div>
            </div>
        </div>

    </div>

@endsection