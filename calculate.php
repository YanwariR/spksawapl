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
                    <a href="#">
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
                <span class='sub'>Calculate</span>

                <span class="sub2">SAW | 2024</span>

            </div>
        </div>
        <div class="main-calculate">
            <div class="alternatif">

                <span class="header-alter">Matrix X </span>


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
                                <i class='bx bxs-star icon2'></i>
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

                        include 'koneksi.php';

                        $b = 0;
                        $sql = "SELECT*FROM saw_penilaian ORDER BY nama ASC";
                        $hasil = $conn->query($sql);
                        $rows = $hasil->num_rows;
                        if ($rows > 0) {
                            while ($row = $hasil->fetch_row()) {
                        ?>
                                <tr>
                                    <td align="center"><?php echo $b = $b + 1; ?></td>
                                    <td><?= $row[0] ?></td>
                                    <td align="center"><?= $row[1] ?></td>
                                    <td align="center"><?= $row[2] ?></td>
                                    <td align="center"><?= $row[3] ?></td>
                                    <td align="center"><?= $row[4] ?></td>
                                    <td align="center"><?= $row[5] ?></td>

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

        <div class="main-calculate2">
            <div class="alternatif">
                <span class="header-alter">Normalisasi</span>

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
                                <i class='bx bxs-star icon2'></i>
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
                        $sql = "SELECT*FROM saw_penilaian";
                        $hasil = $conn->query($sql);
                        $rows = $hasil->num_rows;
                        if ($rows > 0) {
                            $b = 0;
                            $C1 = '';
                            $C2 = '';
                            $C3 = '';
                            $C4 = '';
                            $C5 = '';
                            $C6 = '';

                            $sql = "SELECT*FROM saw_penilaian ORDER BY peringkat DESC";
                            $hasil = $conn->query($sql);
                            $row = $hasil->fetch_row();
                            $C1 = $row[1];
                            // Biaya
                            $sql = "SELECT*FROM saw_penilaian ORDER BY ukuran ASC";
                            $hasil = $conn->query($sql);
                            $row = $hasil->fetch_row();
                            // End Biaya
                            $C2 = $row[2];
                            $sql = "SELECT*FROM saw_penilaian ORDER BY unduhan DESC";
                            $hasil = $conn->query($sql);
                            $row = $hasil->fetch_row();
                            $C3 = $row[3];
                            $sql = "SELECT*FROM saw_penilaian ORDER BY aktif DESC";
                            $hasil = $conn->query($sql);
                            $row = $hasil->fetch_row();
                            $C4 = $row[4];
                            $sql = "SELECT*FROM saw_penilaian ORDER BY manfaat DESC";
                            $hasil = $conn->query($sql);
                            $row = $hasil->fetch_row();
                            $C5 = $row[5];
                        } else {
                            echo "<tr>
                                        <td>Data Tidak Ada</td>
                                    <tr>";
                        }

                        $sql = "SELECT*FROM saw_penilaian";
                        $hasil = $conn->query($sql);
                        $rows = $hasil->num_rows;
                        if ($rows > 0) {
                            while ($row = $hasil->fetch_row()) {
                        ?>
                                <tr>
                                    <td align="center"><?php echo $b = $b + 1; ?></td>
                                    <td><?= $row[0] ?></td>
                                    <td align="center"><?= round($row[1] / $C1, 2) ?></td>
                                    <td align="center"><?= round($C2 / $row[2], 2) ?></td>
                                    <td align="center"><?= round($row[3] / $C3, 2) ?></td>
                                    <td align="center"><?= round($row[4] / $C4, 2) ?></td>
                                    <td align="center"><?= round($row[5] / $C5, 2) ?></td>

                                </tr>
                        <?php }
                        }  ?>
                    </tbody>
                </table>
            </div>

        </div>

        <div class="main-calculate2">
            <div class="alternatif">
                <span class="header-alter">Nilai Preferensi</span>

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
                                <i class='bx bxs-star icon2'></i>
                                <span>Value</span>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $b = 0;
                        $B1 = '';
                        $B2 = '';
                        $B3 = '';
                        $B4 = '';
                        $B5 = '';
                        $B6 = '';
                        $nilai = '';
                        $nama = '';
                        $x = 0;
                        $sql = "SELECT * FROM saw_kriteria";
                        $hasil = $conn->query($sql);
                        $rows = $hasil->num_rows;
                        if ($rows > 0) {
                            $row = $hasil->fetch_row();
                            $B1 = $row[1];
                            $B2 = $row[2];
                            $B3 = $row[3];
                            $B4 = $row[4];
                            $B5 = $row[5];
                        }
                        $sql = "TRUNCATE TABLE saw_perankingan";
                        $hasil = $conn->query($sql);

                        $sql = "SELECT * FROM saw_penilaian";
                        $hasil = $conn->query($sql);
                        $rows = $hasil->num_rows;
                        if ($rows > 0) {
                            while ($row = $hasil->fetch_row()) {
                                $nilai = round((($row[1] / $C1) * $B1) +
                                    (($C2 / $row[2]) * $B2) +
                                    (($row[3] / $C3) * $B3) +
                                    (($row[4] / $C4) * $B4) +
                                    (($row[5] / $C5) * $B5), 3);
                                $nama = $row[0];
                                $sql1 = "INSERT INTO saw_perankingan(nama,nilai_akhir) VALUES ('" . $nama . "','" . $nilai . "')";
                                $hasil1 = $conn->query($sql1);
                            }
                        }
                        $sql = "SELECT * FROM saw_perankingan";
                        $hasil = $conn->query($sql);
                        $rows = $hasil->num_rows;
                        if ($rows > 0) {
                            while ($row = $hasil->fetch_row()) {
                        ?>
                                <tr>
                                    <td>&nbsp&nbsp <?php echo $b = $b + 1; ?></td>
                                    <td><?= $row[1] ?></td>
                                    <td><?= number_format($row[2], 2) ?></td>
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

        <div class="main-calculate2">
            <div class="alternatif">
                <span class="header-alter">Perangkingan</span>

            </div>
        </div>

        <div class="container2">
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
                                <i class='bx bxs-star icon2'></i>
                                <span>Value</span>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $b = 0;
                        $sql = "SELECT * FROM saw_perankingan ORDER BY nilai_akhir DESC";
                        $hasil = $conn->query($sql);
                        if ($hasil->num_rows > 0) {
                            while ($row = $hasil->fetch_row()) {
                        ?>
                                <tr>
                                    <td>&nbsp&nbsp <?php echo $b = $b + 1; ?></td>
                                    <td><?= $row[1] ?></td>
                                    <td><?= number_format($row[2], 2) ?></td>
                                </tr>
                        <?php }
                        } else {
                            echo "<tr>
        <td>Data Tidak Ada</td>
    </tr>";
                        } ?>

                </table>
            </div>

        </div>

        <script src="script.js"></script>
</body>

</html>