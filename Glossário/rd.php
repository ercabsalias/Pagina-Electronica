<?php
# Inicnando a variavel que vai indentificar se temos que exibir o modal ou não
$exibirModal = false;
# Verificando se não existe o cookie
if(!isset($_COOKIE["usuarioVisualizouModal"]))
{
# Caso não exista entra aqui.

# Vamos criar o cookie com duração de 1 semana
    $diasparaexpirar = 7;
    setcookie('usuarioVisualizouModal', 'SIM', (time() + ($diasparaexpirar * 24 * 3600)));

# Seto nossa variavel de controle com o valor TRUE ( Verdadeiro)
    $exibirModal = true;
}

?>
<html>
<head>
    <title>Exemplo Abrir Modal Automaticamente</title>

    <!-- Bootstrap CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="modal fade" id="meumodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
                <h4 class="modal-title">Titulo Do Modal</h4>
            </div>
            <div class="modal-body">
                <p>Conteudo do modal vem aqui.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary">Ok</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Bootstrap JavaScript
================================================== -->
<!-- Colocado no final do documento para que as páginas carregam mais rápido -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<?php if($exibirModal === true) : ?>

    <script type="text/javascript">
        $(document).ready(function()
        {
            $("#meumodal").modal("show");
        });
    </script>

<?php endif;?>

</body>
</html>