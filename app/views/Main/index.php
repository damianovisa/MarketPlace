<html lang="en">
<head>
    <title><?=_("Home")?></title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" href="../resources/style.css">
</head>
<body>
    <?php $this->view("/Includes/header")?>

    </br>
    <div class="container">
        <div class="row">
            <h1><?=_("Products")?></h1>
        </div>
        <div class="row">
            <?php foreach ($data as $item){?>
            <div class="col-sm-3 mb-5">
                <div class="card shadow-sm h-100" >
                    <div>
                        <div class=""> 
                        <img src="../images/<?php echo $item->image?>" class="card-img" width=100% height="250"/>
                        <div class="card-body">
                        <div class="text-center">
                        <h5 class="card-title"><?php echo $item->name ?></h5>
                        <p class="text-muted mb-4">by <?php echo $item->manufacturer ?></p>
                        </div>
                        <div>
                        <div class="d-flex">
                            <span><?php echo $item->description ?></span>
                        </div>
                        
                        </div>
                        <div class="d-flex justify-content-between total font-weight-bold mt-4">
                        <span>Price</span><span>$<?php echo $item->price ?></span>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
            <!-- <div class="container py-5">
                <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-3">
                    <div class="card text-black"> 
                    <img src="../images/<?php echo $item->image?>" class="card-img-top"/>
                    <div class="card-body">
                        <div class="text-center">
                        <h5 class="card-title"><?php echo $item->name ?></h5>
                        <p class="text-muted mb-4">by <?php echo $item->manufacturer ?></p>
                        </div>
                        <div>
                        <div class="d-flex justify-content-between">
                            <span><?php echo $item->description ?></span>
                        </div>
                        
                        </div>
                        <div class="d-flex justify-content-between total font-weight-bold mt-4">
                        <span>Price</span><span>$<?php echo $item->price ?></span>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div> -->

            
            <?php }?>
        </div>
</div>

</body>
</html>