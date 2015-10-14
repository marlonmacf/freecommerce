<div class="col-md-8 col-md-offset-2">
    <div class="form-group">
        {!! Form::label('titulo', 'Titulo:') !!}
        {!! Form::text('titulo', null, ['class'=>'form-control']) !!}
    </div>
</div>


<div class="col-md-8 col-md-offset-2">
    <div class="form-group">
        {!! Form::label('descricao', 'Descricao:') !!}
        {!! Form::textarea('descricao', null, ['class'=>'form-control']) !!}
    </div>
</div>

<div class="col-md-8 col-md-offset-2">
    <div class="form-group">
        {!! Form::label('categoria', 'Categoria:') !!}
        {!! Form::select('categoria', array(null), null, ['class'=>'form-control']) !!}
    </div>
</div>

<div class="col-md-8 col-md-offset-2">
    <div class="form-group">
        {!! Form::label('competencia', 'Competencia:') !!}
        {!! Form::select('competencia', array(null), null, ['class'=>'form-control']) !!}
    </div>
</div>

<div class="col-md-4 col-md-offset-2">
    <div class="form-group">
        {!! Form::label('chaves', 'Palavras Chaves:') !!}
        {!! Form::text('chaves', null, ['class'=>'form-control']) !!}
    </div>
</div>

<div class="col-md-3 col-md-offset-1">
    <div class="form-group">
        {!! Form::label('duracao', 'Duracao:') !!}
        {!! Form::select('duracao', ["Ate 24 horas", "Ate 3 dias", "Ate 7 dias", "Mais que 7 dias"], null, ['class'=>'form-control']) !!}
    </div>
</div>

<div class="col-md-8 col-md-offset-2">
    <div class="form-group">
        <br />
        <h4>Galeria do Servico</h4>
    </div>
</div>

<div class="col-md-8 col-md-offset-2">
    <div class="row">
        <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2">
            <div class="form-group">
                {!! Form::button('<i class="glyphicon glyphicon-picture"></i> '.' Enviar ',['class' => 'btn btn-default', 'id' => 'btnCancelar']) !!}
            </div>
        </div>
        <div class="col-sm-10 col-xs-10 col-md-10 col-lg-10">
            <div class="form-group">
                {!! Form::button('<i class="glyphicon glyphicon-trash"></i> '.' Apagar ',['class' => 'btn btn-default', 'id' => 'btnApagar']) !!}
            </div>
        </div>
    </div>
</div>

<div class="col-md-8 col-md-offset-2">
    <div class="form-group">
        <h3><strong>Extras</strong></h3>
        {!! Form::button('<i class="fa fa-trash-o"></i> '.'Novo Extra',['class' => 'btn btn-default', 'id' => 'btnApagar']) !!}
    </div>
</div>

<div class="col-md-4 col-md-offset-2">
    <div class="form-group">
        {!! Form::label('descricaoExtra', 'Descricao:') !!}
        {!! Form::text('descricaoExtra', null, ['class'=>'form-control']) !!}
    </div>
</div>

<div class="col-md-3 col-md-offset-1">
    <div class="form-group">
        {!! Form::label('valorExtra', 'Valor:') !!}
        {!! Form::text('valorExtra', null, ['class'=>'form-control']) !!}
    </div>
</div>

<div class="col-md-4 col-md-offset-2">
    <div class="form-group">
        {!! Form::label('descricaoExtra', 'Descricao:') !!}
        {!! Form::text('descricaoExtra', null, ['class'=>'form-control']) !!}
    </div>
</div>

<div class="col-md-3 col-md-offset-1">
    <div class="form-group">
        {!! Form::label('valorExtra', 'Valor:') !!}
        {!! Form::text('valorExtra', null, ['class'=>'form-control']) !!}
    </div>
</div>

<div class="col-md-4 col-md-offset-2">
    <div class="form-group">
        {!! Form::label('descricaoExtra', 'Descricao:') !!}
        {!! Form::text('descricaoExtra', null, ['class'=>'form-control']) !!}
    </div>
</div>

<div class="col-md-3 col-md-offset-1">
    <div class="form-group">
        {!! Form::label('valorExtra', 'Valor:') !!}
        {!! Form::text('valorExtra', null, ['class'=>'form-control']) !!}
    </div>
</div>

<div class="col-md-8 col-md-offset-2">
    <div class="form-group">
        <br />
        {!! Form::submit('Salvar Servico', ['class'=>'btn btn-primary form-control']) !!}
    </div>
</div>