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
     <h2 class="text-center">Ajouter question</h2>
     <hr/>
     <form action="/repp/<?php echo e($souscategories->id); ?>" method="POST">
             <?php echo csrf_field(); ?> 
             
           <div class="form-group">
           <div class="bg-light border border-dark ">
                <label for="">question</label>
                <input type="text" name="qest"class="form-control" value="<?php echo e(@old('nom')); ?>"  required >

                <?php $__errorArgs = ['qest'];
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
            </div>
            <br/>

<div class="bg-light border border-dark ">


<fieldset>      
    <legend>type de reponce:</legend>

    <div>
      <input type="checkbox" id="checkbox" name="type" value="checkbox"
             >
      <label for="checkbox">checkbox</label>
    </div>

    <div>
      <input type="checkbox" id="text" name="type" value="text">
      <label for="text">text</label>
    </div>
</fieldset>
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
</html><?php /**PATH C:\laragon\www\medTech\resources\views/ajoutqst.blade.php ENDPATH**/ ?>