<nav class="container">
    <div id="logo">
        <a href="/">
            <img src="img/logo.png" alt="Blog logo" width="100%">
        </a>
    </div>
    <ul id="menu">
        <?php if(!isset($_SESSION['id'])) { ?>
        <li>
            <a href="feed2.php">Browse blogs</a> 
        </li>
        <li>
            <a href="login.php" class="btn btn-lg btn-rounded">Login</a> 
        </li>
        <?php } else { ?>
            <li>
                <a href="my-blogs.php">My blogs</a>
            </li>
            <li>
                <a href="logout.php?logout=true">Logout</a>
            </li>
        <?php } ?>
    </ul>
</nav>
