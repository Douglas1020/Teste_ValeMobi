    <form name="formMercadoria" class="formMercadoria" method="post">
        <div class="form-group">
            <label for="inputNome">Nome da Mercadoria</label>
            <input type="text" class="form-control" id="inputNome" name="inputNome" placeholder="Nome da Mercadoria" required="true">
        </div>
        <div class="form-group">
            <label for="inputQuantidade">Quantidade</label>
            <input type="number" class="form-control" id="inputQuantidade" name="inputQuantidade" placeholder="Quantidade" required="true">
        </div>
        <div class="form-group">
            <label for="inputTipo">Tipo de Mercadoria</label>
            <input type="text" class="form-control" id="inputTipo" name="inputTipo" placeholder="Tipo de Mercadoria" required="true">
        </div>
        <div class="form-group">
            <label for="inputPreco">Preço</label>
            <input type="text" class="form-control" id="inputPreco" name="inputPreco" placeholder="Preço" required="true">
        </div>
        <div class="form-group">
            <label for="selectTipo"> Tipo de Negócio </label>
            <select class="form-control" id="selectTipo" name="selectTipo" required="true"> 
                <option value=""></option>
                <option value="Venda">Venda</option>
                <option value="Compra">Compra</option>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" id="envia" value="Cadastrar">
        </div>
    </form> 
<?php
    if(isset($_POST['inputNome']) && isset($_POST['inputQuantidade']) && isset($_POST['inputTipo']) && isset($_POST['inputPreco']) ) {
        insereMercadoria($_POST['inputNome'],$_POST['inputQuantidade'],$_POST['inputTipo'],$_POST['inputPreco'], $_POST['selectTipo']);
    }
?>