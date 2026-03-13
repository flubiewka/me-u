<!DOCTYPE html>

<html lang="en">



<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Beezy</title>

  <!-- Bootstrap -->

  <link href="../css/bootstrap-5.3.8.css" rel="stylesheet">

  <link href="../css/style.css" rel="stylesheet" type="text/css">

</head>



<body>

  <div id="app-background"> </div>

  <div id="layout">

    <header class="color_1 outline" id="layout-top">

      <img src="../images/color-logo.png" alt="" width="257" height="284" id="top-logo" />

      <div class="color_3" id="top-account">

        <button type="button" id="my-acc-button">konto<br>

        </button>

      </div>

    </header>

    <div id="layout-middle">

      <nav class="color_1 outline" id="layout-left">

        <div class="color_3">

          <button type="button" id="btn-messages">wiadomosci<br>

          </button>

        </div>

        <div class="color_3">

          <button type="button" id="btn-users">pracownicy<br>

          </button>

        </div>

        <div class="color_3">

          <button type="button" id="btn-report">raport<br>

          </button>

        </div>

        <div class="color_3">

          <button type="button" id="btn-calendar">kalendarz<br>

          </button>

        </div>

        <div class="color_3">

          <button type="button" id="btn-notifications">powiadomienia<br>

          </button>

        </div>

        <div class="color_3">

          <button type="button" id="btn-settings">ustawienia<br>

          </button>

        </div>

      </nav>

    <main id="layout-content">

      <div id="content-messages">

        <div class="content-list box-TEMPLATE color_2">

          <div class="list-chat color_4">

            <div class="list-chat-image color_placeholder"></div>

            <div class="list-chat-texts color_placeholder">

              <label for="textfield3" class="list-chat-username">Imie nazwisko</label>

              <label for="textfield4" class="list-role">rola</label>

            </div>



          </div>

        </div>

        <div class="box-TEMPLATE color_2" id="message-box">

          <div id="message-box-top-layout">

            <div class="color_placeholder">

              <button type="button" class="users-acc-button">ImieNazwisko<br>

              </button>

            </div>

            &nbsp;

          </div>

          <div class="color_5" id="message-box-chat">

            <div class="MESSAGE">

              <div class="MESSAGE-HEADER">

                <img src="" alt="LOGO"><span>ARTEM KOTENKO</span>

               

              </div>

              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis, vero!

            </div>

          </div>

          <div id="message-box-bottom-layout">

            <input name="textfield" type="text" class="textfield" id="message-bottom-text" placeholder=" input">

            <div class="color_placeholder">

              <button type="button" id="btn-send-message">wiadomosci<br>

              </button>

            </div>

            &nbsp;

          </div>

        </div>

      </div>

    </main>

  </div>

  </div>

  <!-- body code goes here -->





  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->



  <!-- Include all compiled plugins (below), or include individual files as needed -->

  <script src="../js/popper-2.11.8.min.js"></script>

  <script src="../js/bootstrap-5.3.8.js"></script>

  <script src="../js/routing.js"></script>

  <script src="../js/style-script.js"></script>

</body>



</html>
