<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tiendita</title></title>
</head>
<body style="display: flex; justify-content: center; ">
    <div class="card" style="width: 50rem; display: flex;" >
    
        @php
            $total = 0;
        @endphp
    
        <div class="card-body" style="display: flex; flex-direction:column">
            <div >
                <a href="{{route('crud.create')}}">
                    <button class="btn btn-light">añadir articulo</button>
                </a>
            </div>
            @if($users->isEmpty())
                <h1>no tienes productos en tu lista</h1>
            @else
            <table>
                <thead>
                    <td>#</td>
                    <td>nombre</td>
                    <td>articulo</td>
                    <td>precio</td>
                    <td>cantidad</td>
                    <td>total</td>
                </thead>
                @foreach($users as $item)
                    @php
                        $id=$item->articulo_id;
                        $total=$total+$item->total;
                    @endphp
                    @foreach($produs as $item2)
                        @php
                            if($item2->id==$id){
                                $nombreArticulo=$item2->articulo;
                                $precioArticulo=$item2->precio;
                            }
                        @endphp
                    @endforeach
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->nombre}}</td>
                        <td>{{$nombreArticulo}}</td>
                        <td>{{$precioArticulo}}</td>
                        <td>{{$item->cantidad}}</td>
                        <td>{{$item->total}}</td>
                        <td>
                            {{-- <a href="{{route('', $item->id)}}" type="button">agregar a tu lista</a> --}}
                            <a href="{{route('crud.indexProducto', $item->id)}}" type="button">editar</a>
                        </td>
                        <td>
                            {{-- <a href="{{route('', $item->id)}}" type="button">agregar a tu lista</a> --}}
                            <a href="{{route('crud.delete', $item->id)}}" type="button">eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            <p class="fw-lighter">total a pagar: {{$total}}</p>
            @endif
        </div>
    </div>
    
</body>
</html>