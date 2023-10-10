<?php
$menu = filter_input(INPUT_GET, "menu");
header('Content-Type: text/html; charset=utf-8');
require_once './pages/head.php';
?>

<body>
    <?php
    require_once './layout/menu.php';
    require_once './pages/tartalom.php';
    ?>
    <script src="./bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>