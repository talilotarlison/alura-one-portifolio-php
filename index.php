
<?php
$paginas = [
  "sobre"=>"Sobre minha pagina.", 
"skills"=>"Sobre minha habilidades",
 "projetos"=>"Sobre meus projetos." 
];
$paginas["formação"] = "Sobre minha formação.";
$paginas["hobbies"] = "Sobre  meus hobbies.";
$paginas["contato"] = "Sobre meus contatos";
?>

<html lang="pt-br">
<!-- Infomações de config da pagina-->
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <?php
  echo "<title>Portifolio Alura One - ".ucfirst($_GET["page"]??"home")."</title>"
  ?>
  
  <link rel="stylesheet" type="text/css" href="styles.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="response.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="animation.css" media="screen" />
  <body>
  <header>
    <div class="container menu_inicio">
      <div class="logo">
        <img
          src="https://raw.githubusercontent.com/alura-challenges/challenge-one-portfolio-br/master/assets/vector.png" />
        <h2>Talilo Tarlison</h2>
      </div>
      <section class="menu-section">
        <div class="container-menu">
          <input type="checkbox" id="checkbox-menu" />
          <label class="menu-button-container" for="checkbox-menu">
            <span></span>
            <span></span>
            <span></span>
          </label>

          <nav>
            <ul class="menu">
              <?php 
            foreach($paginas as $key => $value){
              echo '<li>
                      <a href="?page='.$key.'"  title="'.$value.'">'.ucfirst($key).'</a>
                    </li>';
            } ;
        ?>

            </ul>
          </nav>
        </div>
      </section>
    </div>
  </header>

  <?php
      if(@$_GET["page"] == "sobre" || @$_GET["page"] == null){
        include("sobre_mim.php");
      }
      elseif($_GET["page"]   == "skills"){?>
       <main>
        <?php
      include("skills.php");
      }
      elseif($_GET["page"]  == "projetos"){
        include("projetos.php");
       } 
      elseif($_GET["page"] == "formação"){
        include("formacao.php");
       }
      elseif($_GET["page"]  == "hobbies"){
        include("hobbie.php");
        }
      elseif($_GET["page"]  == "contato"){
         include("form.php");
       }
      else{
          include("erro.php");
      }
?>

</main>
     
  <footer class="rodape">
    <p>Oracle ONE na Alura.</p>
    <p>Desenvolvido por Talilo Tarlison em &copy; 2022</p>
  </footer>
  <script src="script.js"></script>
  </body>
</html>