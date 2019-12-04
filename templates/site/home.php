<?php include_once DIR.'templates/site/header.php'?>
<div class=" py-5 bg-light">
	<div class="container">
		<div class="row">
			<?php foreach($products as $product) : ?>
			<div class="col-md-4">
				<img src="uploads/<?php echo $product['image']?>" class="card-img-top w-100" alt="">
				<div class="card shadow-sm">
					<div class="card-body">
						<h2><?php echo $product['name']?></h2>
						<p>R$ <?php echo number_format($product['price'], 2, ',', '.')?></p>
						<form action="?page=carrinho" method="post">
							<input type="hidden" name="action" value="add">
							<input type="hidden" name="id" value="<?php echo $product['id']?>">
							<button type="submit" class="btn btn-primary">Adicionar ao Carrinho</button>
							
						</form>
					</div>
				</div>
			</div>
		<?php endforeach?>
		</div>
	</div>
</div>
<?php include_once DIR.'templates/site/footer.php'?>

