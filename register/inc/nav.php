    <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <?php if (!isset($_SESSION['auth'])): ?>
            <a class="nav-link" href="login.php">login</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="register.php">Register</a>
            </li> 
            <?php else:?>
            <li class="nav-item">
                <a class="nav-link" href="profile.php">profile</a>
            </li>
            <?php endif;?>
        </ul>
        <?php if (isset($_SESSION['auth'])): ?>
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" href="logout.php">logout</a>
            </li>
        </ul>
        <?php endif;?>
        </div>
    </div>
    </nav>