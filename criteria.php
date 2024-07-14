<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/styles-home.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/play-list-search.css' rel='stylesheet'>
    <title>Top Game Of The Year</title>
</head>

<?php

            include 'koneksi.php';
          if (isset($_POST['submit'])) {
            $peringkat = $_POST['rank'];
            $ukuran = $_POST['size'];
            $unduhan = $_POST['download'];
            $aktif = $_POST['useractive'];
            $manfaat = $_POST['advantage'];
            if (($peringkat == "") or
              ($ukuran == "") or
              ($unduhan == "") or
              ($aktif == "") or
              ($manfaat == "")
            ) {
              echo "<script>
              alert('Tolong Lengkapi Data yang Ada!');
              </script>";
            } else {
              $sql = "SELECT * FROM saw_kriteria";
              $hasil = $conn->query($sql);
              $rows = $hasil->num_rows;
              if ($rows > 0) {
                echo "<script>
                alert('Hapus Bobot Lama untuk Membuat Bobot Baru');
                </script>";
              } else {
                $sql = "INSERT INTO saw_kriteria(
                  peringkat,ukuran,unduhan,aktif,manfaat)
                  values ('" . $peringkat . "',
                  '" . $ukuran . "',
                  '" . $unduhan . "',
                  '" . $aktif . "',
                  '" . $manfaat . "')";
                $hasil = $conn->query($sql);
                echo "<script>
                alert('Bobot Berhasil di Inputkan!');
                </script>";
              }
            }
          }
          ?>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="logo.png" alt="logo">
                </span>

                <div class="text header-text">
                    <span class="name">Game</span>
                    <span class="profession">Nest</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle' ></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                        <i class='bx bx-search-alt icon' ></i>
                        <input id="input1" type="search" placeholder="Search...">
                </li>
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="index.php">
                            <i class='bx bxs-dashboard icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="criteria.php">
                            <i class='bx bxs-box icon'></i>
                            <span class="text nav-text">Criteria</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="evaluation.php">
                            <i class='bx bxs-spreadsheet icon'></i>
                            <span class="text nav-text">Evaluation</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="calculate.php">
                            <i class='bx bxs-pie-chart-alt-2 icon' ></i>
                            <span class="text nav-text">Calculate</span>
                        </a>
                    </li>
                </ul>
            </div>
            
            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bxs-user icon'></i>
                        <span class="text nav-text">Profile</span>
                    </a>
                </li>
    
                <li class="mode">
                    <div class="moon-sun">
                        <i class='bx bxs-sun icon moon' ></i>
                        <i class='bx bxs-moon icon sun' ></i>
                    </div>
                    <span class="mode-text text">Day Mode</span>
    
                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div>
        </div>
    </nav>

    <section class="home">
        <div class="bar">
            <div class="inbar"> 
                <i class='bx bxs-right-arrow icon-home'></i>
                <span class='sub'>Criteria</span>
                <span class="sub2">SAW | 2024</span>
            </div>
        </div>

        <div class="main-section">
            <div class="alternatif"> 
                <span class="header-alter">Change Criteria</span> 
                
                <i class='bx bxs-pencil add'></i>
                <?php
                            $b = 0;
                            $sql = "SELECT * FROM saw_kriteria";
                            $hasil = $conn->query($sql);
                            $rows = $hasil->num_rows;
                            if ($rows > 0) {
                            while ($row = $hasil->fetch_row()) {
                            ?>
                <a href="criteria-delete.php?id=<?= $row[0] ?>">
                    <i class='bx bxs-trash-alt trash'></i>
                </a>
                <?php }
                            } else {
                            } ?>
            </div>
        </div>

        <div class="container">
            <div class="left">
                <div class="data-table1">
                    <table>
                        <thead>
                            <tr>
                                <th class="no">
                                    <i class='bx bxs-star icon2' ></i>
                                    <span>Rating</span>
                                </th>
                                <th class="app">
                                    <i class='bx bx-file icon2'></i>
                                    <span>Size</span>
                                </th>
                                <th class="dev">
                                    <i class='bx bx-cloud-download icon2'></i>
                                    <span>Download</span>
                                </th>
                                <th>
                                    <i class='bx bxs-user-check icon2'></i>
                                    <span>User Active</span>
                                </th>
                                <th>
                                    <i class='bx bxs-magic-wand icon2'></i>
                                    <span>Advantage</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $b = 0;
                            $sql = "SELECT * FROM saw_kriteria";
                            $hasil = $conn->query($sql);
                            $rows = $hasil->num_rows;
                            if ($rows > 0) {
                            while ($row = $hasil->fetch_row()) {
                            ?>
                                    <tr>
                                        <td><?= $row[1] ?></td>
                                        <td><?= $row[2] ?></td>
                                        <td><?= $row[3] ?></td>
                                        <td><?= $row[4] ?></td>
                                        <td><?= $row[5] ?></td>
                                    </tr>
                                    <?php }
                            } else {
                            echo "<tr>
                                <td>Data Tidak Ada</td>
                            <tr>";
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>

        <form method="POST" class="overlay" action="">
            <div class="popup-criteria">
                <div class="popup-popup">
                    <span class="popup-judul-criteria">Criteria</span>
                    <p class="popup-subjudul-criteria">Change your criteria here</p>
                </div>
                
                <div class="form-element1">
                    <div class="bobot">
                        <select class="select2" name="rank_value" id="rank_value">
                            <option disabled selected>Rating</option>
                            <option>1. Bad</option>
                            <option>2. Good</option>
                            <option>3. Excellent</option>
                        </select>
                        <input id="rank" name="rank" type="text" placeholder="Value">
                    </div>

                    <div class="bobot">
                        <select class="select2" name="size_value" id="size_value">
                            <option disabled selected>Full Size</option>
                            <option>1. Small</option>
                            <option>2. Medium</option>
                            <option>3. Large</option>
                        </select>
                        <input id="size" name="size" type="text" placeholder="Value">
                    </div>

                    <div class="bobot">
                        <select class="select2" name="download_value" id="download_value">
                            <option disabled selected>Many Download</option>
                            <option>1. Low</option>
                            <option>2. Moderate</option>
                            <option>3. High</option>
                        </select>
                        <input id="download" name="download" type="text" placeholder="Value">
                    </div>

                    <div class="bobot">
                        <select class="select2" name="useractive_value" id="useractive_value">
                            <option disabled selected>User Active</option>
                            <option>1. Low</option>
                            <option>2. Moderate</option>
                            <option>3. High</option>
                        </select>
                        <input id="useractive" name="useractive" type="text" placeholder="Value">
                    </div>

                    <div class="bobot">
                        <select class="select2" name="advantage_value" id="advantage_value">
                            <option disabled selected>Advantage</option>
                            <option>1. Low</option>
                            <option>2. Moderate</option>
                            <option>3. High</option>
                        </select>
                        <input id="advantage" name="advantage" type="text" placeholder="Value">
                    </div>
                
                    <div class="center-criteria">
                        <button class="show-close-criteria">
                            <i class='bx bx-arrow-back out'></i>
                        </button>
                        <button name="hitung" id="hitung" type="button" class="show-calculate" onclick="fungsiku()">
                            <i class='bx bx-calculator'></i>
                        </button>
                        <button class="show-submit-criteria" name="submit" id="submit" type="submit">Submit</button>    
                    </div>
                </div>
            </div>
        </form>

        <script>
            function fungsiku() {
                var a = Number(document.getElementById("rank_value").value.substring(0, 1));
                var b = Number(document.getElementById("size_value").value.substring(0, 1));
                var c = Number(document.getElementById("download_value").value.substring(0, 1));
                var d = Number(document.getElementById("useractive_value").value.substring(0, 1));
                var e = Number(document.getElementById("advantage_value").value.substring(0, 1));
                var total = a + b + c + d + e;

                document.getElementById("rank").value = (a / total).toFixed(3);
                document.getElementById("size").value = (b / total).toFixed(3);
                document.getElementById("download").value = (c / total).toFixed(3);
                document.getElementById("useractive").value = (d / total).toFixed(3);
                document.getElementById("advantage").value = (e / total).toFixed(3);
            }
        </script>

        <script src="script.js"></script>
        <script src="script2.js"></script>
    </body>
</html>
