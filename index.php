<?php
require "logic/lists.php";
    require "logic/redirection.php";
    
    $NOT_FOUND_ERROR_PAGE = "pages/not_found.php";
    
    $pagePath = null;
    if (isset($_GET["page"]) && $_GET["page"] !== "") {
        $pagePath = redirection($_GET["page"]);
    }

    $searchResults = "";
    if (isset($_POST['id'])) {
        $searchResults = $_POST['id']; 
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payroll APP | Team of Teams</title>
    <script src="assets/js/script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-dark boder-body" data-bs-theme="dark">
    <?php include ("templates/navbar.php") ?>
</nav>

<main class="container mt-4">
    <section>
        <article>
            <?php 
                if (!$pagePath && $pagePath !== false) echo "<h1 class='text-center'>Welcome!</h1>";
                if ($pagePath) include ($pagePath);
                if ($pagePath === false) include ($NOT_FOUND_ERROR_PAGE);
            ?>
        </article>
    </section>
</main>

<footer class="text-center">
    <?php include ("templates/footer.php") ?>
</footer>
</body>
</html>
