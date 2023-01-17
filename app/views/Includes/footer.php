<head>
    <title>Footer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="blockcode" >
  <footer class="page-footer shadow">
    <div
      class="d-flex flex-wrap justify-content-between align-items-center mx-auto py-4"
      style="width: 80%">
      <div class="d-flex flex-wrap align-items-center">
        <a class="d-flex align-items-center p-0 text-dark">
          <span class="ml-4 h5 mb-0 font-weight-bold"><?=_("Dams")?></span>
        </a>
        <span
          style="font-size: 3em; margin: -2rem 0px -1.5rem 1rem; color: #c4c4c4;">&#8226;</span
        >
        <small class="ml-2"><?=_("&copy; Dams,")?> <?= date("Y")?> <?=_(". All rights reserved.")?></small>
      </div>
      <div>
        <button class="btn btn-dark btn-flat p-2">
            <i class="fa fa-facebook"></i>
        </button>
        <button class="btn btn-dark btn-flat p-2">
            <i class="fa fa-twitter"></i>
        </button>
        <button class="btn btn-dark btn-flat p-2">
            <i class="fa fa-instagram"></i>
        </button>
      </div>
    </div>
  </footer>
</div>


</body>
</html>