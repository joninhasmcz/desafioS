<DOCTYPE html>
<html lang="en">
<head>
    <title> Criar </title>
    <meta charset="utf-8">    
    
</head>
<body>
    <h1> Criar Um Pescado </h1>
    <section id = "view-form">
        <form action="{{Route('inserirPescados')}}">     
            
            @include('components.input', ['label' => 'NOME', 'input' => 'nome', 'attributes' => ['placeholder' => 'Nome']])
            @include('components.input', ['label' => 'MASSA', 'input' => 'massa', 'attributes' => ['placeholder' => 'Massa']])
            @include('components.input', ['label' => 'TAMANHO', 'input' => 'tamanho', 'attributes' => ['placeholder' => 'Tamanho']])
            <!-- @include('components.file', ['label' => 'FOTO', 'input' => 'foto', 'attributes' => ['placeholder' => 'Foto']]) -->
            @include('components.submit', ['input' => 'Cadastrar'])
        </form>
            
        
    </section>
</body>
</html>