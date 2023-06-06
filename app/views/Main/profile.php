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
<?php $this->view("/Includes/header");?>

<?php 
if(isset($_SESSION['user_id'])){
    $info = $data['user'];
}else{
    $info = $data['seller'];
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
                <img class="rounded-circle mt-5" width="150px" src="<?= $info->profile_pic?>"><span class="font-weight-bold"><?= $info->fname?></span><span class="text-black-50"><?= $info->email?></span><span></span></div>
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
                    <div class="col-md-6"><label class="labels">First name</label><input type="text" class="form-control" value="<?= $info->fname?>"></div>
                    <div class="col-md-6"><label class="labels">Last name</label><input type="text" class="form-control" value="<?= $info->lname?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Email Address</label><input type="text" class="form-control" value="<?= $info->email?>"></div>
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" value=""></div>
                    <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text" class="form-control" placeholder="enter address line 1" value=""></div>
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
                <img class="rounded-circle mt-5" width="150px" src="<?= $info->profile_pic?>"><span class="font-weight-bold"><?= $info->fname?></span><span class="text-black-50"><?= $info->email?></span><span></span></div>
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
                    <div class="col-md-6"><label class="labels">First name</label><input type="text" class="form-control" value="<?= $info->fname?>"></div>
                    <div class="col-md-6"><label class="labels">Last name</label><input type="text" class="form-control" value="<?= $info->lname?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Email Address</label><input type="text" class="form-control" value="<?= $info->email?>"></div>
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" value=""></div>
                    <div class="col-md-12"><label class="labels">Address Line 1</label><input type="text" class="form-control" placeholder="enter address line 1" value=""></div>
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
    <?php }?>

<?php $this->view("/Includes/footer");?>
</body>
</html>