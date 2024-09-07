<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tiendita</title></title>
</head>
<body style="display: flex; justify-content: center; align-items: center; ">
    
    <div>
        <div class="card" style=" box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; width: 40rem; height: 40rem;" >
    
        @php
            $total = 0;
        @endphp

        <div class="card-header">
            <a href="{{route('crud.create')}}">
                <button class="btn btn-light">añadir articulo</button>
            </a>
        </div>
    
        <div class="card-body" style="display: flex; flex-direction:column; justify-content:space-between">
            
            @if($users->isEmpty())
                <h1>no tienes productos en tu lista</h1>
            @else
            {{-- <p>{{$produs}}</p> --}}
            <table class="table">
                <thead>
                    <td scope="col">#</td>
                    <td scope="col">nombre</td>
                    <td scope="col">articulo</td>
                    <td scope="col">precio</td>
                    <td scope="col">cantidad</td>
                    <td scope="col">total</td>
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
                            <a class="btn btn-secondary" href="{{route('crud.update', $item->id)}}" type="button">editar</a>
                        </td>
                        <td>
                            {{-- <a href="{{route('', $item->id)}}" type="button">agregar a tu lista</a> --}}
                            <a class="btn btn-danger" href="{{route('crud.delete', $item->id)}}" type="button">eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            <p class="fw-lighter">total a pagar: {{$total}}</p>
            @endif
        </div>
    </div>
    </div>
    
</body>
</html>