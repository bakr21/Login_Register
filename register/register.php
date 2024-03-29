<?php
    $nameTitlePage = "register page";
    include './inc/header.php';
    include './inc/nav.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto my-5">
                <h3 class="text-center border rounded border-primary p-1">Register</h3>
                    <?php 
                        if (isset($_SESSION['errors'])):
                        foreach($_SESSION['errors'] as $errors):  ?>
                    <div class="alert alert-danger p-2 mb-2" role="alert">
                    <li><?php echo $errors;?></li>
                    </div>
                <?php    
                        endforeach;
                        endif ;
                        unset($_SESSION['errors']);
                        ?>

    <form action="handelers/handelregister.php" method="POST" class="border rounded border-primary p-3">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">name</label>
            <input type="text" name="name" class="form-control" >
        </div>
    <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
        <div class="form-text">Your password must be 8-20 characters long, contain $#@*% and num .</div>
    </div>
    <div class="d-grid gap-2 mx-auto">
    <button type="submit" class="btn btn-primary border rounded border-primary">Register</button>
</div>
    </form>
            </div>
        </div>
    </div>
    

<?php include './inc/footer.php'; ?> 


