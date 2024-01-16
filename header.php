<?php
$currentPage = $_SERVER['REQUEST_URI'];
?>

<div class="logo">
    <img src="images/logo.jpg" alt="@deodat04">
</div>
<input type="checkbox" id="click">
<label for="click" class="mainicon">
    <div class="menu">
        <i class="bi bi-list"></i>
    </div>
</label>
<nav>
<a href="index.php" <?php if ($currentPage == '/index.php') echo 'class="active"'; ?>>Home</a>
    <a href="about.php" <?php if ($currentPage == '/about.php') echo 'class="active"'; ?>>About</a>
    <a href="project.php" <?php if ($currentPage == '/project.php') echo 'class="active"'; ?>>Project</a>
    <a href="portfolio.php" <?php if ($currentPage == '/portfolio.php') echo 'class="active"'; ?>>Portfolio</a>
    <a href="contact.php" <?php if ($currentPage == '/contact.php') echo 'class="active"'; ?>>Contact</a>
</nav>