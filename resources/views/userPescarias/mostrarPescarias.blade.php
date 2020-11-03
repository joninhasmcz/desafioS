<DOCTYPE html>
<html lang="en">
<head>
    <title> Mostrar </title>
    <meta charset="utf-8">    
    
    <style>       
    </style>
</head>
<body>
    <h1> Mostrando Pescarias</h1>
    
    @foreach ($pescarias as $p)
        <p>De Id: {{$p->id}} esta é a Pescaria Localizada em: {{ $p->localizacao}}, na Data: {{ $p->dataPescaria}}</p>
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