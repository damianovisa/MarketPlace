<html lang="en">
<head>
    <title><?=_("Details")?></title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" href="/resources/style.css">
</head>
<body>
    <?php $this->view("/Includes/header");?>

<section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="/images/<?php echo $data->image?>"/></div>
                    <div class="col-md-6">
                    <?php if(isset($_SESSION['user_id'])) {?>
                        <?php if($data->qty <= 0){?>
                        <p class="lead text-danger">Out of stock!</p>
                        <?php }?>
                    <?php }?>
                        <div class="small mb-1"><?php echo $data->manufacturer ?> <div class="small mb-1">Qty: <?php echo $data->qty ?> </div> </div>
                        <h1 class="display-5 fw-bolder"><?php echo $data->name ?></h1>
                        <div class="fs-5 mb-5">
                            <span>$<?php echo $data->price ?></span>
                        </div>
                        <p class="lead"><?php echo $data->description ?></p>
                        <div class="d-flex">
                        <?php if(isset($_SESSION['user_id'])) {?>
                                <?php if($data->qty <= 0){?>
                                    <span><a href="#" class="btn btn-light disabled"><?=_('Add to cart')?></a><a href="/Main/reviews/<?= $data->seller_id ?>" class="btn btn-outline-warning p-2"><i class="bi bi-pencil-fill"></i></a >
                                    <?php }else{?>
                                <span><a href="/User/addToCart/<?=$data->product_id ?>" class="btn btn-outline-dark flex-shrink-0"><?=_('Add to cart')?></a> <a href="/Main/reviews/<?= $data->seller_id ?>" class="btn btn-outline-warning p-2"><i class="bi bi-pencil-fill"></i></a >
                                    <?php }?>
                                <?php }else{?>
                                <span><a href="#" class="btn btn-light disabled"><?=_('Add to cart')?></a></span><span>$<?php echo $data->price ?></span>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
</section>

<?php $this->view('/Includes/footer') ?>    

</body>

</html>