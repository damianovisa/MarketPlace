<html lang="en">
<head>
    <title><?=_("")?></title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" href="../resources/style.css">
</head>
<body>
    <?php $this->view("/Includes/header")?>

<section>
  <div class="container my-5 py-5 text-dark">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-6">
        <div class="card">
          <div class="card-body p-4">
            <div class="d-flex flex-start w-100">
              
              <div class="w-100">
                <?php foreach($data as $message){?>
              <form action="" method="post">
                                
                <div class="form-outline">
                  <p><?= $message->message?></p>
                </div>
                
              </form> 
              <?php }?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
   
<?php $this->view('/Includes/footer') ?>    

</body>

</html>