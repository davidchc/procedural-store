<?php include_once DIR.'templates/admin/header.php'?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
  <h1 class="h2">Criar Categorias</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
   <a  href="?page=admin/categories" class="btn btn-sm btn-outline-secondary">
     Listar Categoria
    </a>
  </div>
</div>


<form method="POST" action="?page=admin/category/add">
  <div class="form-group">
    <label for="name">Categoria</label>
    <input type="text" class="form-control" id="category" name="name" required />
  </div>

  <div class="form-group">
    <label for="description">Descrição</label>
   <textarea name="description" name="description" id="description"  class="form-control" cols="30" rows="10"></textarea>
  </div>



  <button type="submit" class="btn btn-primary">Salvar</button>
</form>


<?php include_once DIR.'templates/admin/footer.php'?>