<?php

//GRAVANDO NA SECAO

if(isset($_REQUEST['logar'])){

$usuario = $_REQUEST['usuario'];
$senha   = $_REQUEST['senha'];

//CONSULTANDO USUARIOS

$sql = "SELECT * FROM professores WHERE usuario ='$usuario' AND senha = '$senha' ";
$query = mysql_query($sql) or die(mysql_error());
$qtda  = mysql_num_rows($query);

//VERIFICANDO PERFIL DO USUARIO 

if($qtda == 0){
	echo 'Erro ao logar';	
	}else{	
			
		$_SESSION['usuario'] = $usuario;
		$_SESSION['senha']   = $senha;
		
		
		if($usuario=="33342008091"||$usuario=="00596629800"){
	
		header('Location: ./corretor/p1ep2.php?usuario='.$usuario);
		
		}
		
		if($usuario=="13841719830"||$usuario=="78375886653"){
	
		header('Location: ./corretor/biologia.php?usuario='.$usuario);
		
		}
		
		if($usuario==""||$usuario=="83588540644"){
	
		header('Location: ./corretor/index5.php?usuario='.$usuario);
		
		}
		
		if($usuario=="26420164800"||$usuario=="28609510832"){
	
		header('Location: ./corretor/index6.php?usuario='.$usuario);
		
		}
		
		if($usuario=="95874399615"||$usuario=="14435407817"){
	
	    
		header('Location: ./corretor/index7.php?usuario='.$usuario);
		
		}
		
		if($usuario=="16209441890"||$usuario=="51746069600"){
	
		header('Location: ./corretor/index8.php?usuario='.$usuario);
		
		}
		
		
		
	}
}
?>