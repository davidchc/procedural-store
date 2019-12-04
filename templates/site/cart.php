<?php include_once DIR.'templates/site/header.php'?>
<div class=" py-5 bg-light">
	<div class="container">
		<form action="?page=carrinho" method="post">
		<input type="hidden" name="action" value="update">
			 <table class="table">
			 	<thead>
			 		<tr>
			 			<th>Nome</th>
			 			<th>Preço</th>
			 			<th>Quantidade</th>
			 			<th>SubTotal</th>
			 		</tr>
			 	</thead>
			 	<tbody>
			 		<?php foreach($products as $product) : ?>
			 			<tr>
			 				<td><?php echo $product['name']?></td>
			 				<td>R$<?php echo number_format($product['price'], 2, ',', '.')?></td>
			 				<td>
			 					<input type="number" name="quantity[<?php echo $product['id']?>]" value="<?php echo $product['quantity']?>">
			 				</td>
			 				<td>R$<?php echo number_format($product['subtotal'], 2, ',', '.')?></td>
			 			</tr>
				
					<?php endforeach?>
			 		
			 	</tbody>
			 </table>
			 
			<div class="text-center">
		 		<button type="submit" class="btn btn-success">Atualizar Carrinho</button>
				 <a href="?page=checkout" class="btn btn-danger">Finalizar Compra</a>
			 </div>
			
		</form>
	</div>
</div>
<?php include_once DIR.'templates/site/footer.php'?>

