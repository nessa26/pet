<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
</head>
<body>
    <main>
        <form action="{{Route('pet.put',$pet)}}" method="post">
            @csrf
            @method('put')
            <div>
                <div>
                    <label for="">Nombre usuario</label>
                    <input type="text" name="user" id="user" value="{{$pet->name_user}}">
                </div>
                <div>
                    <label for="">Número celular</label>
                    <input type="text" name="iphone" id="iphone" value="{{$pet->cell_phone}}">
                </div>
            </div>
            <div>
                <div>
                    <label for="">Nombre mascota</label>
                    <input type="text" name="pet" id="pet" value="{{$pet->pet_name}}">
                </div>
                <div>
                    <label for="">Codigo mascota</label>
                    <input type="text" name="microchip" id="microchip" value="{{$pet->microchip}}">
                </div> 
            </div>
            <div>
                <div>
                    <label for="">Edad</label>
                    <input type="text" name="age" id="age" value="{{$pet->age}}">
                </div>
                <div>
                    <label for="">Peso</label>
                    <input type="text" name="weight" id="weight" value="{{$pet->weight}}">
                </div>
                <div>
                    <label for="">Estatura</label>
                    <input type="text" name="height" id="height" value="{{$pet->height}}">
                </div>
            </div>
            <div>
                <div>
                    <label for="">raza</label>
                    <input type="text" name="race" id="race"  value="{{$pet->race}}">
                </div>
                <div>
                    <label for="">Enfermedad</label>
                    <input type="text" name="illness" id="illness" value="{{$pet->illness}}">
                </div>
            </div>
            <div>
                <button type= "submit" id="update">Guardar</button>
            </div>
        </form>
    </main>
</body>
</html>