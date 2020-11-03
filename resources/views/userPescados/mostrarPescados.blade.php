<DOCTYPE html>
<html lang="en">
<head>
    <title> Mostrar </title>
    <meta charset="utf-8">    
    
    <style>       
    </style>
</head>
<body>
    <h1> Mostrando Pescados</h1>
    
    @foreach ($pescados as $p)
        <p>De Id: {{$p->id}} este é o Peixe: {{ $p->nome}}, Massa: {{ $p->massa}}, Tamanho: {{$p->tamanho}} </p>
    @endforeach

    <ul>
        <li>
            <a href="{{Route('home')}}">
                <h3> Voltar </h3>
            </a>
        </li>
    </ul>


</body>
</html>