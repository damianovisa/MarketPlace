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
      <a class="navbar-brand mb-0 h1" href="/Main/index"><?=_("Dams")?></a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/Main/index">Home</a>
        </li>
        <?php if(isset($_SESSION['seller_id'])) {?>
        <li class="nav-item">
          <a class="nav-link" href="/Seller/addProduct"><?=_("Add product")?></a>
        </li>
        <?php }else{?>

        <?php }?>
        
        <?php if(isset($_SESSION['user_id']) || isset($_SESSION['seller_id'])) {?>
        <li class="nav-item">
          <a class="nav-link" href="/Main/logout">Logout</a>
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

      <form class="d-flex" role="search">
      
      <input class="form-control me-1" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
        
      </form>

      <?php if(isset($_SESSION['user_id']) || isset($_SESSION['seller_id'])){?>
        <a class="btn btn-primary m-2" href="#"><?=_("Profile")?></a>
      <?php }else{?>
        <a class="btn btn-primary m-2" href="/User/Login"><?=_("Sign in")?></a>
      <?php }?>

      <?php if(isset($_SESSION['user_id'])){?>
      <a class="btn btn-outline-light btn-floating m-1" id="cartBtn" href="/User/cart" role="button">
        <i class="bi bi-cart-fill pe-2"></i>
        <span class='badge badge-warning' id='lblCartCount' name="cartNb" >0</span>
      </a>
      <?php } if(isset($_SESSION['seller_id'])) {?>
        <a class="btn btn-outline-light btn-floating p-2" id="cartBtn" href="/Seller/viewProducts" role="button">
          <i class="bi bi-bag-fill"></i>
      </a>
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