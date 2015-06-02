<html lang="pt-BR">
<head>
	
	<link rel="stylesheet" href="<?= base_url("css/foundation.css") ?>" />
	<link rel="stylesheet" href="<?= base_url("css/rapadura.css") ?>" />
    <script src="js/vendor/modernizr.js"></script>

	<title>Walmart</title>

</head>
<body>
	<div class="large-12 columns">
    	<div class="">
				<h1> <img class="imgPHP" src="<?= base_url("img/logo-php.png") ?>"> WALMART </h1>
				
				<table class="large-12 columns">
					<thead>
						<tr>
							<th>Produto</th>
							<th class="alnRight">Valor</th>
						</tr>
					</thead>

				<?php foreach ($produtos as $produto) : ?>

					 <tbody>
					  <tr>
					     <td><?= $produto["nome"] ?></td>

					     <td class="alnRight"><?= numeroReais($produto["preco"]) ?></td>
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