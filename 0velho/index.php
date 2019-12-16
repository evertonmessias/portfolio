<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width">
<link rel="icon" type="imagem/png" href="./imagens/eu.jpg" />
<title>Portfólio Éverton</title>
<!-- ------------------------------- ESTILO --------------------------------- -->
<link rel="stylesheet" href="./css/style.css" />

<!-- ------------------------ JAVASCRIPT -------------------------- -->
<script src="./js/jquery.js"></script>
<script src="./js/func.js"></script>
</head>
<!-- ******************************* B O D Y ***************************** -->
<body>
<div id="site">
    
<!-- ------------------------ CABEÇALHO ---------------------------- -->
<header>
<fieldset>

<div id="header1">    

<figure class="perfil">
    <a href="./"><img src="./imagens/eu.jpg" title="eu" alt="eu"></a>
</figure>

</div>
    
<div id="header2"> 

 <hgroup><h1 class="sitename"><a href="./">ÉVERTON</a></h1><h4>Portfólio</h4></hgroup>

</div>
<!-- ------------------------ MENU --------------------------------- -->

<div id="header3"> 
<nav id="menu">
<h1>Menu</h1>
<ul>
<a href="?p=home"><li>Home</li></a>
<a href="?p=arquivos"><li>Arquivos</li></a>
<a href="?p=contato"><li>Contato</li></a>

</ul></nav>
</div>

</fieldset>
</header>

<!-- ------------------------ CONTEUDO ----------------------------- -->
<div id="conteudo">
    
<?php
$pag = @$_GET['p'];
switch ($pag) {
    case 'home':
        include ('./home.php');
        break;
    case 'arquivos':
        include ('./arquivos.php');
        break;
    case 'contato':
        include ('./contato.php');
        break;
    default:
        include ('./home.php');
        break;
}
?>
    
</div>
<footer>Publicação não oficial e de responsabilidade do Autor</footer>

</div></body></html>
			
