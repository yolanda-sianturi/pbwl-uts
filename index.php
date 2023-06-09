<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>YOLANDA SALON</title>

      <link rel="shortcut icon" href="layouts/assets/img/favicon.ico" type="image/x-icon">
      <link rel="stylesheet" href="layouts/assets/css/style.css">
</head>

<body>

      <aside>

            <header>
                  <img src="layouts/assets/img/logosalon.jpg" class="brand">
                  <div class="user">YOLANDA SALON</div>
            </header>

            <nav>
                  <ul>
                        <li>
                              <a href="index.php">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Home
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=user_tampil">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> User
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=kategori_tampil">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Kategori
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=customer_tampil">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Customer
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=transaksi_tampil">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Transaksi
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=logout">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Logout
                              </a>
                        </li>


                  </ul>
            </nav>

      </aside>

      <main>
            <article>
                  <?php

                  require_once "vendor/autoload.php";
                  require_once "inc/Koneksi.php";

                  if (isset($_GET['hal'])) {
                        require $_GET['hal'] . ".php";
                  } else {
                        require "main.php";
                  }
                  ?>
            </article>

            <footer>
                  Copyright &copy; 2023. Designed by Yolanda Sianturi
            </footer>
      </main>

</body>

</html>