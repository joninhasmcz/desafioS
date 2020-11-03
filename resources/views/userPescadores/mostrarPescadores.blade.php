<DOCTYPE html>
<html lang="en">
<head>
    <title> Mostrar </title>
    <meta charset="utf-8">    
    
    <style>       
    </style>
</head>
<body>
    <h1> Mostrando Pescadores</h1>
    
    @foreach ($pescadores as $p)
        <p>De Id: {{$p->id}} este é o Pescador: {{ $p->nome}}, Cpf: {{ $p->cpf}}, número de Telefone: {{$p->telefone}} e que mora no Endereço: {{$p->endereco}}. </p>
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