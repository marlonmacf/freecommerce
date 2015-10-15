@section('javascript')

    <script type="text/javascript">
        alert("aslkdfj");
        var cont = 1;
        function addForm(obj, resp) {
            $("#extras").append("<div class='col-md-4 col-md-offset-2'>");
            $("#extras").append("<div class='form-group'>");
            $("#extras").append("<label for='descricaoExtra'>Descricao: </label>");
            $("#extras").append("<input tipe='text' name='descricaoExtra" + cont + "' class='form-control'>");
            $("#extras").append("<br /></div></div>");
            $("#extras").append("<div class='col-md-3 col-md-offset-1'>");
            $("#extras").append("<div class='form-group'>");
            $("#extras").append("<label for='valorExtra'>Valor: </label>");
            $("#extras").append("<input tipe='text' name='valorExtra" + cont + "' class='form-control'>");
            $("#extras").append("<br /></div></div>");
            cont++;
        }
    </script>

@endsection

<script type="text/javascript">
    var cont = 1;
    function addForm(returnhtml) {
        $("#extras").append("<div class='col-md-4 col-md-offset-2'>");
        $("#extras").append("<div class='form-group'>");
        $("#extras").append("<label for='descricaoExtra'>Descricao: </label>");
        $("#extras").append("<input tipe='text' name='descricaoExtra" + cont + "' class='form-control'>");
        $("#extras").append("<br /></div></div>");
        $("#extras").append("<div class='col-md-3 col-md-offset-1'>");
        $("#extras").append("<div class='form-group'>");
        $("#extras").append("<label for='valorExtra'>Valor: </label>");
        $("#extras").append("<input tipe='text' name='valorExtra" + cont + "' class='form-control'>");
        $("#extras").append("<br /></div></div>");
        cont++;
    }
</script>