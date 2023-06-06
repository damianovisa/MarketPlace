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

    <div class="row m-3 justify-content-center">
        <img src="../images/banner.jpg" style="width:90%; height:65vh" class="img-fluid">
    </div>

    <div class="container">
        <?php if(isset($_POST['search'])){
                if($_POST['search'] != ""){?>
                <p class="text mb-4">Results for: <?=$_POST['search'] ?></p>
        <?php }
        
                }else{?>
            <?php }?>
        <div class="row">
            <?php foreach ($data['products'] as $item){?>
            <div class="col-sm-3 mb-5">
            
                <div class="card shadow-sm h-100" >
                
                    <!-- <div class="card-header">
                        By <?=$item->manufacturer;?>
                    </div>       -->
                    <div>
                        <div class=""> 
                        <a href="/Main/productDetails/<?=$item->product_id?>">
                            <img src="../images/<?php echo $item->image?>" class="card-img p-2" width="100%" style="object-fit:contain" height="225px"/>
                        </a>
                        <div class="card-body">
                        <div class="text-center">
                        <h5 class="card-title"><?php if(strlen($item->name) > 22){?>
                                <?=substr($item->name,0,20)."...";?>
                                
                            <?php }else{?>
                                <?=$item->name?>
                            <?php }?></h5>
                        <p class="text-muted mb-4">by <?php echo $item->manufacturer ?></p>
                        </div>
                        <div>
                            
                            
                        </div>
                        <div class="d-flex justify-content-between total font-weight-bold mt-4">
                            <?php if(isset($_SESSION['user_id'])) {?>
                                <span><a href="/User/addToCart/<?=$item->product_id ?>" class="btn btn-outline-dark flex-shrink-0"><?=_('Add to cart')?></a> <a href="/Main/reviews/<?= $item->seller_id ?>" class="btn btn-outline-warning p-2"><i class="bi bi-pencil-fill"></i></a ></span><span>$<?php echo $item->price ?></span>
                            <?php }else{?>
                                <span><a href="#" class="btn btn-light disabled"><?=_('Add to cart')?></a></span><span>$<?php echo $item->price ?></span>
                            <?php }?>
                    
                        </div>
                    </div>
                    </div>
                    </div>
                    
                </div>
            </div>
                     
            <?php }?>
        </div>
</div>

<?php $this->view('/Includes/footer') ?>    

</body>

</html>