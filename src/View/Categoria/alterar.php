<?php
    require "../src/View/cabecalho.php";
?>
    <h1>Alterar Categoria</h1>
    <form method="post" action="/categoria/editar/<?=$resultado["id"]?>">
        <div class="row">
            <div class="col">
                <label for="descricao" class="form-label">
                    Informe a descrição:
                </label>
                <input type="text" class="form-control" 
                    name="descricao" id="descricao"<?=$resultado['descricao']?>/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-secondary">
                    Editar
                </button>
            </div>
        </div>
    </form>
<?php
    require "../src/View/rodape.php";
?>