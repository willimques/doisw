<?php
	session_start();
	include_once "config.php";
?>
<!DOCTYPE HTML>
<html lang="pt-BR">
	<head>
		<meta charset=UTF-8>
		<title>Busca Carrinho</title>
		<link href="css/style.css" type="text/css" rel="stylesheet" />
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/functions.js"></script>
	</head>

	<body>
		<form action="" method="post" enctype="multipart/form-data" id="form_busca">
			<label>
				<span>Buscar Produto</span>
				<input type="text" name="buscar" id="busca" />
			</label>
		</form>

		<div id="resultado_busca"></div>

		<form action="" method="post" enctype="multipart/form-data">
			<table border="0" cellpadding="0" cellspacing="0" width="80%">
				<thead>
					<tr>
						<td>Produto</td>
						<td>Valor</td>
						<td>Qtd</td>
						<td>Subtotal</td>
					</tr>
				</thead>

				<tbody id="content_retorno">
					<?php
					$total = 0;
					if(count($_SESSION['carrinho']) > 0):
					foreach($_SESSION['carrinho'] as $idProd => $qtd){
						$pegaProduto = $pdo->prepare("SELECT * FROM `produtos` WHERE `id` = ?");
						$pegaProduto->execute(array($idProd));
						$dadosProduto = $pegaProduto->fetchObject();
						$subTotal = ($dadosProduto->valor*$qtd);
						$total += $subTotal;
						
						echo '<tr><td>'.utf8_encode($dadosProduto->titulo).'</td><td>Valor</td><td><input type="text" id="qtd" value="'.$qtd.'" size="3" /></td>';
						echo '<td>R$ '.number_format($subTotal, 2, ',', '.').'</td></tr>';
						
					}
					echo '<tr><td colspan="3">Total</td><td id="total">R$ '.number_format($total, 2, ',','.').'</td></tr>';
					endif;
					?>
				</tbody>
			</table>
			<input type="submit" value="Concluir compra" class="botao" />
            <?php session_destroy();?>
		</form>
	</body>
</html>