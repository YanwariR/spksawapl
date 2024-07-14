<!DOCTYPE html>
<html lang="en">

<?php
                    include 'koneksi.php';

                    if (isset($_POST['edit'])) {
                        $first_nama = $_GET['nama'];
                        $nama = $_POST['nama'];
                        $pengembang = $_POST['pengembang'];
                        $kategori = $_POST['kategori'];
                        if (($nama == "") or ($pengembang == "")) {
                            echo "<script>
                            alert('Tolong lengkapi data yang ada!');
                            </script>";
                        } else {
                            $sql = "UPDATE saw_aplikasi SET nama='$nama',pengembang='$pengembang', kategori='$kategori' 
                                    WHERE nama='$first_nama'";
                            $hasil = $conn->query($sql);
                            if ($hasil) {
                                echo "<script>
                                alert('berhasil di update !');
                                window.location.href='index.php'; 
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
       
    <form class="overlay2" method="post">
    <?php
                        $nama = $_GET['nama'];
                        $sql = "SELECT * FROM saw_aplikasi WHERE nama = '$nama'";
                        $hasil = $conn->query($sql);
                        $rows = $hasil->num_rows;
                        if ($rows > 0) {
                            $row = $hasil->fetch_row();
                            $nama = $row[0];
                            $pengembang = $row[1];
                            $kategori = $row[2];
                        ?>
        <div class="popup">
            <div class="popup-popup">
                <span class="popup-judul-edit">EDIT</span>
                <p1 class="popup-subjudul-edit">Edit your app</p2>
            </div>

            <div class="form-element1">
                <input type="text" name="nama" id="input-alternatif" value="<?= $nama ?>">

            </div>

            <div class="form-element2">
                <input type="text" name="pengembang" id="input-alternatif" value="<?= $pengembang ?>">
            </div>

            <select name="kategori" value="<?= $kategori ?>">
                <option <?php if ($kategori == 'MMORPG') {
                                                    echo 'selected';
                                                } ?>>MMORPG</option>
                                        <option <?php if ($kategori == 'Rythm') {
                                                    echo 'selected';
                                                } ?>>Rythm</option>
                                        <option <?php if ($kategori == 'MOBA') {
                                                    echo 'selected';
                                                } ?>>MOBA</option>
                                        <option <?php if ($kategori == 'Tower Defense') {
                                                    echo 'selected';
                                                } ?>>Tower Defense</option>
               
            </select>


            <div class="center">
                <button type="button" class="show-close2">
                <a href="index.php"> 
                <i class='bx bx-arrow-back out'></i>
                </a>
                </button>
                <button name="edit" type="submit" class="show-submit">Edit</button>
            </div>
        </div>
        </form>
        <?php } ?>
    
           
        <script src="script.js"></script>
        <script src="script2.js"></script>
    </body>
</html>