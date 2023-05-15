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
    
    <?php foreach($data as $message){?>
                    
<section>
<div class="container text-dark">
    <div class="row d-flex justify-content-center">
    <div class="col-md-10 col-lg-8 col-xl-6">
        <div class="card-invisible">
        <div class="card-body p-4">
            <div class="d-flex flex-start w-100">
            
            <div class="w-100">

            <form action="" method="post">
                <section">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                    <div class="col-md-12 col-lg-10">
                        <div class="card text-dark">
                        <div class="card-body p-4">               
                
                            </br>

                                <h6 class="fw-bold mb-1">By user <?= $message->user_id ?></h6>
                                <div class="d-flex align-items-center mb-3">
                                <p class="mb-0">
                                    <?= $message->date?>
                                </p>
                                
                                </div>
                                <p class="mb-0">
                                <?= $message->message?>
                                </p>
                            </div>
                            </div>
                        </div>

                    </div>
                    </div>
                </div>
                </section>      

              </form> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
              <?php }?>
              

   
<?php $this->view('/Includes/footer') ?>    

</body>

</html>