<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body   position="revert">
<section class="ftco-section p-5">
   
<div class="container col-md-6 text-center mb-5" >
     <h2 class="text-center">ajouter step</h2>
     <hr/>
     <form action="/category/sousadd/<?php echo e($categories->id); ?> " method="POST">
             <?php echo csrf_field(); ?> 
      
           <div class="form-group">
                <label for="">Nom </label>
                <input type="text"name="nom"class="form-control" value="<?php echo e(@old('nom')); ?>"  required >

                <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                              
                             
           </div>
          <div class="form-group">
                <label for="">Description </label>
                <textarea name="description"class="form-control" <?php echo e(@old('description' )); ?> required></textarea>
                <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
          


          
          

          <div class="p-4">
          <button type="submit" class="btn btn-primary ">Ajouter</button>
          </div>
     </form>
</div>



</div>
</section>   
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html><?php /**PATH C:\laragon\www\medTech\resources\views/formsouscategorie.blade.php ENDPATH**/ ?>