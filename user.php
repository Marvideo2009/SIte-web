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
    <sh-sidebar classuser="nav__entry nav__entry--active">
    </sh-sidebar>
    <sh-main>
      <sh-header>
        <div slot="headline">User</div>
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
        <sh-wrap headline="Favoris">
          <sh-card href="l" top-line="u,n,l" headline="nom" value="mdpuser">
          </sh-card>

        </sh-wrap>

        <sh-wrap nowrap="flase">
          <sh-wrap headline="Quick actions" width="50%">
            <sh-card top-line="Lamps" headline="Salon">

              <sh-switch></sh-switch>
            </sh-card>

            <sh-card top-line="Lamps" headline="Cuisine">
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