<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action=" {{  route('usuario.update', $user->id) }} " method="POST">
        @csrf
        <div>
            <input type="text" placeholder="Nombre" name="name" value="{{ $user->name }}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Actualizar</button>
    </form>

</body>

</html>
