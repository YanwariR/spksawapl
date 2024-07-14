<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php
    if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $pengembang = $_POST['pengembang'];
            $kategori = $_POST['kategori'];
            if (($nama == "") or ($pengembang == "")) {
              echo "<script>alert('Tolong Lengkapi Data yang Ada!');</script>";
            } else {
              $sql = "SELECT * FROM saw_aplikasi WHERE nama='$nama'";
              $hasil = $conn->query($sql);
              $rows = $hasil->num_rows;
              if ($rows > 0) {
                $row = $hasil->fetch_row();
                echo "<script>alert('Aplikasi $nama Sudah Ada!');</script>";
              } else {
                $sql = "INSERT INTO saw_aplikasi(nama,pengembang,kategori)
                values ('" . $nama . "','" . $pengembang . "','" . $kategori . "')";
                $hasil = $conn->query($sql);
                echo "<script>alert('Data Barhasil diTambahkan!');</script>";
              }
            }
          }
    
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

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <i class='bx bx-search-alt icon'></i>
                    <input id="input1" type="search" placeholder="Search...">
                </li <ul class="menu-links">
                <li class="nav-link">
                    <a href="index.php">
                        <i class='bx bxs-dashboard icon'></i>
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
                        <i class='bx bxs-pie-chart-alt-2 icon'></i>
                        <span class="text nav-text">Calculate</span>
                    </a>
                </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="login.php">
                        <i class='bx bxs-user icon'></i>
                        <span class="text nav-text">Profile</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="moon-sun">
                        <i class='bx bxs-sun icon moon'></i>
                        <i class='bx bxs-moon icon sun'></i>
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
                <span class='sub'>Dashboard</span>

                <span class="sub2">SAW | 2024</span>

            </div>
        </div>
        <div class="main-section">
            <div class="alternatif">
                <span class="header-alter">Alternatif</span>
                <i class='bx bx-plus add'></i>
            </div>


        </div>

        <div class="container">
            <div class="left">
                <div class="data-table1">
                    <table>
                        <thead>
                            <tr>
                                <th class="no">No</th>
                                <th class="app">App</th>
                                <th class="dev">Developer</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $b = 0;
                            $sql = "SELECT*FROM saw_aplikasi ORDER BY nama ASC";
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
                                <td>
                                    <a href="edit.php?nama=<?= $row[0] ?>">
                                        <i class='bx bxs-pencil pencil'></i>
                                    </a>
                                   
                                    <a href="delete.php?nama=<?= $row[0] ?>">
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

            </div>
            <div class="content right">
                <div class="widget">
                    <div class="subwidget">
                        <i class='bx bx-chart chart'></i>

                    </div>
                    <h1 class="header-data">6</h1>
                    <p class="foot-data">Total Data</p>
                </div>

                <div class="widget2">
                    <div class="subwidget2">
                        <i class='bx bx-dice-3 chart2'></i>

                    </div>
                    <h1 class="header-data2">4</h1>
                    <p class="foot-data2">Genre Record</p>
                </div>
            </div>
        </div>
    </section>

    <form method ="POST" class="overlay" action="">
        <div class="popup">
            <div class="popup-popup">
                <span class="popup-judul">Alternatif</span>
                <p1 class="popup-subjudul">Insert your app here</p2>
            </div>

            <div class="form-element1">
                <input type="text" name="nama" id="input-alternatif" placeholder="App">

            </div>

            <div class="form-element2">
                <input type="text" name="pengembang" id="input-alternatif" placeholder="Developer">
            </div>

            <select name="kategori">
                <option value="" disabled selected>Choose Genre</option>
                <option value="MMORPG">MMORPG</option>
                <option value="Rythm">Rythm</option>
                <option value="MOBA">MOBA</option>
                <option value="Tower Defense">Tower Defense </option>
            </select>


            <div class="center">
                <button class="show-close">
                    <i class='bx bx-arrow-back out'></i>
                </button>
                <button type="submit" name="submit" class="show-submit">Insert</button>
            </div>
        </div>
    </form>

    <script src="script.js"></script>
    <script src="script2.js"></script>
</body>

</html>