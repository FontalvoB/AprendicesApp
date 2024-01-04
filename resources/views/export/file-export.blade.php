<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>export</title>
</head>
<body>

    <div class="container overflow-hidden">
        <div class="row gx-5">
          <div class="col">
           <div class="p-3 border bg-light">
               <img src="{{asset('assets/images/sena.ico')}}" alt="">
           </div>
          </div>
          <div class="col">
            <div class="p-3 border bg-light">Custom column padding</div>
          </div>
        </div>
      </div>








    <div class="container">

       <label for="Id"> Identificación</label>
       <input type="text" name="id_aprendiz" id="id_aprendiz" value="{{ $aprendices->id_aprendiz}}"required>
       <br>

      
        <label for="Nombres"> Nombres</label>
        <input type="text" name="Nombres" id="Nombres"value="{{ $aprendices->nombres}}"required>
        <br>
        
        <label for="Apellidos"> Apellidos </label>
        <input type="text" name="Apellidos" id="Apellidos"value="{{ $aprendices->apellidos}}"required>
        <br>
        
        <label for="Email"> Email</label>
        <input type="text" name="Email" id="Email"value="{{ $aprendices->email}}"required>
        <br>
        
        <label for="Celular_1"> Celular 1</label>
        <input type="text" name="Celular_1" id="Celular_1"value="{{ $aprendices->celular_1}}"required>
        <br>

        <label for="Celular_2"> Celular 2</label>
        <input type="text" name="Celular_2" id="Celular_2"value="{{ $aprendices->celular_2}}"required>
        <br>
        
        <label for="Ficha"> Ficha</label>
        <input type="text" name="Ficha" id="Ficha"value="{{ $aprendices->ficha_id}}"required>
        <br>
        
        <label for="Foto"> Foto</label>
        {{ $aprendices->foto}}
        <input type="file" name="Foto"  id="Foto"required>
        <br>
        
        
        <label for="Observacion"> Observacion</label>
        <input type="text" name="Observacion" id="Observacion"value="{{ $aprendices->observacion}}"required>
        <br>
        
        <label for="Calificaciones"> Calificaciones</label>
        <input type="text" name="Calificaciones" id="Calificaciones"value="{{ $aprendices->calificaciones}}"required>
        <br>

        <br>
        
    </div>

<a href="/download-pdf" class="btn btn-danger">Imprimir</a>        
</body>
</html>