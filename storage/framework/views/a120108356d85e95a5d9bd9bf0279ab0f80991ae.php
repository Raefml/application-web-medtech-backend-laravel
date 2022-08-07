<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz</title>
    <?php echo \Livewire\Livewire::styles(); ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

   <div class="containerh p-3 col-md-9 text-center mb-5 ">
     <div class="row"style="margin-top:50px">
              <div class="col-md-6offset-md-3">
                    <h1>quiz page</h1><hr>
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('counter2')->html();
} elseif ($_instance->childHasBeenRendered('HQ98JbO')) {
    $componentId = $_instance->getRenderedChildComponentId('HQ98JbO');
    $componentTag = $_instance->getRenderedChildComponentTagName('HQ98JbO');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('HQ98JbO');
} else {
    $response = \Livewire\Livewire::mount('counter2');
    $html = $response->html();
    $_instance->logRenderedChild('HQ98JbO', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?> 
              </div>
      </div>
    </div>


    


<?php echo \Livewire\Livewire::scripts(); ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html><?php /**PATH C:\laragon\www\medTech\resources\views/quizz.blade.php ENDPATH**/ ?>