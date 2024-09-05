<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>articulos</title>
</head>
<body>
    {{-- <h1>funciona? {{$produs[1]}}</h1> --}}
    <a href="{{route('crud.createProducto')}}">
        <button>agregar articulo</button>
    </a>
    
    <div>
        @if($produs->isEmpty())
            <h1>no hay productos</h1>
            @else
            <table>
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
                        <a href="{{route('crud.indexProducto', $item->id)}}" type="button">agregar a tu lista</a>
                    </td>
                    <td>
                        {{-- <a href="{{route('', $item->id)}}" type="button">agregar a tu lista</a> --}}
                        <a href="{{route('crud.deleteProducto', $item->id)}}" type="button">eliminar</a>
                    </td>
                </tr>
                @endforeach
            </table>

            
        @endif
        
    </div>
</body>
</html>