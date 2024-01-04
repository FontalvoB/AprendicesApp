<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>export</title>
<style>
  p.round3 {
    border: 2px solid rgb(72, 72, 72);
    border-radius: 12px;
    padding: 5px;
    text-align: center;
  }
  
  </style>
</head>
<body>

<body>
  <div class="p-3 border bg-light">
<!--    <img src="{{--asset('assets/images/sena.jpg')--}}" alt=""
    width
    ="130" 
    height
    ="100"-->
    <p class="round3">HOJA DE VIDA APRENDIZ</p>
</div>


<div class="card text-center">
  <div class="card-header">
    FOTO
  </div>
  <div class="card-body">
    <img src="{{ asset("storage/$aprendices->foto")}}"  alt="" width="200" height="250" alt=""
    width
    ="130" 
    height
    ="100">
  </div>
  <div class="card-footer text-muted">
    INFORMACIÓN PERSONAL
  </div>
</div>
   

<div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">NOMBRES: {{ $aprendices->nombres}}</h6>
        
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">APELLIDOS: {{ $aprendices->apellidos}} </h6>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">IDENTIFICACION: {{ $aprendices->id_aprendiz}}</h6>
        
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">EMAIL: {{ $aprendices->email}}</h6>
        
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">CELULAR 1: {{ $aprendices->celular_1}}</h6>
        
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h6 class="card-title">CELULAR 2: {{ $aprendices->celular_2}}</h6>
        
      </div>
    </div>
  </div>
</div>
<br>
<div class="card text-center">
<div class="card-footer text-muted">
  INFORMACIÓN ACEDEMICA
</div>
</div>

<br>
<table class="table">

    <tr>
      <th scope="col">FICHA: {{ $aprendices->ficha_id}} </th>
      <th scope="col">CALIFICACIONES: {{ $aprendices->calificaciones}}</th>
    </tr>
<br>
  <tr> 
    <th scope="col"> OBSERVACION:  {{ $aprendices->observacion}}</td>
  </tr>
</table>


        <br>

    </div>
</body>
</html>
