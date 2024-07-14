<!DOCTYPE html>
<html lang="en">

<?php

          include 'koneksi.php';

          if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $peringkat = $_POST['rank'];    
            $ukuran = $_POST['size'];
            $unduhan = $_POST['download'];
            $aktif = $_POST['useractive'];
            $manfaat = $_POST['advantage'];
            if ($peringkat == "" || $ukuran == "" || $unduhan == "" || $aktif == "" || $manfaat == "") {
              echo "<script>
              alert('Tolong Lengkapi Data yang Ada!');
              </script>";
            } else {
              $sql = "SELECT*FROM saw_penilaian WHERE nama='$nama'";
              $hasil = $conn->query($sql);
              $rows = $hasil->num_rows;
              if ($rows > 0) {
                $row = $hasil->fetch_row();
                echo "<script>
                alert('Aplikasi $nama sudah ada!');
                </script>";
              } else {
                //insert name
                $sql = "INSERT INTO saw_penilaian(
                nama,peringkat,ukuran,unduhan,aktif,manfaat)
                values ('" . $nama . "',
                '" . $peringkat . "',
                '" . $ukuran . "',
                '" . $unduhan . "',
                '" . $aktif . "',
                '" . $manfaat . "')";
                $hasil = $conn->query($sql);
                echo "<script>
                alert('Penilaian Berhasil di Tambahkan!');
                </script>";
              }
            }
          }
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/styles-home.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/play-list-search.css' rel='stylesheet'>
    <title>Top Game Of The Year</title>
</head>
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
                </li
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
                <span class='sub'>Evaluation</span>
        
                <span class="sub2">SAW | 2024</span>
             
            </div>
        </div>
        <div class="main-section">
            <div class="alternatif"> 
                <span class="header-alter">Evaluation</span> 
                <i class='bx bxs-pencil add'></i>
            </div>
        </div>

        <div class="container">
            <div class="data-table1">
                <table>
                    <thead>
                        <tr>
                            <th>
                                <i class='bx bxs-magic-wand icon2'></i>
                                <span>No</span>
                            </th>
                            <th>
                                <i class='bx bxs-magic-wand icon2'></i>
                                <span>Alternatif</span>
                            </th>
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
                            <th>
                                <i class='bx bxs-magic-wand icon2'></i>
                                <span>Action</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $b = 0;
                        $sql = "SELECT*FROM saw_penilaian ORDER BY nama ASC";
                        $hasil = $conn->query($sql);
                        $rows = $hasil->num_rows;
                        if ($rows > 0) {
                            while ($row = $hasil->fetch_row()) {
                    ?>
                        <tr>
                            <td><?php echo $b = $b + 1; ?></td>
                            <td><?= $row[0] ?></td>
                            <td><?= $row[1] ?></td>
                            <td><?= $row[2] ?></td>
                            <td><?= $row[3] ?></td>
                            <td><?= $row[4] ?></td>
                            <td><?= $row[5] ?></td>
                            <td>      
                                <a href="evaluation-delete.php?nama=<?= $row[0] ?>">
                                    <i class='bx bx-trash-alt trash'></i>
                                </a>
                            </td>
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

            <form method="post" action="" class="overlay">
                <div class="popup">
                        <div class="popup-popup">
                            <span class="popup-judul">Evaluation</span>
                            <p1 class="popup-subjudul">Blablabla</p2>
                        </div>

                        <select class="select-evaluation" name="nama">
                        <option disabled selected>App</option>
                        <?php
                            //load nama
                            $sql = "SELECT * FROM saw_aplikasi";
                            $hasil = $conn->query($sql);
                            $rows = $hasil->num_rows;
                            if ($rows > 0) {
                                while ($row = mysqli_fetch_array($hasil)) :; {
                                } ?> <option><?php echo $row[0]; ?></option>
                            <?php endwhile;
                            } ?>
                        </select>
                        
                      
                            <input id="input-evaluation" name="rank" placeholder= "Rating">

        
                        <select name="size">
                            <option disabled selected>Size</option>
                            <option>1. Small</option>
                            <option>2. Medium</option>
                            <option>3. Large</option>
                        </select>

                        <select name="download">
                            <option disabled selected>Many Download</option>
                            <option>1. Low</option>
                            <option>2. Moderate</option>
                            <option>3. High</option>
                        </select>

                        <select name="useractive">
                            <option disabled selected>User Active</option>
                            <option>1. Low</option>
                            <option>2. Moderate</option>
                            <option>3. High</option>
                        </select>

                        <select name="advantage">
                            <option disabled selected>Advantage</option>
                            <option>1. Low</option>
                            <option>2. Moderate</option>
                            <option>3. High</option>
                        </select>
                        
                    <div class="center">
                        <button class="show-close">Close</button>
                        <button name="submit" type="submit" class="show-submit">Insert</button>
                    </div>
                </div>
                        </form>
           
        <script src="script.js"></script>
        <script src="script2.js"></script>
    </body>
</html>