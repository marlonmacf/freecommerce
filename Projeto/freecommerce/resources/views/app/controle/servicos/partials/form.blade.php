<div class="col-md-8 col-md-offset-2">
    <div class="form-group">
        {!! Form::label('titulo', 'Titulo:') !!}
        {!! Form::text('titulo', null, ['class'=>'form-control', 'placeholder' => 'Titulo']) !!}
    </div>
</div>


<div class="col-md-8 col-md-offset-2">
    <div class="form-group">
        {!! Form::label('descricao', 'Descricao:') !!}
        {!! Form::textarea('descricao', null, ['class'=>'form-control', 'placeholder' => 'Descricao']) !!}
    </div>
</div>

<div class="col-md-8 col-md-offset-2">
    <div class="form-group">
        {!! Form::label('categoria', 'Categoria:') !!}
        {!! Form::select('categoria', array(null), null, ['class'=>'form-control', 'placeholder' => 'Selecione uma Categoria']) !!}
    </div>
</div>

<div class="col-md-8 col-md-offset-2">
    <div class="form-group">
        {!! Form::label('competencia', 'Competencia:') !!}
        {!! Form::select('competencia', array(null), null, ['class'=>'form-control', 'placeholder' => 'Selecione uma Competencia']) !!}
    </div>
</div>

<div class="col-md-4 col-md-offset-2">
    <div class="form-group">
        {!! Form::label('chaves', 'Palavras Chaves:') !!}
        {!! Form::text('chaves', null, ['class'=>'form-control', 'placeholder' => 'chave1, chave2, chave3...']) !!}
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
        <br/>
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

<div id="origem" class="col-md-8 col-md-offset-2">
    <div class="form-group">
        <h3><strong>Extras <a onclick='addForm()'><i class='glyphicon glyphicon-plus'></i></a></strong></h3>
    </div>
</div>

<div id="extras"></div>

<div class="col-md-8 col-md-offset-2">
    <div class="form-group">
        <br/>
        {!! Form::submit('Salvar Servico', ['class'=>'btn btn-primary form-control']) !!}
    </div>
</div>

<script type="text/javascript">
    var cont = 1;
    function addForm() {
        var objPai = document.getElementById("extras");
        //Criando o elemento DIV;
        var objFilho = document.createElement("div");
        //Definindo atributos ao objFilho:
        objFilho.setAttribute("id", "filho" + cont);
        //Inserindo o elemento no pai:
        objPai.appendChild(objFilho);
        //Escrevendo algo no filho recém-criado:
        document.getElementById("filho" + cont).innerHTML = "<div class='col-md-3 col-md-offset-2'> <div class='form-group'> <input tipe='text' placeholder='Descricao' name='descricaoExtra" + cont + "' class='form-control'> </div></div> <div class='col-md-2 col-md-offset-1'> <div class='form-group'> <input tipe='text' placeholder='Valor' name='valorExtra" + cont + "' class='form-control'> </div></div> <div class='col-md-1 col-md-offset-1'> <div class='form-group'>  <a class='btn btn-default form-control' onclick='removeForm(" + cont +")'> <i class='glyphicon glyphicon-trash'></i> Apagar </a> </div> </div>";
        cont++;
    }

    function removeForm(id) {
        var objPai = document.getElementById("extras");
        var objFilho = document.getElementById("filho" + id);

        //Removendo o DIV com id específico do nó-pai:
        var removido = objPai.removeChild(objFilho);
    }

    function addImage() {
        var
    }
</script>