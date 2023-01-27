<html lang="en">
<head>
    <title>User Login</title>
     <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- css -->
    <link rel="stylesheet" href="../resources/style.css">
    <!-- Bootstrap ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<body>
    <?php $this->view("/Includes/header");?>

<!-- <form class="row g-3 needs-validation" action="" method="post" novalidate>
    
    <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label"><?=_("Email")?></label>
        <div class="input-group has-validation"> 
        <input name="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
            Enter a valid email
        </div>
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationCustom03" class="form-label"><?=_("Password")?></label>
        <input type="password" class="form-control" id="validationCustom03" name="password" required>
        <div class="invalid-feedback">
        Enter a password
        </div>
    </div>
    <div class="col-12">
        <input class="btn btn-primary" name="action" type="submit" href="/User/login" value="Login">
        <a class="btn btn-primary" name="action" type="submit" href="/Seller/login"><?=("Seller Login")?></a>
    </div>
</form> -->


 <section class="vh-100">
<form class="needs-validation" action="" method="post" novalidate>
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="../images/formImg.webp" class="img-fluid">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form>
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                    <p class="lead fw-normal mb-4 me-3">Sign in </p>
                    
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4 has-validation" >
                    <label class="form-label" for="validationCustomUsername" >Email address</label>
                    <input type="email" name="email" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" id="validationCustomUsername" class="form-control form-control-lg"
                    placeholder="Email address" aria-describedby="inputGroupPrepend" required/>
                    <div class="invalid-feedback">
                        Enter a valid email
                    </div>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-3">
                    <label class="form-label" for="validationCustom03">Password (At least 5 characters)</label>
                    <input type="password" minlength="5" id="validationCustom03" class="form-control form-control-lg"
                    placeholder="Password" name="password" required/>
                    <div class="invalid-feedback">
                        Password must be 5 characters
                    </div>  
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    <!-- Checkbox -->
                    <div class="form-check mb-0"> 
                    
                    </div>
                    <a href="/Seller/login" class="text-body">Sign in as a Seller</a>
                </div>

                <div class="text-center text-lg-start mt-4 pt-2">
                <input class="btn btn-primary btn-lg" name="action" type="submit" href="/User/login" value="Login">
                    <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="/User/register"
                        class="link-primary">Register</a></p>
                </div>

                </form>
            </div>
        </div>
    </div>
</form>
</section>



<script src="/resources/validation.js"></script>

<?= $this->view('/Includes/footer')?>

</body>
</html>