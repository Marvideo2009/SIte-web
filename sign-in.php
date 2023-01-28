<!DOCTYPE html>
<html lang="fr" class="no-js">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | Interface</title>

  <link rel="shortcut icon" href="favicon.ico">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <sh-app>
    <sh-sidebar>
    </sh-sidebar>
    <sh-main>
      <sh-header>
        <div slot="headline">Sign in</div>
        <div slot="sub-headline">Dashboard</div>

        <nav slot="nav">
          <a href="https://tympanus.net/codrops/?p=58877" target="_blank">Article</a>
          <a href="https://github.com/sergejcodes/codrops-minze-demo" target="_blank">GitHub</a>
        </nav>
      </sh-header>

      <sh-content>
        <sh-button id="togg1" class="button">
          X
        </sh-button>
        <div id="d1">
          <sh-welcome name="Marvideo Demange"></sh-welcome>
        </div>
        <div>
            <div>
                <p>Username :</p>
            <input></input>
            </div>
        </div>
      </sh-content>
    </sh-main>
  </sh-app>
  <script>
    let togg1 = document.getElementById("togg1");
    let d1 = document.getElementById("d1");
    togg1.addEventListener("click", () => {
      if (getComputedStyle(d1).display != "none") {
        d1.style.display = "none";
      } else {
        d1.style.display = "block";
      }
    })
  </script>
  <script src="js/minze.js" defer></script>
  <script src="js/main.js" type="module"></script>
</body>

</html>
<?php
$con = mysqli_connect('localhost','marvideo','framboise');
mysqli_select_db('localhost', $con)
?>