<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SPOTFLYG</title>
</head>
<body>
    <a href="/reproductor/create" >AÑADIR CANCION</a>
    @if($ms=Session::get('success'))

    <div class="alert alert-succes">
        <strong>{{ $ms }}</strong>
    </div>

    @endif
    
    
    <div class="row">
        @foreach ($lista as $item )
          
        <div>        
          <span>  {{ $item ->titulo}}</span>
        </div>
    
        <div>        
            <span>  {{ $item ->autor}}</span>
          </div>
    
        <div>        
            <span>  {{ $item ->categoria }}</span>
        </div>

        <div>
            <audio src="{{ $item ->musica }}" controls></audio>
        </div>
    
        

        <br>
            
        @endforeach
    </div>
    

    

</body>
</html>