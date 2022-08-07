<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <h3>page comp</h3>



    
<form method="get" action="/category/qsttt/<?php echo e($souscategories->id); ?>">
    <button type="submit" class="btn btn-primary me-md-2">ajouter question</button>
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
     
      <th scope="col">question</th>
      <th scope="col">reponse</th>
      <th scope="col"></th>
    </tr>
  </thead>
<?php $__currentLoopData = $qste; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $qstei): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if( $qstei->souscategory_id == $souscategories->id ): ?>
    
    <tbody>
    <tr>
      
    <td><?php echo e($qstei->qst); ?></td>
      <td></td>
      <td> </td>
      <td>
      <a  class="btn btn-success me-md-2" href=""> <i class="fa-solid fa-pencil"></i></a>
     <a class="btn btn-danger me-md-2" href=""><i class="fa-solid fa-trash-can"></i></a>
     <a class="btn btn-primary me-md-2" href=""><i class="fa fa-eye" aria-hidden="true"></i></a>
     
      </td>
    </tr>
<?php endif; ?>

   
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</div>
</div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html><?php /**PATH C:\laragon\www\medTech\resources\views/comp.blade.php ENDPATH**/ ?>