<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
   
<div
  class="bg-image"
  style="
    background-image: url('https://static.vecteezy.com/ti/vecteur-libre/p3/2028258-resume-couleur-verte-de-fond-sante-et-medical-technologie-et-science-avec-fond-de-forme-hexagonale-vectoriel.jpg');
    height: 190vh;
  "
>

    <div class="container col-md-9 text-center mb-5" >

<h1 class="text-center p-0.5 m-2">  <?php echo e($tt); ?> </h1>

</div>
<div>

    <img    src="<?php echo e(URL::asset('images/body.png')); ?>"  width="500" height="600"  height="1500" style=" margin-left: 687px; ">
  <br/>
     
<div class="row align-items-start  md-2 col-5" >
<div class="bs-example">
<div class="card border-secondary mb-3" style="width: 133%;   height: 90%; margin-left: 19px; margin-top: -600px;">
<table class="table table-striped" style="width:43.5rem; margin-left: 8px; margin-top: -5px; }">
  <thead>
    <tr>
     
      <th scope="col">question</th>
     
      <th scope="col">reponce</th>
    </tr>
  </thead>
  <form action="/category/ml/<?php echo e($tt); ?>"methode="post" >
  <tbody>
    
    <tr>
    <?php  
    $passion=array();
     foreach( $tabbe as $ta ) {?>
      <td>
        
      <?php   echo $ta->qst ; ?>
      </td>
      
     
   <?php if ($ta->type_qst=="checkbox"){?>
    
   
    <?php  $pieces=array();
    $rar=array();?>
    <?php $pieces = $ta->checkbox_pro; ?>
    <?php
   

$replacestr = str_replace(array("#", "'", ";","[","]","\""), '', $pieces);
$rar=explode(",",$replacestr);
?>
<td>
<?php foreach($rar as $rr){ ?>
     <input type="<?php echo e($ta->type_qst); ?>"    name="<?php echo e($ta->qst); ?>" value="<?php echo e($rr); ?>">
    <label > <?php echo e($rr); ?>   </label><br/>
    
    <?php }
            ?>
  
     
   <?php }?>
   <?php if ($ta->type_qst=="text"){?>
        <td> <input type="text"   required  name="<?php echo e($ta->qst); ?>"></td> 

        <?php }?>
    
    </td>

   
    </tr>
    
     
     <?php 
     
    $passion[$ta->qst]="dzzd";
    
    } ?>
     <tr>
     <td> </td>
     
     <td><button type="submit" class="btn btn-md btn-primary">next</button></td>
     
   </tr>

  
  </tbody>

  </form>
</table>

</div>
</div>
</div>
</div>



</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html><?php /**PATH C:\laragon\www\medTech\resources\views/step1.blade.php ENDPATH**/ ?>