<html>
	<head>		
<!-- Folhas de estilo -->

<?php 
	session_start ();
	if (!isset ($_GET['id'])){
	$_SESSION['cor']=4;
	echo "<link rel='stylesheet' type=text/css href=Cinza.css >";
	} else {
	if ($_GET['id']==1) {$_SESSION['cor']=1; echo "<link rel='stylesheet' type=text/css href=Azul.css>";}
	if ($_GET['id']==2) {$_SESSION['cor']=2; echo "<link rel='stylesheet' type=text/css href=Verde.css>";}
	if ($_GET['id']==3) {$_SESSION['cor']=3; echo "<link rel='stylesheet' type=text/css href=Laranja.css>";}
	if ($_GET['id']==4) {$_SESSION['cor']=4; echo "<link rel='stylesheet' type=text/css href=Cinza.css>";}
	}
	
	
?>

<!-- Fim das folhas de estilo -->
<!-- Inicio do menu -->

        <div id=linksbarramenu class=barramenu>
                <ul id=imagens>
                        <li><a href=http://pedreira.org><img src=Imagens/logo.jpg height=24     width=40></a></li>&nbsp;&nbsp;&nbsp;
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
<!-- Usando tag 'map' para inserir um link no centro da imagem -->
		<div>
			<img src=Imagens/www.jpg id=ImagemTema usemap=#Map>
			<map name=map>
			<map name="Map">
				<area shape="rect" coords="300,100,900,300" <?php if (!isset ($_GET['id'])) {echo "<a href=index.php></a>";} 
								else {echo "<a href=index.php?id={$_GET['id']}></a>";}?>
			</map>
		</div>
		<p>
<!-- Inicio do menu para escolher a cor do site -->		
		<div id=Escolha>Escolha a cor do site: |<a href='index.php?id=1' id='Link_Azul'> Azul </a>| <a href='index.php?id=2' id=Link_Verde> Verde </a>| <a href='index.php?id=3' id=Link_Laranja> Laranja </a>|<a href='index.php?id=4' id=Link_Cinza> Cinza </a>|</div>
<!-- Fim do menu -->
<br>
<!-- Imagens da esquerda -->
		<img src=Imagens/Imagem1.gif class=Imagens_Esquerda id=Imagem_Esquerda1>
		<img src=Imagens/Imagem2.gif class=Imagens_Esquerda id=Imagem_Esquerda2>
		<img src=Imagens/Imagem3.gif class=Imagens_Esquerda id=Imagem_Esquerda3>
<!-- Texto central -->
		<div id=Texto_centro><font size=7><p align=center>
		<?php
			if(!isset ($_GET['text'])){
				echo "<br><br><br>Bem-Vindo</p>";
			} else {
			if($_GET['text']=='oq') {echo "<p align=center>Sites</p></font><font size=4><p align=justify>A sigla WWW significa World Wide Web, voc� sabe quando foi criado o primeiro site? Acha que faz muito tempo n�? Saiba que o primeiro site foi criado h� 21 anos, no dia 6 de agosto de 1991, por Tim Berners-Lee. A ideia era conectar os computadores dos f�sicos do CERN(Conseil Europ�en pour la Recherche Nucl�aire/Organiza��o Europ�ia Para Pesquisa Nuclear) para troca de informa��es em pesquisas. Berners-Lee batizou seu projeto de WorldWideWeb (Entrela�amento em todo o mundo/Rede de alcance mundial, ou seja, Mundo interligado, conectado).<p> O site n�o tinha nada alem de textos e links.(Imagem no final do texto)<p> Para criar sites, voc� precisa basicamente saber pelo menos uma linguagem de programa��o.<br><br><a href=http://www.flexer.com.br/blog/wp-content/uploads/2012/07/1981108-7026-rec.jpg>Imagem do primeiro site criado</a></p>";}
			if($_GET['text']=='linguagens') {echo "<p align=center>Linguagens de Programa��o</p></font><font size=4><p align=justify>� o metodo para se comunicar com o computador, cada linguagem tem sua fun��o. <br> Exemplos: <p> HTML(HyperText Markup Language): Linguagem utilizada na cria��o de sites, n�o possui intelig�ncia, serve apenas para colocar objetos na tela.<p>CSS(Cascading Style Sheets): Linguagem de formata��o. Formata texto, imagens, divs, etc.<p> PHP(Personal Home Page): Tamb�m usada para sites, � a 'intelig�ncia' do site, como se fosse o c�rebro, respons�vel por realizar desde c�lculos de 1 + 1 at� as fun��es mais complicadas. <p> Estas foram as linguagens utilizadas para criar este site. Existem muitas outras linguagens, como, JavaScript, Java(N�o � igual Javascript), C, C++, XML, etc. </p>";}
			if($_GET['text']=='ferramentas') {echo "<p align=center>Ferramentas de Programa��o</p></font><font size=4><p align=justify>Ferramenta de programa��o � o programa ou aplicativo usado para ajudar o programador a criar um aplicativo, site, programa, etc.<br> Para criar sites, por exemplo, a unica coisa que voc� precisa � de um simples editor de textos, isso mesmo, somente um EDITOR DE TEXTOS. Mas isso se n�o for utilizar uma linguagem como PHP, por exemplo, que precisa de um servidor para ser executado. <p> As ferramentas usadas neste site foram:<p> Notepad++: Editor de textos. <br> EasyPHP: Programa utilizado para executar arquivos PHP.</p>";}
			if($_GET['text']=='sobre') {echo "<p align=center>Sobre</p></font><font size=4><p align=justify>Este site foi criado para a 20� Feira de Ci�ncias do CEAP Pedreira, FECEP, com o intuito de falar sobre como s�o feitos os sites e um pouco sobre programa��o. Este site foi criado utilizando somente um editor de textos voltado para programa��o chamado Notepad++ (Notepad Plus Plus).<p> Agradecemos a aten��o e obrigado por visitar o nosso site. Lembrando que � poss�vel entrar em contato conosco apenas clicando no link 'Fale Conosco' e nos enviando sua d�vida, ou sugest�o, voc� tamb�m pode entrar em contato com outros visitantes do site na aba 'Chat'.</p>";}

			}
		?>
		</font></div>
<!-- Links da direita -->
		<div id=Links_Direita>
			<ul>
				<li>
				<?php if(!isset ($_GET['id'])) {
				echo "<a href=index.php?text=oq>"; } else { 
				echo "<a href=index.php?id={$_GET['id']}&text=oq>";} 
				?>
				Sites</a></li><br>
				<li>
				<?php if(!isset ($_GET['id'])) {
				echo "<a href=index.php?text=linguagens>"; } else { 
				echo "<a href=index.php?id={$_GET['id']}&text=linguagens>";} 
				?>Linguagens de Programa��o</a></li><br>
				<li>
				<?php if(!isset ($_GET['id'])) {
				echo "<a href=index.php?text=ferramentas>"; } else { 
				echo "<a href=index.php?id={$_GET['id']}&text=ferramentas>";} 
				?>Ferramentas de Programa��o</a></li><br>
				<?php if(!isset ($_GET['id'])) {
				echo "<a href=index.php?text=sobre>"; } else { 
				echo "<a href=index.php?id={$_GET['id']}&text=sobre>";} 
				?>Sobre este site</a></li><br>
			</ul>
		</div>
<!-- Fim de links da direita -->
		<div id=rodape><marquee scrolldelay="1">Obrigado por visitar o Site !! :D</marquee></div>
	</body>
</html>