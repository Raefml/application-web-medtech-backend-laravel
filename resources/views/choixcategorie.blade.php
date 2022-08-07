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




<div>
  
  
    <div class="mx-auto" style="width:600px;">
    
   
   {{-- STEP1--}}

   <div class="step-one">
       <div class="card">
           <div class="card-header bg-secondary text-white">STEP 1/4</div>
           <div class="card-body">
               <div class="row">
                   <div class="col-md-6">
                       <div class="form-group">
                 
                       <form action="/category/resu" method="POST">
                         @csrf 
                       <label for="">category</label>
                           <br/>
                           <select name="ccc" >
                            @foreach ($categories as $category)
                            
                                <option value="{{$category->id}}"   >{{$category->name}}</option>  
                            
                            
                            @endforeach
                            </select>
                            <br/>
                            </div>
          <div class="p-4">
          <button type="submit" class="btn btn-primary ">next</button>
          </div>
     </form>
</div>
                             </div>
                    </div> 
                </div>
            </div>
            </div>
        </div>
    </div>
    <br>
   




    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>