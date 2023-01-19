<head>
    <title>View Products</title>
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
    
    <?php $this->view('/Includes/header');?>

</br>

    <div class="container">

        <div class="p-5 text-center bg-light mb-5">
            <h1 class="mb-3">Your products</h1>
        </div>

        <div class="row">
            <?php foreach ($data as $item){?>
            <div class="col-sm-3 mb-5">
                <div class="card shadow-sm h-100" >
                    <div>
                        <div class=""> 
                        <img src="../images/<?php echo $item->image?>" class="card-img p-3" width="100%" height="250px"/>
                        <div class="card-body">
                        <div class="text-center">
                        <h5 class="card-title"><?php echo $item->name ?></h5>
                        <p class="text-muted mb-4">by <?php echo $item->manufacturer ?></p>
                        </div>
                        <div>
                            <?php if(strlen($item->description) > 28){?>
                                <?=substr($item->description,0,32)."...";?>
                                
                            <?php }else{?>
                                <?=$item->description?>
                            <?php }?>
                            
                        </div>
                        <div class="d-flex justify-content-between total font-weight-bold mt-4">
                            <span>$<?php echo $item->price ?></span>
                            <span><a href="/Seller/deleteProduct/<?= $item->product_id?>" class="btn"><i class="bi bi-trash-fill"></i></a></span>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
                     
            <?php }?>
        </div>
</div>

    <?php $this->view('/Includes/footer');?>

</body>
</html>