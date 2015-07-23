
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>jQuery Mobile: Theme Download</title>
	<link rel="stylesheet" href="themes/snct.min.css" />
	<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
	<div data-role="page" data-theme="c">
<div data-role="header" data-position="inline">
			<h1><img src="images/logo.png" style="max-width:100%;height:auto;"/></h1>
		</div>
		<div data-role="content" data-theme="c">
		 <?php if(isset($_SESSION['fb_login_error']) && $_SESSION['fb_login_error']): ?>
            <p class="message"><?php echo $_SESSION['fb_login_error'] ?></p>
        <?php unset($_SESSION['fb_login_error']); endif; ?>
        
        <?php if(isset($_SESSION['user_data']) && !empty($_SESSION['user_data'])): ?>
            <div id="facebook-data">
                <p>
                    <strong>Usuário logado com sucesso!</strong>
                </p>
                <p>
                    <strong>Nome: </strong><?php echo $_SESSION['user_data']['name'] ?>
                </p>
                <p>
                    <strong>E-mail: </strong><?php echo $_SESSION['user_data']['email'] ?>
                </p>
            </div>
            <br>
        <?php else: ?>
        <br><br>
            <center><a href="https://www.facebook.com/dialog/oauth?client_id=665576016876632&scope=email&redirect_uri=<?php echo urlencode('http://nutec.ufu.br/snctapp') ?>"><img src="images/face.png"  style="max-width:50%;height:auto;"></a><br>
        <?php endif; ?>
        
        Entre com o Facebook</center>
        
        <br><br>
        <div data-role="header" data-position="inline">
        
          <img src="https://lh3.googleusercontent.com/ZOqNlVz6zVwAW8360dmICG9LD4TccyYLkE1zxQux5uU=w936-h153" style="max-width:100%;height:auto;"> </div>
        
</div>



</body>
</html>