<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="{{ route('usuario') }}" method="POST">
        @csrf
        <div>
            <input type="text" placeholder="Nombre" name="name" value="{{ old('name') }}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <input type="text" placeholder="Correo" name="email" value="{{ old('email') }}">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <input type="text" placeholder="Confirme su correo" name="email_confirmation">
        </div>
        <div>
            <input type="password" placeholder="Contraseña" name="password" value="{{ old('password') }}">
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <input type="password" placeholder="Confirme su contraseña" name="password_confirmation">
        </div>
        <button type="submit">Subir</button>
    </form>

    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

</body>

</html>
