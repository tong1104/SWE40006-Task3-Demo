<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <a class="brand" href="index.php">MyPortfolio</a>
    <nav>
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
    </nav>
</header>

<div class="container">
    <?php
    // This will insert the content of each page
    if (isset($content)) {
        echo $content;
    }
    ?>
</div>

<footer>
    <p>&copy; <?php echo date("Y"); ?> - My Portfolio Task 3.3 | SWE40006</p>
</footer>
</body>
</html>
