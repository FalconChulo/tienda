<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>articulos</title>
</head>
<body style="display: flex; justify-content: center; align-items: center; ">

    <div class="card" style=" box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; width: 40rem; height: 40rem;">

    <div class="card-header" style= "display: flex; justify-content:space-between">
        <a href="{{route('crud.createProducto')}}">
            <button class="btn btn-light">agregar articulo</button>
        </a>

        <a href="{{route('crud.index')}}">
            <button class="btn btn-light">ir al inicio</button>
        </a>
    </div>
    
    <div class="card-body" style="display: flex; flex-direction:column; justify-content:space-between;">
        @if($produs->isEmpty())
            <h1>no hay productos</h1>
            @else
            <table class="table">
                <thead>
                    <td>#</td>
                    <td>id</td>
                    <td>nombre</td>
                    <td>precio</td>
                </thead>

                @foreach($produs as $item)
                <tr>
                    <td>{{$loop->iteration}}</th>
                    <td>{{$item->id}}</th>
                    <td>{{$item->articulo}}</th>
                    <td>{{$item->precio}}</th>
                    <td>
                        {{-- <a href="{{route('', $item->id)}}" type="button">agregar a tu lista</a> --}}
                        <a class="btn btn-secondary" href="{{route('crud.indexProducto', $item->id)}}" type="button">agregar a tu lista</a>
                    </td>
                    <td>
                        {{-- <a href="{{route('', $item->id)}}" type="button">agregar a tu lista</a> --}}
                        <a class="btn btn-danger" href="{{route('crud.deleteProducto', $item->id)}}" type="button">eliminar</a>
                    </td>
                </tr>
                @endforeach
            </table>

            
        @endif
        
    </div>
    </div>
</body>
</html>