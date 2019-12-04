<?php include_once DIR.'templates/admin/header.php'?>


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
  <h1 class="h2">Gerenciar Categorias</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
   <a  href="?page=admin/category/add" class="btn btn-sm btn-outline-secondary">
     Criar Categoria
    </a>
  </div>
</div>

<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>         
          <th></th>
        </tr>
    </thead>
    <tbody>
      <?php foreach($categories as $category): ?>
      <tr>
        <td><?php echo $category['id']?></td>
        <td><?php echo $category['name']?></td>
        <td></td>
      </tr>
    <?php endforeach?>
    </tbody>
  </table>
   
</div>



<?php include_once DIR.'templates/admin/footer.php'?>