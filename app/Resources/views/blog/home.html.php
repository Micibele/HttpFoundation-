 <!DOCTYPE html>
 <html>
	 <head>
	 	<title>Principal</title>
	 	<style type="text/css">
	 		body {
				background: #fff;
				padding: 2% 30%;
				font-size: 20px;
			}
			h1 {
				color: #ff3333;
				font-family: 'Cooper Black';
			}
	 	</style>
	 </head>
	 <body>
	 	<h1>Bem vindo, <?php echo $nome ?>!</h1>

	 	<h3>Seu e-mail: <?php echo $email ?></h3>

	 	<p>Seu comentário: <br> <?php echo $coment ?></p>
	 </body>
 </html>