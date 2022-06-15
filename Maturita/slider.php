<?php 
session_start();

	include("includes/connection.php");
	include("includes/functions.php");
	include('includes/header.php');
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Full Screen Slider</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="slider-style.css" />
  </head>
  <body>
    <div class="slider">
      <div class="slide current">
        <div class="content">
          <h1>Tréner Roman</h1>
          <p>
            Roman je špecialista na kulturistiku, v ktorej má odtrénované viac ako 10 rokov.
			Trénuje najmä mužov a pri spolupráci s ním môžeme garantovať výsledky ktoré vás skutočne prekvapia.
          </p>
        </div>
      </div>
      <div class="slide">
        <div class="content">
          <h1>Tréner Mišo</h1>
          <p>
            Mišo je odborník na silové tréningy. Sám bol majstrom Slovenska v silovom trojboji. 
			Mišo je ochotný trénovať ako úplných začiatočníkov tak aj pokročilých cvičencov a pre každého môže zaručiť nárast na sile.
          </p>
        </div>
      </div>
      <div class="slide">
        <div class="content">
          <h1>Trénerka Andrea</h1>
          <p>
            Andrea obľubuje zlepšovanie fyzickej výkonnosti. Trénuje najmä ženy a deti ale rada pomôže každému.
			Jej špecialitou je chudnutie a kardio, takže ak potrebujete zhodiť na leto, Andrea je vaša voľba.
          </p>
        </div>
      </div>
    </div>
    <div class="buttons">
      <button id="prev"><i class="fas fa-arrow-left"></i></button>
      <button id="next"><i class="fas fa-arrow-right"></i></button>
    </div>

    <script src="slider-script.js"></script>
  </body>
</html>
