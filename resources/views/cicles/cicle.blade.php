@extends('layouts.principal')

@section('contenido')
    
@include('partials.mensajes')


<div class="card mt-2">
    <div class="card-body">
        <h5 class="card-title font-weight-bold">Cicle</h5>
        <form action="">

            <div class="form-group row">
                <label for="sigles" class="col-sm-1 col-form-label">Sigles</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="sigles" name="sigles" autofocus>
                </div>
            </div>
            <div class="form-group row">
                <label for="nom" class="col-sm-1 col-form-label">Nom</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="nom" name="nom">
                </div>
            </div>
            <div class="form-group row">
                <label for="sigles" class="col-sm-1 col-form-label">Descripcio</label>
                <div class="col-sm-11">
                    <textarea name="descripcio" id="descripcio" rows="5" class="form-control"></textarea>
                </div>
            </div>
             <div class="form-group row">
                <label for="actiu" class="col-sm-1 col-form-label">Actiu</label>
                <div class="col-sm-11">

                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="actiu" name="actiu" value="actiu">
                        <label class="custom-control-label" for="actiu"></label>
                    </div>


                </div>
            </div>





</form>




    </div>




</div>




























@endsection