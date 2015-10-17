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
        {!! Form::select('categoria', $instances['categorias'], null, ['class'=>'form-control', 'placeholder' => 'Selecione uma Categoria', 'onclick' => 'buildCompetencias()', 'id' => 'categorias']) !!}
    </div>
</div>

<div class="col-md-8 col-md-offset-2">
    <div id="competencias" class="form-group"></div>
</div>

<div class="col-md-4 col-md-offset-2">
    <div class="form-group">
        {!! Form::label('chaves', 'Palavras Chaves:') !!}
        {!! Form::text('chaves', null, ['class'=>'form-control', 'placeholder' => 'chave1, chave2, chave3...']) !!}
    </div>
</div>

<div class="col-md-1 col-md-offset-1">
    <div class="form-group">
        {!! Form::label('valor', 'Valor:') !!}
        {!! Form::text('valor', null, ['class'=>'form-control', 'placeholder' => '$0,00']) !!}
    </div>
</div>

<div class="col-md-1 col-md-offset-1">
    <div class="form-group">
        {!! Form::label('duracao', 'Duracao:') !!}
        {!! Form::text('duracao', null, ['class'=>'form-control', 'placeholder' => '0 dias']) !!}
    </div>
</div>

<div class="col-md-8 col-md-offset-2">
    <div class="form-group">
        <br/>
        <h4>Galeria do Servico</h4>
    </div>
</div>

<div class="col-md-8 col-md-offset-2">
    <div class="form-group">
        {!! Form::file('imagensServico[]', ['class' => 'filestyle', 'multiple' => 'multiple', 'name' => 'imagensServico[]']) !!}
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
        document.getElementById("filho" + cont).innerHTML = "<div class='col-md-3 col-md-offset-2'> <div class='form-group'> <input tipe='text' placeholder='Descricao' name='descricaoExtra" + cont + "' class='form-control'> </div></div> <div class='col-md-2 col-md-offset-1'> <div class='form-group'> <input tipe='text' placeholder='Valor' name='valorExtra" + cont + "' class='form-control'> </div></div> <div class='col-md-1 col-md-offset-1'> <div class='row'> <div class='form-group'>  <a class='row btn btn-default' onclick='removeForm(" + cont + ")'> <i class='glyphicon glyphicon-trash'></i> Apagar </a> </div> </div> </div>";
        cont++;
    }

    function removeForm(id) {
        var objPai = document.getElementById("extras");
        var objFilho = document.getElementById("filho" + id);

        //Removendo o DIV com id específico do nó-pai:
        var removido = objPai.removeChild(objFilho);
    }

    function buildCompetencias() {
        //Removendo o DIV com id específico do nó-pai:
        var objPai = document.getElementById("competencias");
        var objFilho = document.getElementById("select");
        if (objFilho) {
            objPai.removeChild(document.getElementById("select"));
            objPai.removeChild(document.getElementById("label"));
        }

        //Recebe o valor da categoria selecionada
        var categoria = document.getElementById("categorias").value;

        if (categoria) {
            //Criando o elemento DIV;
            var objFilho = document.createElement("select");

            //Definindo atributos ao objFilho:
            objFilho.setAttribute("id", "select");
            objFilho.setAttribute("class", "form-control");

            //Inserindo o elemento no pai:
            objPai.innerHTML = "<label id='label' for='competencia'>Competencia: </label>";
            objPai.appendChild(objFilho);

            //Escrevendo algo no filho recém-criado:
            var options = "";
            var competencias = {!!json_encode($instances['competencias'])!!};

            for (var cont = 0; cont < competencias.length; cont++) {
                options += "<option value='" + competencias[categoria][cont] + "'>" + competencias[categoria][cont] + "</option>";
            }
            objFilho.innerHTML = options;
        }
    }

</script>