<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<section class="ftco-section p-5">
   
<div class="container col-md-6 text-center mb-5" >
     <h2 class="text-center">update</h2>
     <hr/>
     <form action="/update" method="POST">
             <?php echo csrf_field(); ?> 
            <input type="hidden" name="id" class="form-control" value="<?php echo e($souscategories->id); ?>" required>
           <div class="form-group">
                <label for="">Nom </label>
                <input type="hidden" name="id" class="form-control" value="<?php echo e($souscategories->id); ?>" required>
                <input type="text" name="name"class="form-control" value="<?php echo e($souscategories->name); ?>"  required >

               

                              
                             
           </div>
          <div class="form-group">
                <label for="">Description</label>
                <input name="description" class="form-control" value="<?php echo e($souscategories->description); ?>" required></input>
               
          </div>
          <div class="p-4">
          <button type="submit" class="btn btn-primary ">update</button>
          </div>
     </form>
</div>



</div>
</section>   
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html><?php /**PATH C:\laragon\www\medTech\resources\views/edit.blade.php ENDPATH**/ ?>