<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=_("Profile")?></title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" href="/resources/style.css">
</head>
<body>
<?php $this->view("/Includes/header");

if(isset($_SESSION['user_id'])){
    $info = $data['user'];
}else{
    $info = $data['seller'];
    $product = $data['product'];
}


if(isset($_SESSION['user_id'])){?>

<!-- User Form -->
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <!-- Form Start -->
            <form action="" method="post">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <?php if(!empty($info->profile_pic)){?>
                <img class="rounded-circle mt-5" width="150px" height="150px" src="/images/<?= $info->profile_pic?>"><span class="font-weight-bold"><?= $info->fname?></span><span class="text-black-50"><?= $info->email?></span><span></span></div>
                <?php }else{?>
                <img class="rounded-circle mt-5 mb-3" width="150px" name="profile_pic" src="/images/pfp.png"><span class="font-weight-bold"><?= $info->fname?></span><span class="text-black-50"><?= $info->email?></span><span></span></div>
                <?php }?>
                <input class="form-control" id="formFile" type="file" name="profile_pic">
            </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>                
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">First name</label><input type="text" name="fname" class="form-control" value="<?= $info->fname?>"></div>
                    <div class="col-md-6"><label class="labels">Last name</label><input type="text" name="lname" class="form-control" value="<?= $info->lname?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Email Address</label><input type="text" name="email" class="form-control" value="<?= $info->email?>"></div>
                    <?php if(isset($info->address)){?>
                        <div class="col-md-12"><label class="labels">Address Line</label><input type="text" name="address" class="form-control" placeholder="Enter address line" value="<?= $info->address?>"></div>
                    <?php }else{?>
                        <div class="col-md-12"><label class="labels">Address Line</label><input type="text" name="address" class="form-control" placeholder="Enter address line" value=""></div>
                    <?php }?>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Country</label><input type="text" class="form-control" placeholder="country" value=""></div>
                    <div class="col-md-6"><label class="labels">State/Region</label><input type="text" class="form-control" value="" placeholder="state"></div>
                </div>
                <div class="mt-5 text-center"><input class="btn btn-primary profile-button" type="submit" name="action" value="Save"> </div>
                </form>
                <!-- Form End -->
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- Seller Form -->
<?php }else{?>

    <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <!-- Form Start -->
            <form action="" method="post">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <?php if(!empty($info->profile_pic)){?>
                <img class="rounded-circle mt-5" width="150px" height="150px" src="/images/<?= $info->profile_pic?>"><span class="font-weight-bold"><?= $info->fname?></span><span class="text-black-50"><?= $info->email?></span><span></span></div>
                <?php }else{?>
                <img class="rounded-circle mt-5 mb-3" width="150px" src="/images/pfp.png"><span class="font-weight-bold"><?= $info->fname?></span><span class="text-black-50"><?= $info->email?></span><span></span></div>
                <?php }?>
                <input class="form-control" id="formFile" type="file" name="profile_pic">
            </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>                
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">First name</label><input type="text" name="fname" class="form-control" value="<?= $info->fname?>"></div>
                    <div class="col-md-6"><label class="labels">Last name</label><input type="text" name="lname" class="form-control" value="<?= $info->lname?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Email Address</label><input type="text" name="email" class="form-control" value="<?= $info->email?>"></div>
                </div>
                <div class="mt-5 text-center"><input class="btn btn-primary profile-button" type="submit" name="action" value="Save"> </div>
                </form>
                <!-- Form End -->
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

                </br>
                </br>

<!-- View Seller Products -->
<div class="container">

        <div class="p-5 text-center bg-light mb-5">
            <h1 class="mb-3">Your products</h1>
        </div>

        <div class="row">
            <?php foreach ($product as $prod){?>
                
            <div class="col-sm-3 mb-5">
                <div class="card shadow-sm h-100" >
                    <div>
                        <div class=""> 
                        <img src="../images/<?php echo $prod->image?>" class="card-img p-3" width="100%" height="250px" style="object-fit:contain"/>
                        <div class="card-body">
                        <div class="text-center">
                        <h5 class="card-title">
                        <?php if(strlen($prod->name) > 28){?>
                                <?=substr($prod->name,0,24)."...";?>
                                
                            <?php }else{?>
                                <?=$prod->name?>
                            <?php }?>
                        </h5>
                        <p class="text-muted mb-4">by <?php echo $prod->manufacturer ?></p>
                        </div>
                        <div>
                            <?php if(strlen($prod->description) > 28){?>
                                <?=substr($prod->description,0,32)."...";?>
                                
                            <?php }else{?>
                                <?=$prod->description?>
                            <?php }?>
                            
                        </div>
                        <div class="d-flex justify-content-between total font-weight-bold mt-4">
                            <span>$<?php echo $prod->price ?></span>
                            <span><a href="/Seller/deleteProduct/<?= $prod->product_id?>" class="btn"><i class="bi bi-trash-fill"></i></a></span>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
                     
            <?php }?>
        </div>
</div>

<?php }?>






<?php $this->view("/Includes/footer");?>
</body>
</html>