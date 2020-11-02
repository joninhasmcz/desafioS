<DOCTYPE html>
<html lang="en">
<head>
    <title> Criar </title>
    <meta charset="utf-8">    
    
    <style>       
    </style>
</head>
<body>
    <h1> Mostrando Pescadores</h1>
    
    @foreach ($pescadores as $p)
        <p>Este é o Pescador {{ $p->nome}}, Cpf {{ $p->cpf}}, número de Telefone {{$p->telefone}} e que mora no Endereço {{$p->endereco}}. </p>
    @endforeach

    @include 


</body>
</html>