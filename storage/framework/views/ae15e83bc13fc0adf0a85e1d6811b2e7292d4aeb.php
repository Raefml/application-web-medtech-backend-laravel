<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste categorie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

<div
  class="bg-image"
  style="
    background-image: url('https://static.vecteezy.com/ti/vecteur-libre/p3/2028258-resume-couleur-verte-de-fond-sante-et-medical-technologie-et-science-avec-fond-de-forme-hexagonale-vectoriel.jpg');
    height: 100vh;
  "
>
<nav class="navbar navbar-expand-lg navbar-light bg-teal-300">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">medtech</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
        <li class="nav-item">
        <div >
<form method="get" action="/category/form" class="-5">
    <button type="submit" >ajouter categorie</button>
    
</form>
</div>
          
        </li>
        
        <li class="nav-item">
        <div>
<form method="get" action="/category/quize">
    <button type="submit" > questions</button>
</form>
</div>
        </li>
        <li class="nav-item">
        <div>
  
<form method="get" action="/category/quizee">
    <button type="submit" > questions2</button>
</form>
</div>
        </li>
        <li class="nav-item">
        <div>
  
<form method="get" action="/category/choix">
    <button type="submit"> start</button>
</form>
</div>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<div class="container col-md-9 text-center mb-5" >
  
<div class="container">
  
    <div>
   

<h1 class="text-center p-5"> liste des categories </h1>

</div>
</div>
</div>




<div class="container col-md-9 text-center mb-5" >
<div class="bs-example">

<table class="table table-striped w-75">
  <thead>
  
    <tr>
      
      <th scope="col">categorie</th>
      <th scope="col">description</th>
      
    </tr>
  </thead>
<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tbody>
    <tr>
      
      <td><?php echo e($category->name); ?></td>
      <td><?php echo e($category->description); ?></td>
      <td> </td>
      <td>
     <a herf="/category/choix"  class="btn btn-primary me-md-2" >
     <i class="fa fa-eye">
      
     </i>
     
</div>
     </a>
     <a class="btn btn-danger me-md-2" href="/category/delete/<?php echo e($category->id); ?>"><i class="fa-solid fa-trash-can"></i></a>
     <a class="btn btn-success me-md-2" href="/category/details/<?php echo e($category->id); ?>"><i class="fa-solid fa-pencil" aria-hidden="true"></i></a>
      </td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




</div>
</div>
</div>
</div>
</div>
</div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a5c8cc496b.js" crossorigin="anonymous"></script></head>
</html><?php /**PATH C:\laragon\www\medTech\resources\views/liste.blade.php ENDPATH**/ ?>