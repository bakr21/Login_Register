<?php
    $nameTitlePage = "profile page";
    include './inc/header.php';
    include './inc/nav.php'; 
    
    ?>
    
    <div class="container">
        <h1 class=" text-capitalize" >Hello, <?php echo $_SESSION['auth'][0];?></h1> 
        <div class="row mt-5">
            <div class="col mx-auto">
                <h3 class='text-primary fw-semibold'>  Name :</h3>
                <div class="alert alert-success fs-3 text-dark" role="alert">
                <?php echo $_SESSION['auth'][0];?>
                </div>
            </div>
            <div class="col">
                <h3 class='text-primary fw-semibold'>  Email :</h3>
                <div class="alert alert-success fs-3 text-dark" role="alert">
                <?php echo $_SESSION['auth'][1];?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 mx-auto">

            <div class="alert alert-info fs-3 text-dark pb-5 pt-1" role="alert">
            <h3 class='text-primary text-center fw-semibold'>  Messages :</h3>
                <?php echo $_SESSION['auth'][1];?>
                </div>
            </div>
    </div>
    
    <?php include './inc/footer.php'; ?> 