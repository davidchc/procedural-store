<?php include_once DIR.'templates/admin/header.php'?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
  <h1 class="h2">Criar Produto</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
   <a  href="?page=admin/products" class="btn btn-sm btn-outline-secondary">
     Listar Produto
    </a>
  </div>
</div>


<form method="POST" action="?page=admin/product/add" enctype="multipart/form-data">
  <div class="form-group">
    <label for="name">Nome</label>
    <input type="text" class="form-control" name="name" required />
  </div>

  <div class="form-group">
    <label for="name">Preço</label>
    <input type="text" class="form-control" name="price" required />
  </div>

    <div class="form-group">
    <label for="name">Imagem</label>
    <input type="file" class="form-control" name="image" />
  </div>


  <div class="form-group">
    <label for="name">Categoria</label>
    <select name="category_id"  class="form-control" required>
      <option value=""></option>
      <?php foreach($categories as $category) : ?>
        <option value="<?php echo $category['id']?>"><?php echo $category['name']?></option>
      <?php endforeach?>
    </select>
  </div>


  <div class="form-group">
    <label for="description">Descrição</label>
   <textarea name="description" name="description" id="description"  class="form-control" cols="30" rows="5"></textarea>
  </div>



  <button type="submit" class="btn btn-primary">Salvar</button>
</form>


<?php include_once DIR.'templates/admin/footer.php'?>