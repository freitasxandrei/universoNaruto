<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Conteúdo exclusivo e reservado por Andrei de Freitas.">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Andrei de Freitas">
    <!-- RESPONSIVIDADE CSS BOOTSTRAP 4.6 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- RESPONSIVIDADE CSS BOOTSTRAP 4.6 -->
    <!-- COMEÇO CSS BOOTSTRAP 4.6 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- FIM CSS BOOTSTRAP 4.6 -->
    <title> FREITASXANDREI </title>
  </head>
  <body>
      <header>
        <nav class="navbar navbar-light bg-dark">
            <a class="navbar-brand" href="#">
                <img src="assets/image/logo.png" width="160" height="80">
            </a>
            <ul class="nav justify-content-end navandrei">
                <li class="nav-item">
                  <a class="nav-link" href="index.html"> INÍCIO </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="paginas/paiseskonoha.html"> PAISES </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="paginas/ranking.html"> RANKING </a>
                </li>
              </ul>
            </a>
        </nav>
      </header>

      <?php
      $teste = 1;
  ?>

        <div class="col-3" <?php echo ($teste == 0) ? "teste" : "alo"; ?>">
      <?php if($teste == 4) { ?>
            <img class="mb-2" src="C:\Users\freit\OneDrive\Área de Trabalho\universoNaruto\assets\image\perao.jpg" width="80" height="80">
            <small class="d-block mb-3 text-muted"> NÃO IRÁ APARECER! </small>
        </div>
      <?php } ?>

      <?php
      $teste = 1;
  ?>

      <div class="row list-style <?php echo ($teste == 0) ? "teste" : "alo"; ?>">
      <?php if($teste == 0) { ?>
        <h1> TESTANDO! NÃO VAI APARECER! </h1>
      <?php } ?>

      <?php
      $teste = 1;
  ?>

      <ul class="row list-style <?php echo ($teste == 0) ? "teste" : "alo"; ?>">
      <?php if($teste == 0) { ?>
      <li class="col-6 col-lg-3">
          <div class="card shadow-lg">
              <img src="assets/image/image1.jpg" class="card-img-top">
              <div class="card-body">
                  <h5 class="card-title"><?php echo "hellow world"; ?></h5>
                  <p class="card-text text-center text-sm-left text-lg-right">Some quick example text to build on
                      the card title and make up the bulk of
                      the card's
                      content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
          </div>
      </li>
      <?php } ?>

      <section>
          <header>
            <div class="jumbotron jumbotronandrei">
              <h1 class="display-4 andreidisplay-4"> <b> NARUTO </b> </h1>
              <br>
              <p class="lead">O universo de Naruto é um universo ficcional criado por Masashi Kishimoto em que a história do mangá shōnen Naruto, anime e associados se desenrola.</p>
              <hr class="my-4"> 
              <h2 class="andreih2"> Sumario </h2>
              <br>
              <p class="andreip"> Naruto Uzumaki é um menino que vive em Konohagakure no Sato ou simplesmente Konoha ou Vila Oculta da Folha, a vila ninja do País do Fogo. Quando ainda bebê, Naruto teve aprisionada em seu corpo a Kyuubi no Youko por Minato Namikaze (quarto Hokage, e seu pai), com a finalidade de salvar a Vila da Folha. Desde então, Naruto é visto por muitas pessoas como um monstro, não só pelos familiares das pessoas mortas pela Kyuubi, mas também por pessoas que não toleram suas brincadeiras, já que o mesmo é extremamente hiperativo, incompreendido e solitário. Naruto sonha em se tornar o Hokage de sua vila, um ninja poderoso e respeitado, para assim poder ser reconhecido por todos. Ele entra na academia ninja, onde sofre com as notas baixas, mas é ajudado por seu professor, Iruka Umino, que posteriormente se torna seu amigo. Consegue finalmente se tornar Gennin, e a partir daí passa a ser ensinado por um Jounin, Kakashi Hatake, e forma uma equipe com Sasuke Uchiha (que no começo não se dão bem) e Sakura Haruno, sua grande paixão. </p>
          </header>
          <section>
              <div id="carouselExampleCaptions" class="carousel slide andreicarrossel" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item">
                    <img src="assets/image/naruto.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5> NARUTO / PROTAGONISTA</h5>
                      <p> Personagem principal da trama. </p>
                    </div>
                  </div>
                  <div class="carousel-item active">
                    <img src="assets/image/konoha.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5> KONOHAGAKURE NO SATO</h5>
                      <p> Aldeia da Folha.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="assets/image/paisdofogo.png.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5> PAÍS DO FOGO </h5>
                      <p> País que abriga a aldeia e ocorre a trama. </p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </button>
          </section>
              <footer>
              </div>
              <div class="jumbotron jumbotronandrei">
                <h2 class="andreih2"> Recepcao </h2>
                <br>
                <p class="andreip">  Naruto tem sido bem recebido tanto no Japão como nos Estados Unidos. Até o volume 50 o mangá já vendeu mais de 100 milhões de cópias no Japão, com isso Naruto é o quinto mangá da Shonen Jump a alcançar esta marca. A série de mangá Naruto se tornou uma das séries de maior sucesso da Viz,tendo quase 10% das vendas de todos os mangás de 2006. O sétimo volume lançado pela Viz se tornou o primeiro mangá a ganhar o Quill Awards quando este ganhou o prêmio pelo “Best Graphic Novel” em 2006. O mangá também apareceu na USA Today Booklist com o volume onze tendo o título de melhor série de mangá, até ser ultrapassado pelo volume vinte e oito, que conquistou a 17ª posição na primeira semana de lançamento em março de 2008. O volume vinte e oito também é um dos volumes com o melhor lançamento de todos os mangás há anos, e atualmente é o título de mangá mais vendido de 2008.Em abril de 2007, o volume catorze ganhou o prêmio da Viz de “Manga Trade Paperback of the Year”. </p>
              </div>
              </footer>
      </section>
      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row andrei">
          <div class="col-3">
            <img class="mb-2" src="C:\Users\freit\OneDrive\Área de Trabalho\universoNaruto\assets\image\perao.jpg" width="80" height="80">
            <small class="d-block mb-3 text-muted">© 2022-2023</small>
          </div>
          <div class="col-3">
            <h5 class="andreifooter"> MAIS </h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Algo legal</a></li>
              <li><a class="text-muted" href="#">Feature aleatória</a></li>
              <li><a class="text-muted" href="#">Recursos para times</a></li>
              <li><a class="text-muted" href="#">Coisas para desenvolvedores</a></li>
              <li><a class="text-muted" href="#">Outra coisa legal</a></li>
              <li><a class="text-muted" href="#">Último item</a></li>
            </ul>
          </div>
          <div class="col-3">
            <h5 class="andreifooter"> FONTES </h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Fonte</a></li>
              <li><a class="text-muted" href="#">Nome da fonte</a></li>
              <li><a class="text-muted" href="#">Outra fonte</a></li>
              <li><a class="text-muted" href="#">Fonte final</a></li>
            </ul>
          </div>
          <div class="col-3">
            <h5 class="andreifooter"> SOBRE </h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Equipe</a></li>
              <li><a class="text-muted" href="#">Locais</a></li>
              <li><a class="text-muted" href="#">Privacidade</a></li>
              <li><a class="text-muted" href="#">Termos</a></li>
            </ul>
          </div>
        </div>
      </footer>
    <script src="/assets/js/main.js""></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>