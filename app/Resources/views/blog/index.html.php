<!DOCTYPE html>
<html>
	<head>
		<title>Bem vindo</title>
		<style type="text/css">
			body {
				background: #fff;
				padding: 2% 30%;
				font-size: 20px;
			}
			form {
				background: #ff3333;
				padding: 20px;
				cursor:pointer;
			    -webkit-border-radius: 10px;
			    border-radius: 10px;
			    box-shadow: 10px 10px gray;
			}
			h1 {
				color: #fff;
				font-family: 'Cooper Black';
			}
			label {
				font-weight: bold;
			}
			input[type=submit] {
				color: #000;
				font-weight: bold;
			    padding: 5px 40px; 
			    margin-left: 40%;
			    background: #ffffcc; 
			    border:0 none;
			    cursor:pointer;
			    -webkit-border-radius: 5px;
			    border-radius: 5px; 
			}
			input[type=text],[type=email] {
			    border: 1px solid #ccc;
			    height: 20px;
			    width: 460px;
			    padding: 5px;
			    -webkit-border-radius: 5px;
			    border-radius: 10px; 
			}
			textarea {
				border: 1px solid #ccc;
			    padding: 5px;
			    -webkit-border-radius: 5px;
			    border-radius: 10px; 
			}
		</style>
	</head>
	<body>
		<form action="<?php echo $view['router']->path ('home_page') ?>" method="POST">
			<h1>Comente!</h1>
			<label>Nome</label><br>
			<input type="text" name="nome">
			<br><br>
			<label>E-mail</label><br>
			<input type="email" name="email">
			<br><br>
			<label>Comentário</label><br>
			<textarea name="coment" cols="63" rows="7" ></textarea>
			<br><br>
			<input type="submit" name="Enviar">
		</form>
	</body>
</html>