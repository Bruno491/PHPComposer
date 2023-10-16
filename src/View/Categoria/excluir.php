<?php
    require "../src/View/cabecalho.php";
?>
    <h1>Excluir Categoria</h1>
    <form method="post" action="/categoria/deletar/<?=$resultado["id"]?>">
        <div class="row">
            <div class="col">
                <label for="descricao" class="form-label">
                    Descrição:
                </label>
                <input type="text" class="form-control" 
                    name="descricao" id="descricao"<?=$resultado['descricao']?> disabled/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h5 class="text-danget">
                    Deseja realmente excluir o registro?
                </h5>
                <button type="submit" class="btn btn-danger">
                    Deletar
                </button>
            </div>
        </div>
    </form>
<?php
    require "../src/View/rodape.php";
?>