<html lang="en">
<head>
    <title>Add product</title>
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
        <label for="validationCustom01" class="form-label"><?=_("Product name")?></label>
        <input type="text" class="form-control" id="validationCustom01" name="name" required>
        <div class="invalid-feedback">
            
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label"><?=_("Manufacturer")?></label>
        <input type="text" class="form-control" id="validationCustom02" name="manufacturer" required>
        <div class="invalid-feedback">
            
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label"><?=_("Description")?></label>
        <div class="input-group has-validation"> 
        <input name="description" type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
             
        </div>
        </div>
    </div>
    <div class="col-md-4">
        <label for="validationCustom03" class="form-label"><?=_("Price")?></label>
        <input type="text" class="form-control" id="validationCustom03" name="price" required>
        <div class="invalid-feedback">
         
        </div>
    </div>
    
    <div class="col-md-4">
        <label for="validationCustom03" class="form-label"><?=_("Image")?></label>
        <input type="file" class="form-control" id="validationCustom03" name="image" required>
        <div class="invalid-feedback">
         
        </div>
    </div>

    <div class="col-12">
        <input class="btn btn-primary" name="action" type="submit" href="/Seller/addProduct" value="Add">
    </div>
</form>

<script src="/resources/validation.js"></script>

<?= $this->view('/Includes/footer')?>

</body>
</html>