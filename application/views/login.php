<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>REP - SIS</title>
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/simple-login/css/reset.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/simple-login/css/style.css"> 
    <?php
    if($result == "ERRO")
    {
      ?>
      <script>
      alert("Atenção! Login ou senha incorretos.");
      </script>
      <?php
    }
    ?>
  </head>
  <body>
    <div class="container">
		  <div class="login">
		  	<h1 class="login-heading">
		      <strong>Olá!</strong> Identifique-se.</h1>
          
          

		      <form method="post">
		        <input type="text" name="user" placeholder="Usuário" required="required" class="input-txt" />
		          <input type="password" name="password" placeholder="Senha" required="required" class="input-txt" />
		          <div class="login-footer">
		             <!-- <a href="#" class="lnk">
		              <span class="icon icon--min">ಠ╭╮ಠ</span> 
		              I've forgotten something
		            </a> -->
		            <button type="submit" class="btn btn--right">Acessar  </button>
		          </div>
		      </form>
		  </div>
		</div>
    <script src="<?php echo $base_url; ?>assets/simple-login/js/index.js"></script>
  </body>
</html>
