<html lang="en">
<head>
    <title>User Login</title>
     <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" href="/resources/style.css">
</head>
<body>
    <?php $this->view("/Includes/header");?>

<form class="row g-3 needs-validation" action="" method="post" novalidate>
    
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
</form>

<script src="/resources/validation.js"></script>

</body>
</html>