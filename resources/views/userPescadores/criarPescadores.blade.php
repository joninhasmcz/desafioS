<DOCTYPE html>
<html lang="en">
<head>
    <title> Criar </title>
    <meta charset="utf-8">    
    
</head>
<body>
    <h1> Criar Um Pescador </h1>
    <section id = "view-form">
        <form action="{{Route('inserirPescador')}}">     
            
            @include('components.input', ['label' => 'NOME', 'input' => 'nome', 'attributes' => ['placeholder' => 'Nome']])
            @include('components.input', ['label' => 'CPF', 'input' => 'cpf', 'attributes' => ['placeholder' => 'Cpf']])
            @include('components.input', ['label' => 'TELEFONE', 'input' => 'telefone', 'attributes' => ['placeholder' => 'Telefone']])
            @include('components.input', ['label' => 'ENDEREÇO', 'input' => 'endereco', 'attributes' => ['placeholder' => 'Endereço']])
            <!-- @include('components.file', ['label' => 'FOTO', 'input' => 'foto', 'attributes' => ['placeholder' => 'Foto']]) -->
            @include('components.submit', ['input' => 'Cadastrar'])
        </form>
            
        
    </section>
</body>
</html>