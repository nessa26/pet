<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <main>
        <form action="{{Route('pet.store')}}" method="post">
            @csrf
            <h1>Registra a tu mascota</h1>
            <div>
                <div>
                    <label for="">Nombre usuario</label>
                    <input type="text" name="name_user" id="name_user">
                </div>
                <div>
                    <label for="">Número celular</label>
                    <input type="text" name="cell_phone" id="cell_phone">
                </div>
            </div>
            <div>
                <div>
                    <label for="">Tipo de mascota</label>
                        <input type="text" name="pet_type" id="pet_type">
                    </div>
                <div>
                    <label for="">Nombre mascota</label>
                    <input type="text" name="pet_name" id="pet_name">
                </div>
                <div>
                    <label for="">Codigo mascota</label>
                    <input type="text" name="microchip" id="microchip">
                </div> 
            </div>
            <div>
                <div>
                    <label for="">Edad</label>
                    <input type="text" name="age" id="age">
                </div>
                <div>
                    <label for="">Peso</label>
                    <input type="text" name="weight" id="weight">
                </div>
                <div>
                    <label for="">Estatura</label>
                    <input type="text" name="height" id="height">
                </div>
            </div>
            <div>
                <div>
                    <label for="">raza</label>
                    <input type="text" name="race" id="race">
                </div>
                <div>
                    <label for="">Enfermedad</label>
                    <input type="text" name="illness" id="illness">
                </div>
            </div>
            <div>
                <button type= "submit">Guardar</button>
            </div>
        </form>
        @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </main>
</body>
</html>