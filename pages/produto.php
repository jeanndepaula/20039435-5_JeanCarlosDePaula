<?php

include ("dados.php");

if (isset($_GET["id"]) && !empty($_GET["id"])) {
	$id = $_GET["id"];
} else {
	return 0;
}

foreach ($dado as $value) {
	if ($value["id"] == $id) {
	?>
		<section class="main_blog">
			<header class="main_blog_header">
				<h1><?=$value["nome"];?></h1>
			</header>
			<p><?=$value["descricao"];?></p>
			<img src="<?=$value["image"];?>" alt="<?=$value["nome"];?>" title="<?=$value["nome"];?>">
		</section>
<?php
	} else {
		//
	}
}

