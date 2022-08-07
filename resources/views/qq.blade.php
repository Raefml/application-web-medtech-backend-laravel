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

<h1 class="text-center p-0.5 m-2">  {{$tt}} </h1>

</div>
<div>

    <img    src="{{URL::asset('images/body.png')}}"  width="500" height="600"  height="1500" style=" margin-left: 687px; ">
  <br/>
     
<div class="row align-items-start  md-2 col-5" >
<div class="bs-example">
<div class="card border-secondary mb-3" style="width: 40rem;   height: 58rem;  margin-left: 19px; margin-top: -600px;">
<table class="table table-striped" style="width:40rem; margin-left: 8px; margin-top: -5px; }">
  <thead>
    <tr>
     
      <th scope="col">question</th>
     
      <th scope="col">reponce</th>
    </tr>
  </thead>
  <form action="/category/ml/{{$tt}}"methode="post" >
  <tbody>
    <tr>
      
      <td>
        {{ $tabbe[0]->qst}} 
      </td>
     
      <td> <input type="number"   required  name="qst1"></td>
    </tr>
    <tr>
      
      <td>{{ $tabbe[1]->qst}} </td>
     
      <td><input type="checkbox" id="genre" name="qst2" value="male">
  <label > male</label><br>
  <input type="checkbox" id="genre" name="qst2" value="Female">
  <label > Female</label><br></td>
    </tr>
    <tr>

      <td>{{ $tabbe[2]->qst}} </td>
      
      <td><input type="checkbox" id="cp1" name="qst3" value=1">
  <label for="vehicle1"> typical angina</label><br>
  <input type="checkbox" id="cp" name="qst3" value="2">
  <label for="vehicle2"> atypical angina</label><br>
  <input type="checkbox" id="cp" name="qst3" value="3">
  <label for="vehicle1"> non-anginal pain</label><br>
  
  <input type="checkbox" id="cp" name="qst2" value="4">
  <label for="vehicle1"> asymptomatic</label><br></td>
    </tr>
   
   <tr>
     
     <td>{{ $tabbe[3]->qst}} </td>
     
     <td> <input type="number"   required  name="qst3"></td>
   </tr>
   <tr>
     
     <td>{{ $tabbe[4]->qst}} </td>
     
     <td> <input type="number"   required  name="qst4"></td>
   </tr>
   <tr>
     
     <td>{{ $tabbe[5]->qst}} </td>
     
     <td> <input type="number"   required  name="qst5"></td>
   </tr>
   <tr>
     <td>{{ $tabbe[6]->qst}} </td>
     
     <td><input type="checkbox" id="qst61" name="qst6" value=0">
  <label > normal</label><br>
  <input type="checkbox" id="qst62" name="qst6" value="1">
  <label > having ST-T wave abnormality</label><br>
  <input type="checkbox" id="qst63" name="qst6" value="2">
  <label > left ventricular hypertrophy</label><br
   </td>
   <tr>
     
     <td>{{ $tabbe[7]->qst}} </td>
     
     <td> <input type="number"   required  name="qst7"></td>
   </tr>
   <tr>
     
     <td>{{ $tabbe[8]->qst}} </td>
     
     <td><input type="checkbox" id="qst81" name="qst8" value=1">
  <label > Yes</label><br>
  <input type="checkbox" id="qst82" name="qst8" value="0">
  <label > No</label><br></td>
   </tr>
   <tr>
     
     <td>{{ $tabbe[9]->qst}} </td>
     
     <td> <input type="number" step="0.01"   required  name="qst9"></td>
   </tr>
   <tr>
     
     <td>{{ $tabbe[10]->qst}} </td>
     
     <td><input type="checkbox" id="qst10" name="qst10" value="1">
  <label > upsloping</label><br>
  <input type="checkbox" id="qst10" name="qst10" value="2">
  <label > flat</label><br>
  <input type="checkbox" id="qst10" name="qst10" value="3">
  <label > downsloping</label><br
    </td>
   </tr>
   <tr>
     
     <td>{{ $tabbe[11]->qst}} </td>
     
     <td><span class="cb-div" style="width: 33% ;display:block;float: left;"> <input type="checkbox" id="qst11" name="qst11" value="0">
     
  <label > 0</label>
  </span>
<input type="checkbox" id="qst10" name="qst11" value="1">

  <label > 1</label> <br>
  <span class="cb-div" style="width: 33% ;display:block;float: left;">
  <input type="checkbox" id="qst10" name="qst11" value="2">
<label > 2</label></span>
  
  <input type="checkbox" id="qst10" name="qst11" value="3">
  <label > 3</label><br
    </td>
   </tr>
   <tr>
     
     <td>{{ $tabbe[12]->qst}} </td>
     
     <td><input type="checkbox" id="qst12" name="qst12" value="0">
  <label > No</label><br>
  <input type="checkbox" id="qst12" name="qst12" value="1">
  <label > Yes</label><br></td>
   </tr>
   <tr>
     
     <td> </td>
     
     <td><button type="submit" class="btn btn-md btn-primary">>submit</button></td>
     <td> </td>
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

</html>