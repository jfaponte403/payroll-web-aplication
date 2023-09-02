<?php 
    require "logic/lists.php";
    require "logic/redirection.php";
    
    $NOT_FOUND_ERROR_PAGE = "pages/not_found.php";
    
    $pagePath = null;
    if (isset($_GET["page"]) && $_GET["page"] !== "") {
        $pagePath = redirection($_GET["page"]);
    }

    $search = null;
    if (isset($_POST["search"])) {
        $search = $_POST["id"];
        echo $search;
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
            <h1>Search Employee</h1>
            <form action="" method="post">
                <label for="id">ID:</label>
                <input type="text" name="id" id="id">
                <button type="submit" name="search">Search</button>
            </form>
            <?php 
                if (!$pagePath && $pagePath !== false) echo listEmployees($search);
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
