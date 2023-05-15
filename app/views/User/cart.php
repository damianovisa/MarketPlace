<head>
     <title>Cart</title>
     <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- css -->
    <link rel="stylesheet" href="../resources/style.css">
    <!-- Bootstrap ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body style="background-color:#eee;">

<?= $this->view('/Includes/header')?>

<section class="h-100 h-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12">
        <div class="card card-registration card-registration-2" style="border-radius: 15px;">
          <div class="card-body p-0">
            <div class="row g-0">
              <div class="col-lg-8">
                <div class="p-5">
                  <div class="d-flex justify-content-between align-items-center mb-5">
                    <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                  </div>
                  <hr class="my-4">

                  <?php 
                    $totalPrice = 0;
                    $cartItems = 0; 
                  ?>

                  <?php foreach($data as $item){?>
                    <?php
                      $totalPrice += $item->price;
                      $totalPriceTax = number_format($totalPrice*0.15, 2);
                      
                      $cart = new \app\models\Cart();
                      $cart = $cart->getAll($item->cart_id);

                      if(isset($item->cart_id)){
                        $cartItems += count($cart);
                        
                      }else{
                        $cartItems = 0;
                      }
                      ?>

                  <div class="row mb-4 d-flex justify-content-between align-items-center">
                    <div class="col-md-2 col-lg-2 col-xl-2">
                      <img
                        src="../images/<?=$item->image?>"
                        class="img-fluid rounded-3">
                        <h6 class="text-muted mt-2">By <?=$item->manufacturer ?></h6>
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3">
                      <h6 class="text-muted"><?=$item->name?></h6>
                      <h6 class="text-black mb-0"><?=$item->description?></h6>
                    </div>
                    <!-- <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                      <button class="btn btn-link px-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                        <i class="bi bi-dash"></i>
                      </button>

                      <input id="form1" min="0" name="quantity" value="1" type="number"
                        class="form-control form-control" readonly/>

                      <button class="btn btn-link px-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                        <i class="bi bi-plus"></i>
                      </button>
                    </div> -->
                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                      <h6 class="mb-0" id="price">$ <?=$item->price?></h6>
                    </div>
                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                      <a href="/User/deleteFromCart/<?=$item->cart_id?>" class="text-muted"><i class="bi bi-x-lg"></i></a>
                    </div>
                  </div>

                  <hr class="my-4">
                  <?php }?>
                  
                  <div class="pt-5">
                    <h6 class="mb-0"><a href="/Main/index" class="text-body"><i
                          class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 bg-grey">
                <div class="p-5">
                  <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                  <hr class="my-4">

                  <div class="d-flex justify-content-between mb-4">
                    <h5 class="text-uppercase">items <?=$cartItems?></h5>
                    
                    <?php if(isset($totalPrice)){?>
                    <h5>$ <?=$totalPrice?></h5>
                    <?php }else {?>
                      <h5>$ 0</h5>
                    <?php } ?>
                  </div>
                  <div class="d-flex justify-content-between mb-4">
                    <h5 class="text-muted ">TAX </h5>

                    <?php if(isset($totalPriceTax)){?>
                      <h5>$ <?=$totalPriceTax?></h5>
                    <?php }else {?>
                      <h5>$ 0</h5>
                    <?php } ?>
   
                  </div>

                  <h5 class="text-uppercase mb-3">Shipping</h5>

                  <div class="mb-4 pb-2">
                    <select class="select">
                      <option value="1">Standard-Delivery- $5.00</option>
                    </select>
                  </div>

                  <!-- <h5 class="text-uppercase mb-3">Give code</h5>

                  <div class="mb-5">
                    <div class="form-outline">
                      <input type="text" id="form3Examplea2" class="form-control form-control-lg mb-1" /> 
                      <label class="form-label" for="form3Examplea2">Enter your code</label>
                      <input type="submit" class="btn btn-success float-end" value="Apply">
                    </div>
                  </div> -->

                  <hr class="my-4">

                  <div class="d-flex justify-content-between mb-5">
                    <h5 class="text-uppercase">Total price</h5>
                    <?php if(isset($totalPriceTax)){?>
                      <h5>$ <?= $totalPriceTax + $totalPrice+ 5?></h5>
                    <?php }else {?>
                      <h5>$ 0</h5>
                    <?php } ?>

                  </div>

                  <button type="button" class="btn btn-dark btn-block btn-lg"
                    data-mdb-ripple-color="dark">Checkout</button>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<script>

</body>
</html>