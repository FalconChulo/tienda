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
        <div class="card-header" style="display: flex; justify-content: space-between;">
            <h1>editar</h1>

            <a href="{{route('crud.create')}}">
                <button class="btn btn-light fw-light" style="margin-top: 10px;" >regresar</button>
            </a>
        </div>

        <div class="card-body" style="display: flex; flex-direction:column; justify-content:space-between">
    
            <form action ="{{route('crud.storeUpdateProducto', $produ->id)}}" method="post">
                {{csrf_field()}}
                {{-- <input type="hidden" name="id" value="{{$user->id}}"/> --}}
                <div class="row" >

                    <div style="display: flex; justify-content: space-evenly;">
                        <div class="col-3">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input class="form-control" type="text" id="nombre" name="nombre" value="{{$produ->articulo}}" required/>
                            </div>
                        </div>
    
                        <div class="col-3">
                            <div class="form-group">
                                <label for="precio">Precio</label>
                                <input min="1" max="100" class="form-control" type="number" id="precio" name="precio" value="{{$produ->precio}}" required/>
                            </div>
                        </div>
                    </div>


                   {{--  @foreach($produs as $item2)
                        @php
                            if($item2->id==$user->articulo_id){
                                $nombreArticulo=$item2->articulo;
                            }
                            
                        @endphp
                    @endforeach

                    <div class="col-3">
                        <div class="form-group">
                            <label for="producto">Producto</label>
                         
                            <select class="form-select" id="producto" name="producto">
                               
                                @foreach($produs as $item)
                                    <option value="{{$item->id}}" @if($item->id==$user->articulo_id) selected @endif>{{$item->articulo}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    

                    <div class="col-3">
                        <div class="form-group">
                            <label for="cantidad">cantidad</label>
                            <input min="1" name="cantidad" class="form-control" type="number" id="cantidad" value="{{$user->cantidad}}"/>
                        </div>
                    </div>
                </div> --}}
                
                <div style="padding:40px; display: flex; flex-direction:column; justify-content:space-between;">
                    <button class="btn btn-secondary" type="submit">enviar</button>
                </div>
            </form>

            {{-- h1>{{$user}}</h1>
            <h1>{{$produs}}</h1> --}}
        </div>

        
    </div>
</body>
</html>