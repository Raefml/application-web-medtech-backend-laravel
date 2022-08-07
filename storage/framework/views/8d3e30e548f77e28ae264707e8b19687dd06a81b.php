<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>details</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
<body>

<nav class="navbar navbar-expand-lg navbar-light  " background-color: #7BCCB5>
  <div class="container">
    <a class="navbar-brand" href="#">medTech</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> 

<span><caption><h3><?php echo e($categories->name); ?>     <?php echo e($categories->id); ?></h3></caption>

</span>


<form method="get" action="/category/details2/<?php echo e($categories->id); ?>">
    <button type="submit" class="btn btn-primary me-md-2">ajouter steps</button>
</form>

<div class="container col-md-19 text-center mb-3" >
<div class="container p-3">
    <div>
<h1 class="text-center p-1"> liste des steps </h1>
</div>
<div class="bs-example">

<table class="table table-striped w-75">
  <thead>
  
    <tr>
     
      <th scope="col">step</th>
      <th scope="col">description</th>
      <th scope="col"></th>
    </tr>
  </thead>
<?php $__currentLoopData = $souscategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $souscategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if( $souscategory->id_categorie == $categories->id ): ?>{
    <tbody>
    <tr>
      
    <td><?php echo e($souscategory->name); ?></td>
      <td><?php echo e($souscategory->description); ?></td>
      <td> </td>
      <td>
     <a  class="btn btn-success me-md-2" href="/category/edit/<?php echo e($souscategory->id); ?>"> <i class="fa-solid fa-pencil"></i></a>
     <a class="btn btn-danger me-md-2" href="/category/delete2/<?php echo e($souscategory->id); ?>"><i class="fa-solid fa-trash-can"></i></a>
     <a class="btn btn-primary me-md-2" href="/category/qst2/<?php echo e($souscategory->id); ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
     
      </td>
    </tr>}
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</div>
</div>

    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a5c8cc496b.js" crossorigin="anonymous"></script></head>
</html><?php /**PATH C:\laragon\www\medTech\resources\views/details.blade.php ENDPATH**/ ?>