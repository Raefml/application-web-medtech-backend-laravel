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
    height: 100vh;
  "
>

    <div class="container col-md-9 text-center mb-5" >

<h1 class="text-center p-0.5 m-2">  résultat </h1>

</div>
<div>
  <br/>
     
<div class="row align-items-start  md-2 col-5" >
<div class="bs-example">
<div class="card border-secondary mb-3" style="max-width: 30rem;">
<table class="table table-striped w-80">
  <thead>
  
    <tr>
      
      <th scope="col">question</th>
      <th scope="col">reponce</th>
      
    </tr>
  </thead>

  <tbody>
    <tr>
      
      <td> 

      <?php 
      $n=count($repon);
      foreach ($qste as $qq)
        if($qq->id==$repon[$n-8]->qst_id)
            echo $qq->qst ;
    
      ?>
      </td>
      <td>
      <?php
$n=count($repon);
//echo $n ;

    echo $repon[$n-8]->rep; 
    
?>
      </td>

    </tr>

    <tr>
      
      <td><?php 
      $n=count($repon);
      foreach ($qste as $qq)
        if($qq->id==$repon[$n-7]->qst_id)
            echo $qq->qst ;
    
      ?></td>
      <td>
      <?php
$n=count($repon);
//echo $n ;
//1//////
    echo $repon[$n-7]->rep; 
    
?>
      </td>
      
    </tr> <tr>
      
      <td><?php 
      $n=count($repon);
      foreach ($qste as $qq)
        if($qq->id==$repon[$n-9]->qst_id)
            echo $qq->qst ;
    
      ?></td>
      <td>
      <?php
$n=count($repon);
//echo $n ;
////2//////
    echo $repon[$n-9]->rep; 
    
?>
      </td>
      
    </tr> <tr>
      
      <td><?php 
      $n=count($repon);
      foreach ($qste as $qq)
        if($qq->id==$repon[$n-5]->qst_id)
            echo $qq->qst ;
    
      ?></td>
      <td>
      <?php
$n=count($repon);
//echo $n ;
////3//////
    echo $repon[$n-5]->rep; 
    
?>
      </td>
      
    </tr> <tr>
      
      <td><?php 
      $n=count($repon);
      foreach ($qste as $qq)
        if($qq->id==$repon[$n-6]->qst_id)
            echo $qq->qst ;
    
      ?></td>
      <td>
      <?php
$n=count($repon);
//echo $n ;
/////4/////
    echo $repon[$n-6]->rep; 
    
?>
      </td>
      
    </tr> <tr>
      
      <td><?php 
      $n=count($repon);
      foreach ($qste as $qq)
        if($qq->id==$repon[$n-4]->qst_id)
            echo $qq->qst ;
    
      ?></td>
      <td>
      <?php
$n=count($repon);
//echo $n ;
/////5/////
    echo $repon[$n-4]->rep; 
    
?>
      </td>
      
    </tr> <tr>
      
      <td><?php 
      $n=count($repon);
      foreach ($qste as $qq)
        if($qq->id==$repon[$n-2]->qst_id)
            echo $qq->qst ;
    
      ?></td>
      <td>
      <?php
$n=count($repon);
//echo $n ;
/////6/////
    echo $repon[$n-3]->rep; 
    
?>
      </td>
      
    </tr> <tr>
      
      <td><?php 
      $n=count($repon);
      foreach ($qste as $qq)
        if($qq->id==$repon[$n-1]->qst_id)
            echo $qq->qst ;
    
      ?></td>
      <td>
      <?php
$n=count($repon);
//echo $n ;
///////7/////
    echo $repon[$n-2]->rep; 
    
?>
      </td>
      
    </tr> <tr>
      
      <td><?php 
      $n=count($repon);
      foreach ($qste as $qq)
        if($qq->id==$repon[$n-3]->qst_id)
            echo $qq->qst ;
    
      ?></td>
      <td>
      <?php
$n=count($repon);
//echo $n ;
/////8/////
    echo $repon[$n-1]->rep; 
    
?>
      </td>
      
    </tr>

    </div> 
</div>
</div>
</div>






</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>