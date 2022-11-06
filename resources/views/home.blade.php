<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Home</title>
</head>
<body>
    <header>
        <h1>MASCOTAS</h1>
        <h3>La lealtad de un animal no tiene límites</h3>
    </header>
    <main>
        <div>
            <div>
                <section>
                    <a href="{{Route ('pet.register')}}">Crear</a>
                </section>
            </div>
            <div>
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre Usuario</th>
                            <th>Número</th>
                            <th>Nombre mascota</th>
                            <th>Codigo mascosta</th>
                            <th>Edad</th>
                            <th>Peso</th>
                            <th>Estatura</th>
                            <th>Raza</th>
                            <th>Enfermedad</th>
                            <th>Actualizar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pets as $pet)
                            <tr>
                                <td>{{$pet->id}}</td>
                                <td>{{$pet->name_user}}</td>
                                <td>{{$pet->cell_phone}}</td>
                                <td>{{$pet->pet_name}}</td>
                                <td>{{$pet->microchip}}</td>
                                <td>{{$pet->age}}</td>
                                <td>{{$pet->weight}}</td>
                                <td>{{$pet->height}}</td>
                                <td>{{$pet->race}}</td>
                                <td>{{$pet->illness}}</td>
                                <td>
                                    <form action="{{Route('pet.update',$pet)}}" method="get">
                                        @csrf 
                                        @method('update')
                                        <button type="submit">Actualizar</button>
                                    </form> 
                                </td>
                                <td>
                                    <form action="{{Route ('pet.delete',$pet)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <footer>
        <h4>MASCOTAS</h4>
        <div>
        </div>
    </footer>
</body>
</html>