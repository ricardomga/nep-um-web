<?php
require_once '../session.php';
confirmHealthProfessional();
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>NEP-UM</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../css/nep.css" title="style"/>
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src='../js/libs/jquery/jquery.js' type='text/javascript'></script>
  <script src='../js/objectCallers/loginCaller.js' type='text/javascript'></script>
  <script src='../js/objectCallers/domainCaller.js' type='text/javascript'></script>
  <script src='../js/functions/functions.js' type='text/javascript'></script>
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <a href="#"><img src="../imagens/nep_logo.jpg" alt="Erro"></a> 
          <img src="../imagens/terapeutas.jpg" alt="Erro" class="derp">
             </div>
          
        </div>
      </div>
      <div class="orange1">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="headerDP.php">Home</a></li>
          <li><a href="#">Perfil Pessoal</a>
          <ul>
              <li><a href="#">Consultar</a></li>
               <li><a href="#">Editar</a></li>
          </ul>
              </li>
              <li><a href="#">Exercícios</a>
              <ul>
              <li><a href="#">Criar Exercício</a></li>
              <li><a href="addEditDomain.php?id=1">Adicionar Domínio</a></li>
              <li><a href="addEditDomain.php?id=2">Editar Domínio</a></li>
              <li><a href="addEditSubDomain.php?id=1">Adicionar Sub-Dominio</a></li>
              <li><a href="addEditSubDomain.php?id=2">Editar Sub-Dominio</a></li>
          </ul>
              </li>
           <li><a href="#">Informação</a>
          <ul>
              <li><a href="#">Inserir Informação</a></li>
               <li><a href="#">Editar Informação</a></li>
               <li><a href="#">Consultar Informação</a></li>
               <li><a href="#">Adicionar Artigo</a></li>
               <li><a href="#">Consultar Artigos</a></li>
          </ul>
              <li><a href="#">Relatórios</a>
          <ul>
              <li><a href="#">Paciente </a></li>
               <li><a href="#">Anónimo</a></li>
              
          </ul>
           <li><a href="../login.php?logout=1" onClick="return confirm('Tem a certeza que quer sair?');">Logout</a>   </li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
        <h3><strong>Procurar:</strong></h3>
        <form method="post" action="#" id="search_form">
            <p>
            <input class="search" type="text" name="search_field" placeholder='Pesquisar...' />
            <input name="search" type="image" style="width: 90px; height: 10;border: 0; margin: 0 0 -9px 0px; margin-top: 5px" src="imagens/search.jpg" alt="Search" title="Search" />
          </p>
        </form>
        <br>
        <br>
        <br>
        <h3><strong> Fale Connosco:</strong></h3>
        <p style="margin-top: -20px">Nº de Atendimento:</p>
        <p style="color: orange; font-size: 30px; margin-top: -25px"><strong>253 601 398</strong></p>
        <br>
        <br>
        <br>
        <h3><strong> Parceiros: </strong></h3>
        <img style="margin-top: -15px; width: 200px; height: 50px" src="../imagens/uniao europeia.jpg">
        <img style="margin-top: 20px; width: 200px; height: 70px" src="../imagens/qren.jpg">
        <img style="margin-top: 25px; width: 225px; height: 50px" src="../imagens/fct.png">
        <img style="margin-top: 25px; width: 150px; height: 80px" src="../imagens/compete.png">
      </div>
        
        
    