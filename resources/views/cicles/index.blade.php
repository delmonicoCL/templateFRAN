@extends('layouts.principal')

@section('contenido')


<div class="card mt-5 mb-3">
       <div class="card-body">
        <h5 class="card-title">Buscar</h5>
             <form action="{{action([App\Http\Controllers\CicleController::class,'index'])}}">
            <div class="form-row">
                <div class="col-1">

                    @if (old('actiuBuscar') == 'actiu')
                     
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="actiuBuscar" name="actiuBuscar" value="actiu" checked>
                        <label class="custom-control-label" for="actiuBuscar">Actiu</label>    
                    </div>


                    @else
                     
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="actiuBuscar" name="actiuBuscar" value="actiu">
                        <label class="custom-control-label" for="actiuBuscar">Actiu</label>    
                    </div>

                    @endif

                 
                </div>
                <div class="col-1">
                    <button type="submit" class="btn btn-secondary"> <i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
            </div>
            </form>
       </div>
</div>

<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Siglas</th>
        <th scope="col">Nombre</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Estado</th>
      </tr>
    </thead>
    <tbody>
     
@foreach ($cicles as $cicle)

<tr>
    <td>{{ $cicle->sigles }}</td>
    <td>{{ $cicle->nom }}</td>
    <td>{{ $cicle->descripcio }}</td>
    <td>
        
        @if ($cicle->actiu)

        <div class="custom-control custom-checkbox">

            <input type="checkbox" class="custom-control-input" id="actiu" name="actiu" value="actiu" checked>
            <label class="custom-control-label" for="actiu"></label>    

        </div>
            
        @else
        <div class="custom-control custom-checkbox">

            <input type="checkbox" class="custom-control-input" id="actiu" name="actiu" value="actiu">
            <label class="custom-control-label" for="actiu"></label>    

        </div>
        @endif
        
        {{ $cicle->actiu }}
    
    </td>

    <td>
        <form class="float-right ml-1" action="{{action([App\Http\Controllers\CicleController::class,'destroy'], ['cicle'=> $cicle->id] )}}" method="POST">
           @csrf 
           @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger"> <i class="fa fa-trash" 
                aria-hidden="true"></i> Borrar </button>
        </form>
         <form action="" class="float-right">
            <button type="submit" class="btn btn-sm btn-warning"> <i class="fa fa-edit" 
                aria-hidden="true"></i> Editar </button>
        </form>
    </td>
</tr>
   
@endforeach

    </tbody>
  </table>
    
  {{ $cicles->links() }}

<a href="{{ url('cicles/create')}}" class="btn btn-primary btn-float-afegir"><i class="fa fa-plus-circle" aria-hidden="true"></i>Nuevo Ciclo</a>


@endsection