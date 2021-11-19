<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
    <form action="/reproductor/store" enctype="multipart/form-data" method="post">
        @if ($errors->any())
        <div>
            <ul>
                @foreach ( $errors->all() as $err)
                    <li>
                        {{ $err }}
                    </li>
                @endforeach
            </ul>
        </div>
        @endif
        @csrf 
    
<div>
    <input type="text" name="titulo" id="titulo" placeholder="titulo">
</div>

<div>
    <input type="text" name="autor" id="autor" placeholder="autor">
</div>

<div>
    <input type="text" name="categoria" id="categoria" placeholder="categoria">
</div>

<div>    
          
    <input type="file" value="{{ old('musica') }}" name="musica" id="musica" placeholder="musica" accept="audio">
    <span >{{ $errors->first('musica') }}</span>
</div>

<button type="submit" value="enviar"> Subir cancion</button>
    </form>
</div>



</body>
</html>