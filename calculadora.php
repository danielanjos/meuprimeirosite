<html>
	<head>		
<!-- Folhas de estilo -->
<?php	
	session_start ();
	if (!isset ($_SESSION['cor'])){
	echo "<link rel='stylesheet' type=text/css href=Cinza.css >";
	} else {
	if ($_SESSION['cor']==1) {echo "<link rel='stylesheet' type=text/css href=Azul.css>";}
	if ($_SESSION['cor']==2) {echo "<link rel='stylesheet' type=text/css href=Verde.css>";}
	if ($_SESSION['cor']==3) {echo "<link rel='stylesheet' type=text/css href=Laranja.css>";}
	if ($_SESSION['cor']==4) {echo "<link rel='stylesheet' type=text/css href=Cinza.css>";}
	}
?>
<!-- Fim das folhas de estilo -->
<!-- Inicio do menu -->

        <div id=linksbarramenu class=barramenu>
                <ul id=imagens>
                        <li><a href=http://pedreira.org><img src=Imagens/logo.jpg height=24     width=40></a></li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </ul>
                <div class=divisao></div>
                        <ul id=linkbarramenu>
                                <li>|</li>
                                <li><?php if (!isset ($_GET['id'])) {echo "<a href=index.php>&nbsp;&nbsp;Home&nbsp;&nbsp;</a>";} 
								else {echo "<a href=index.php?id={$_GET['id']}>&nbsp;&nbsp;Home&nbsp;&nbsp;</a>";}?></li>
                                <li>|</li>
                                <li><a href=chat.php>&nbsp;&nbsp;Chat&nbsp;&nbsp;</a></li>
                                <li>|</li>
                                <li><a href=faleconosco.php>&nbsp;&nbsp;Fale Conosco&nbsp;&nbsp;</a></li>
                                <li>|</li>
								<li><a href=calculadora.php>&nbsp;&nbsp;Calculadora&nbsp;&nbsp;</a></li>
								<li>|</li>
                        </ul>
        </div>
<!-- Fim do menu-->
	</head>
	<body>
	<br><br><br>
		<form action=calculo.php method=post>
		Cálculo:<br>
			<input type=text name=num1> 
			<select name=operacao>
				<option> + </option>
				<option> - </option>
				<option> x </option>
				<option> / </option>
			</select>
			<input type=text name=num2>
			<input type=submit value=Calcular>
		</form>
	</body>
</html>