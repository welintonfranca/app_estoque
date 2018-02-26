<?php
$titulo = "Pesquisa de produtos";
include 'cabecalho.php';?>
<h1>Pesquisar produtos</h1>
<br>
<form class="form-inline" action="produto-pesquisar.php" method="get">
    <div class="form-group">
        <label for="descricao">Descrição: </label>
    </div>
    <div class="form-group mx-sm-3 mb-2">
        <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Ex.: Sabão em pó" autofocus>
    </div>
    <button type="submit" class="btn btn-primary mb-2">
        <img src="../assets/images/ic_search_white_24px.svg" alt="Pesquisar">
        Pesquisar
    </button>
</form>
    <table class='table table-striped table-hover'>
        <tr class='text-center'>
            <th>ID</th>
            <th>Descrição</th>
            <th>Quantidade</th>
            <th>Valor</th>
            <th>Validade</th>
            <th></th>
            <th></th>
        </tr>
        <tr class='text-center'>
            <td>1</td>
            <td class='text-left'>Sabão em pó</td>
            <td>10,0</td>
            <td>3,45</td>
            <td>10/12/2018</td>
            <td>
                <a href='produto-excluir.php?id=1' class='btn btn-danger'><img src='../assets/images/ic_delete_white_24px.svg'> Excluir</a>
            </td>
            <td>
                <a href='produto-alterar.php?id=1' class='btn btn-warning'><img src='../assets/images/ic_mode_edit_black_24px.svg'> Alterar</a>
            </td>
        </tr>
    </table>


<?php include 'rodape.php';?>