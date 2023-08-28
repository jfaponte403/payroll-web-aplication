<?php 
    require "logic/lists.php";
    require "logic/redirection.php";
    
    $NOT_FOUND_ERROR_PAGE = "pages/not_found.php";
    
    $pagePath = null;
    if (isset($_GET["page"]) && $_GET["page"] !== "") {
        $pagePath = redirection($_GET["page"]);
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payroll APP | Team of Teams</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/script.js"></script>
</head>
<body>
<header>
    <?php include ("templates/header.php") ?>
</header>

<nav>
    <?php include ("templates/navbar.php") ?>
</nav>

<main>
    <section>
        <article>
            <?php 
                if (!$pagePath && $pagePath !== false) echo listEmployees();
                if ($pagePath) include ($pagePath);
                if ($pagePath === false) include ($NOT_FOUND_ERROR_PAGE);
            ?>
        </article>
    </section>
</main>

<footer>
    <?php include ("templates/footer.php") ?>
</footer>

</body>
</html>
