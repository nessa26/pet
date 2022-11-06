@extends ('layouts.core_template')
@section ('content')
<main>
        <form action="{{Route('pet.put',$pet)}}" method="post" >
        <h1 class="text-center mb-3 fw-bold">FORMULARIO</h1>
        <h4 class="text-center mb-3 text-success fs-6 fw-lighter">Actualizar datos de la mascota</h4>
            @csrf
            @method('put')
                <div class="mb-2">
                    <label for="" class="col-form-label">Nombre usuario</label>
                    <input class="form-control" type="text" name="user" id="user" value="{{$pet->name_user}}">
                </div>
                <div class="mb-2">
                    <label for="" class="col-form-label">Número celular</label>
                    <input class="form-control" type="text" name="iphone" id="iphone" value="{{$pet->cell_phone}}">
                </div>
            
            
                <div class="mb-2">
                    <label for="" class="col-form-label">Nombre mascota</label>
                    <input class="form-control" type="text" name="pet" id="pet" value="{{$pet->pet_name}}">
                </div>
                <div class="mb-2">
                    <label for="" class="col-form-label">Codigo mascota</label>
                    <input class="form-control" type="text" name="microchip" id="microchip" value="{{$pet->microchip}}">
                </div> 
            
            
                <div class="mb-2">
                    <label for="" class="col-form-label">Edad</label>
                    <input class="form-control" type="text" name="age" id="age" value="{{$pet->age}}">
                </div>
                <div class="mb-2">
                    <label for="" class="col-form-label">Peso</label>
                    <input class="form-control" type="text" name="weight" id="weight" value="{{$pet->weight}}">
                </div>
                <div class="mb-2">
                    <label for="" class="col-form-label">Estatura</label>
                    <input class="form-control" type="text" name="height" id="height" value="{{$pet->height}}">
                </div>
            
            
                <div class="mb-2">
                    <label for="" class="col-form-label">raza</label>
                    <input class="form-control" type="text" name="race" id="race"  value="{{$pet->race}}">
                </div>
                <div class="mb-2">
                    <label for="" class="col-form-label">Enfermedad</label>
                    <input class="form-control" type="text" name="illness" id="illness" value="{{$pet->illness}}">
                </div>
            
            <div class="mb-2 text-center">
                <button class="btnbtn btn-success btn-lg disabled text-center" type= "submit" id="update">Guardar</button>
            </div>
        </form>
    </main>
@endsection