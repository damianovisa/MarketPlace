<html lang="en">
<head>
    <title>Add product</title>
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
        <input type="file" class="form-control" id="customFile" name="image" required>
    </div>

    <div class="col-12">
        <input class="btn btn-primary" name="action" type="submit" href="/Seller/addProduct" value="Add">
    </div>
</form> -->

<section class="vh-100">
<form class="needs-validation" action="" method="post" novalidate>
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form>
                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                        <p class="lead fw-normal mb-4 me-3">Add a product</p>
                    </div>

                    <div class="form-outline mb-4 has-validation" >
                        <label class="form-label" for="validationCustomUsername" ><?=_("Product name")?></label>
                        <input type="text" name="name" minlength="1" id="validationCustomUsername" class="form-control form-control-lg"
                        placeholder="Enter product name" aria-describedby="inputGroupPrepend" required/>
                        <div class="invalid-feedback">
                        </div>
                    </div>
                    <div class="form-outline mb-4 has-validation" >
                        <label class="form-label" for="validationCustomUsername" ><?=_("Manufacturer")?></label>
                        <input type="text" name="manufacturer" minlength="1" id="validationCustomUsername" class="form-control form-control-lg"
                        placeholder="Enter manufacturer" aria-describedby="inputGroupPrepend" required/>
                        <div class="invalid-feedback">
                        </div>
                    </div>

                    <div class="form-outline mb-4 has-validation" >
                        <label class="form-label" for="validationCustomUsername" ><?=_("Description")?></label>
                        <input type="text" name="description" id="validationCustomUsername" class="form-control form-control-lg"
                        placeholder="Enter description" aria-describedby="inputGroupPrepend" required/>
                        <div class="invalid-feedback">
                        </div>
                    </div>

                    <div class="form-outline mb-3">
                        <label class="form-label" for="validationCustom03"><?=_("Price")?></label>
                        <input type="number" step="any" minlength="1" id="validationCustom03" class="form-control form-control-lg"
                        placeholder="Enter price" name="price" required/>
                        <div class="invalid-feedback">
                        </div>  
                    </div>

                    <div class="form-outline mb-3">
                        <label class="form-label" for="validationCustom03"><?=_("Quantity")?></label>
                        <input type="number" minlength="1" min="1" id="validationCustom03" class="form-control form-control-lg"
                        placeholder="Enter quantity" name="qty" required/>
                        <div class="invalid-feedback">

                        </div>  
                    </div>

                    <div class="form-outline mb-3">
                        <label class="form-label" for="validationCustom03"><?=_("Image")?></label>
                        <input type="file" minlength="1" id="validationCustom03" class="form-control form-control-lg"
                        name="image" required/>
                        <div class="invalid-feedback">
                            
                        </div>  
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <input class="btn btn-primary btn-lg" name="action" type="submit" href="/Seller/addProduct" value="Add">
                    </div>

                </form>
                
            </div>
             
        </div>
    </div>
</form>
</section>

<script src="/resources/validation.js"></script>

<?php $this->view('/Includes/footer') ?>   

</body>
</html>