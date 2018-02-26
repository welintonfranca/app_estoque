<?php
$titulo = "Alteração de produtos";
include 'cabecalho.php';?>
<h1>Alterar produto</h1>
    <form action="produto-alterar.php" method="post">
        <div class="form-group">
            <label for="id">ID</label>
            <input type="text" id="id" name="id" class="form-control">
        </div>
        <div class="form-group">
            <label for="descricao"><span class="text-danger">*</span> Descrição</label>
            <input type="text" id="descricao" name="descricao" required autofocus class="form-control">
        </div>
        <div class="form-group">
            <label for="quantidade"><span class="text-danger">*</span> Quantidade</label>
            <input type="text" id="quantidade" name="quantidade" required class="form-control">
        </div>
        <div class="form-group">
            <label for="valor">Valor</label>
            <input type="text" id="valor" name="valor" class="form-control">
        </div>
        <div class="form-group">
            <label for="validade">Validade</label>
            <input type="date" id="validade" name="validade" class="form-control">
        </div>
        <div class="form-group">
            Os campos com <span class="text-danger">*</span> não podem estar em branco.
        </div>
        <button type="submit" class="btn btn-success">
            <img src="../assets/images/ic_done_white_24px.svg" alt="Alterar o produto"> Alterar
        </button>
    </form>
<?php include 'rodape.php';?>