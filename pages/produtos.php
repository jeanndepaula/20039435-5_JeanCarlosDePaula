<section class="main_blog">
	<header class="main_blog_header">
		<h1>Produtos</h1>
	</header>
	<?php
	
		include ("dados.php");

		foreach ($dado as $value) {
		?>
			<p>
				<a href="index.php?pagina=produto.php&id=<?=$value["id"];?>"><?=$value["nome"];?></a>
			</p>
		<?php
		}?>
</section>
