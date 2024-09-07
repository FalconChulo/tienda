<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="display: flex; justify-content: center; align-items: center; ">

    <div class="card" style=" box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; width: 40rem; height: 20rem;">
        
    <div class="card-header" style= "display: flex; justify-content:space-between;">
        <h1>agregar articulo</h1>

        <a href="{{route('crud.create')}}">
            <button class="btn btn-light fw-light" style="margin-top: 10px;" >regresar</button>
        </a>
    </div>

    <div class="card-body" style="display: flex; flex-direction:column; justify-content:space-between">
        
            <form action="{{route('crud.storeProducto')}}" method="post">
                {{csrf_field()}}
                <div class="form-group;" style="display: flex; flex-direction:column; justify-content:space-between;">
                    <input  class='form-control' name='articulo' type="text" placeholder="nombre del articulo" style="margin:10px;" required>
                    <input min="1" class='form-control' name='precio' type="number" placeholder="precio del articulo" style="margin:10px;" required>
                    
                </div>
                <div style="padding:40px; display: flex; flex-direction:column; justify-content:space-between;" >
                    <button class="btn btn-secondary" type='submit'>guardar</button>
                </div>
            </form>
        
    </div>
    </div>
</body>
</html>