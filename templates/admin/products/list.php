<?php include_once DIR.'templates/admin/header.php'?>


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
  <h1 class="h2">Gerenciar Produtos</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
   <a  href="?page=admin/product/add" class="btn btn-sm btn-outline-secondary">
     Criar Produto
    </a>
  </div>
</div>

<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
        <tr>
          <th>ID</th>
          <th>Imagem</th>
          <th>Nome</th>
          <th>Preço</th>
          <th></th>
        </tr>
    </thead>
    <tbody>
      <?php foreach($products as $product): ?>
      <tr>
        <td><?php echo $product['id']?></td>
        <td><img src="uploads/<?php echo $product['image']?>" width="50" alt=""></td>
        <td><?php echo $product['name']?></td>
        <td><?php echo $product['price']?></td>
        <td></td>
      </tr>
    <?php endforeach?>
    </tbody>
  </table>
   
</div>



<?php include_once DIR.'templates/admin/footer.php'?>