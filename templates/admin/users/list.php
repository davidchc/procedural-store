<?php include_once DIR.'templates/admin/header.php'?>


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
  <h1 class="h2">Gerenciar Usuarios</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
   <a  href="?page=admin/user/add" class="btn btn-sm btn-outline-secondary">
     Criar Usuario
    </a>
  </div>
</div>

<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>E-mail</th>
          <th></th>
        </tr>
    </thead>
    <tbody>
      <?php foreach($users as $user): ?>
      <tr>
        <td><?php echo $user['id']?></td>
        <td><?php echo $user['name']?></td>
        <td><?php echo $user['email']?></td>
        <td></td>
      </tr>
    <?php endforeach?>
    </tbody>
  </table>
   
</div>



<?php include_once DIR.'templates/admin/footer.php'?>