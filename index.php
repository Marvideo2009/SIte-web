<?php
$date = date('h:i');
?>
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

<body onLoad="window.setTimeout('history.go(0)', 10000000000000)">
  <sh-app>
    <sh-sidebar classindex="nav__entry nav__entry--active">
    </sh-sidebar>
    <sh-main>
      <sh-header>
        <div slot="headline">Interface Home</div>
        <div slot="sub-headline">Dashboard</div>

        <nav slot="nav">

        </nav>
      </sh-header>

      <sh-content>
        <sh-button id="togg1" class="button">
          X
        </sh-button>
        <div id="d1">
          <sh-welcome name="Marvideo Demange"></sh-welcome>
        </div>
        <sh-wrap headline="Stats">

          <sh-card top-line="GTM+1" headline="Heure" value="<?php echo $date; ?>"
            background="linear-gradient(220.64deg, #FDB4FF 0%, #FFC8D8 100%)"></sh-card>
          </div>

          <sh-card top-line="Dehord" headline="Temperature" value="12°c"
            background="linear-gradient(220.64deg, #C8F5FF 0%, #B4B4FF 100%)"></sh-card>

          <sh-card top-line="Dedans" headline="Temperature" value="20°c"
            background="linear-gradient(220.64deg, #FFD3B4 0%, #FFC8C8 100%)"></sh-card>

          <sh-card top-line="Dehors" headline="Humidite" value="76%"
            background="linear-gradient(220.64deg, #B4C4FF 0%, #E7C8FF 100%)"></sh-card>
        </sh-wrap>

        <sh-wrap nowrap="true">
          <sh-wrap headline="Quick actions" width="50%">
            <sh-card top-line="Lamps" headline="Salon"
              background="linear-gradient(220.64deg, #DDFFC2 0%, #A4FFC8 100%)">
              <sh-switch></sh-switch>
            </sh-card>

            <sh-card top-line="Lamps" headline="Cuisine"
              background="linear-gradient(220.64deg, #FFF5D0 0%, #FFD1C2 100%)">
              <sh-switch></sh-switch>
            </sh-card>
          </sh-wrap>

          <sh-wrap headline="Aide" vertical="true" width="50%">
            <sh-accordion>
              <div slot="title">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur !
              </div>

              <div slot="content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, similique!
              </div>
            </sh-accordion>

            <sh-accordion>
              <div slot="title">
                action
              </div>

              <div slot="content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, similique!
              </div>
            </sh-accordion>

            <sh-accordion>
              <div slot="title">
                Createur
              </div>

              <div slot="content">
                Marvideo
              </div>
            </sh-accordion>
          </sh-wrap>
        </sh-wrap>
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