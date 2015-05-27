<html lang="pt-BR">
<head>
	
	<link rel="stylesheet" href="css/foundation.css" />
	<link rel="stylesheet" href="css/rapadura.css" />
    <script src="js/vendor/modernizr.js"></script>

	<title>Walmart</title>

</head>
<body>
	<div class="large-12 columns">
    	<div class="">
				<h1> <img class="imgPHP" src="img/logo-php.png"> WALMART </h1>
				
				<table>
					<thead>
						<tr>
							<td>Produto</td>
							<td>Valor</td>
						</tr>
					</thead>

				<?php foreach ($produtos as $produto) : ?>

					 <tbody>
					  <tr>
					     <td class="sixteen columns"><?= $produto["nome"] ?></td>

					     <td class="sixteen columns alRight"><?= $produto["preco"] ?></td>
					  </tr>
					 </tbody>
				<?php endforeach ?>
				</table>
		</div>
	</div>

	<div class="large-12 columns direitos"> Tiago Serra - <a href="http://www.tiagoserra.com.br" target="_blank">www.tiagoserra.com.br</a></div>

	<script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
</body>
</html>