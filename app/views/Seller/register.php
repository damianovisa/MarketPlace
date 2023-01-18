<html lang="en">
<head>
    <title>Seller Register</title>
     <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" href="/resources/style.css">
</head>
<body>
    <?php $this->view("/Includes/header");?>

<!-- <form class="row g-3 needs-validation" action="" method="post" novalidate>
    <div class="col-md-4">
        <label for="validationCustom01" class="form-label"><?=_("First name")?></label>
        <input type="text" class="form-control" id="validationCustom01" name="fname" required>
        <div class="invalid-feedback">
            Enter your first name
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label"><?=_("Last name")?></label>
        <input type="text" class="form-control" id="validationCustom02" name="lname" required>
        <div class="invalid-feedback">
            Enter your last name
        </div>
    </div>
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
    <div class="col-md-4">
        <label for="validationCustom03" class="form-label"><?=_("Confirm password")?></label>
        <input type="password" class="form-control" id="validationCustom03" name="passwordConf" required>
        <div class="invalid-feedback">
        Re-enter password
        </div>
    </div>

    <div class="col-12">
        <input class="btn btn-primary" name="action" type="submit" href="/Seller/Register" value="Register">
    </div>
</form> -->

<section class="vh-100">
<form class="needs-validation" action="" method="post" novalidate>
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form>
                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                        <p class="lead fw-normal mb-4 me-3">Sign up </p>
                        
                    </div>

                    <div class="form-outline mb-4 has-validation" >
                        <label class="form-label" for="validationCustomUsername" >First name</label>
                        <input type="text" name="fname" minlength="1" id="validationCustomUsername" class="form-control form-control-lg"
                        placeholder="First name" aria-describedby="inputGroupPrepend" required/>
                        <div class="invalid-feedback">
                            
                        </div>
                    </div>
                    <div class="form-outline mb-4 has-validation" >
                        <label class="form-label" for="validationCustomUsername" >Last name</label>
                        <input type="text" name="lname" minlength="1" id="validationCustomUsername" class="form-control form-control-lg"
                        placeholder="Last name" aria-describedby="inputGroupPrepend" required/>
                        <div class="invalid-feedback">
                            
                        </div>
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
                        <input type="password" pattern="^\S{5,}$" minlength="1" id="validationCustom03" class="form-control form-control-lg"
                        placeholder="Password" name="password" required/>
                        <div class="invalid-feedback">
                            Password must be at least 5 characters
                        </div>  
                    </div>

                    <div class="form-outline mb-3">
                        <label class="form-label" for="validationCustom03">Confirm Password</label>
                        <input type="password" pattern="^\S{5,}$" minlength="1" id="validationCustom03" class="form-control form-control-lg"
                        placeholder="Password" name="passwordConf" required/>
                        <div class="invalid-feedback">
                            
                        </div>  
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Checkbox -->
                        <div class="form-check mb-0"> 
                        
                        </div>
                        <a href="/User/register" class="text-body">Register as a User</a>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                    <input class="btn btn-primary btn-lg" name="action" type="submit" href="/Seller/register" value="Register">
                        <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="/Seller/login"
                            class="link-primary">Sign in</a></p>
                    </div>

                </form>
                
            </div>
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" >
            </div>
        </div>
    </div>
</form>
</section>

<script src="/resources/validation.js"></script>

<?= $this->view('/Includes/footer')?>

</body>
</html>