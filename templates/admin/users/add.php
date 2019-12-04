<?php include_once DIR.'templates/admin/header.php'?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
  <h1 class="h2">Criar Usuario</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
   <a  href="?page=admin/users" class="btn btn-sm btn-outline-secondary">
     Listar Usuario
    </a>
  </div>
</div>



<form method="POST" action="?page=admin/user/add">
  <div class="form-group">
    <label for="name">Nome</label>
    <input type="text" class="form-control" id="name" name="name" required />
  </div>

  <div class="form-group">
    <label for="email">E-mail</label>
    <input type="email" class="form-control" id="email" name="email" required />
  </div>

  <div class="form-group">
    <label for="password">Senha</label>
    <input type="password" class="form-control" id="password" name="password" required />
  </div>

  <button type="submit" class="btn btn-primary">Salvar</button>
</form>


<?php include_once DIR.'templates/admin/footer.php'?>