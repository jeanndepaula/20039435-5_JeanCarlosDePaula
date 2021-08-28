<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="shortcut icon" href="favicon.png" />
	<meta charset="utf-8">
	

	<title>Mapa</title>
	


	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    
	<link rel="stylesheet" href="css/boot.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
	<header class="main_header">
		<div class="main_header_content">
			<a href="index.php?pagina=home.php" class="logo">Doces caseiros da Maria</a>
			<nav class="main_header_content_menu">
				<ul>
					<li><a href="index.php?pagina=home.php">Home</a></li>
					<li><a href="index.php?pagina=about.php">Quem somos</a></li>
					<li><a href="index.php?pagina=produtos.php">Produtos</a></li>
					<li><a href="index.php?pagina=contact.php">Localização</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<main>
		<?php
			if (isset($_GET["pagina"]) && !empty($_GET["pagina"])) {
				$pagina = $_GET["pagina"];
				include ("./pages/" . $pagina);
			} else {
				//include ("home.php");
				echo "Página Principal";
			}
		?>

	</main>
	
	<footer>Jean Carlos de Paula - 20039435-5 - SUPERIOR DE TECNOLOGIA EM SISTEMAS PARA INTERNET</footer>
</body>
</html>
