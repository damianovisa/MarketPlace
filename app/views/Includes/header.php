<html lang="en">
<head>
    <title></title>
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

<nav class="navbar navbar-expand-lg bg-light navbar-dark bg-dark" >
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand mb-0 h1" href="/Main/index"><?=_("Marketplace")?></a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/Main/index"><?=_("Home")?></a>
        </li>
        <?php if(isset($_SESSION['seller_id'])) {?>
        <li class="nav-item">
          <a class="nav-link" href="/Seller/addProduct"><?=_("Add product")?></a>
        </li>
        <?php }else{?>

        <?php }?>
        
        <?php if(isset($_SESSION['user_id']) || isset($_SESSION['seller_id'])) {?>


        <li class="nav-item">
          <?php if(isset($_SESSION['user_id'])){
            $user = new \app\models\User();
            $user = $user->getUserById($_SESSION['user_id']);
            $userpfp = $user->profile_pic;?>

            <a class="nav-link" href="/Main/profile"><img style="height:24px;width:24px;border-radius:50%;object-fit:cover" src="/images/<?= $userpfp?>"></a>
          <?php }else if(isset($_SESSION['seller_id'])){
            $seller = new \app\models\Seller();
            $seller = $seller->getSellerById($_SESSION['seller_id']);
            $sellerpfp = $seller->profile_pic;?>
            
            <a class="nav-link" href="/Main/profile"><img style="height:24px;width:24px;border-radius:50%" src="/images/<?= $sellerpfp?>"></a>
          <?php }?>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="/Main/logout"><?=_("Logout")?></a>
        </li>
        <?php }else{?>
          
        <?php }?>
        
        <?php if(isset($_SESSION['user_id']) || isset($_SESSION['seller_id'])) {?>
        <li class="nav-item">
          <a class="nav-link disabled "><?=_("Welcome")?> <?= $_SESSION['fname']?></a>
        </li>
        <?php }else{?>

          <?php }?>
      </ul>

      <?php if(isset($_SESSION['user_id']) || isset($_SESSION['seller_id'])){?>
        
      <?php }else{?>
        <a class="btn btn-primary m-2" href="/User/Login"><?=_("Sign in")?></a>
      <?php }?>

      <?php if(isset($_SESSION['user_id'])){
        $user_id = $_SESSION['user_id'];
        $cart = new \app\models\Cart();
        $cart->user_id = $user_id;
        $carts = $cart->getAllByUser($user_id);
        $cartItems = count($carts);?>

      <a class="btn btn-outline-light btn-floating m-1" id="cartBtn" href="/User/cart" role="button">
        <i class="bi bi-cart-fill "></i>
        <?php if(isset($_SESSION['user_id'])){?>
        <span class='badge' id='lblCartCount' name="cartNb" ><?= $cartItems?></span>
        <?php }?>
      </a>
      <?php } if(isset($_SESSION['seller_id'])) {?>
        <a class="btn btn-outline-light btn-floating p-2 m-2" id="cartBtn" href="/Seller/viewReviews" role="button">
          <i class="bi bi-chat-left-text-fill"></i>
      </a>
      <?php } else {?>
        <form method="get" action="" class="d-flex">
          <input class="form-control me-1" type="text" placeholder="Search" name="search">
          <input class="btn btn-outline-success" type="submit" value="Search">
        </form>

        <?php }?>

    </div>
  </div>
</nav>

<style>
  #cartBtn:hover .badge{
    color:black;
  }
</style>

</body>
</html>