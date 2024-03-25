<?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = '';
        }
        if ($page == 'all') {
            include("pages/all.php");
        } elseif ($page == 'giohang') {
            include("pages/giohang.php");
        } elseif ($page == 'dangnhap') {
            include("pages/dangnhap.php");
        } elseif ($page == 'dangki') {
            include("pages/dangki.php");
        } elseif ($page == 'timkiem') {
            include("pages/timkiem.php");
        } else {
            include("index.php");
        }

        ?>
              <?php
                    include('./pages/modal.php');
                ?>