<?php
require_once '../views/layout/topo.php';
?>

<form action="../../controllers/UsuarioController.php" method="POST" class="was-validated container">
<div class="row">
    <div class="col-md-12">
        <h1>Cadastro</h1>
     </div>
</div>
<div class="row ">
    <div class="form-group col-md-6">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" placeholder="Insira um nome" name="nome" required>
      <div class="valid-feedback"></div>
      <div class="invalid-feedback">Você precisa preencher esse campo.</div>
    </div>

    <div class="form-group col-md-6">
      <label for="nome">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Insira seu email" name="email" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Você precisa preencher esse campo.</div>
    </div>
</div>

<div class="row">
    <div class="form-group col-md-3">
      <label for="senha">Senha:</label>
      <input type="password" class="form-control" id="senha" placeholder="Insira uma senha" name="senha" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Você precisa preencher esse campo</div>
    </div>

    <div class="form-group col-md-3">
      <label for="senha2">Confirmar Senha:</label>
      <input type="password" class="form-control" id="senha2" placeholder="Insira uma senha" name="senha2" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Você precisa preencher esse campo</div>
    </div>
</div>



  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<style>


</style>
<?php require_once '../views/layout/rodape.php';?>