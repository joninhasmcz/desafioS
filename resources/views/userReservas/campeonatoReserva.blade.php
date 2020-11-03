<DOCTYPE html>
<html lang="en">
<head>
    <title> Criar </title>
    <meta charset="utf-8">    
    
</head>
<body>
    <h1> Inserir Dados do Campeonato </h1>
    <section id = "view-form">
        <form action="{{Route('reservarId')}}">     
            
            @include('components.input', ['label' => 'Id Pescaria', 'input' => 'id_pescaria', 'attributes' => ['placeholder' => 'Pescaria']])
            @include('components.input', ['label' => 'Id Pescado', 'input' => 'id_pescado', 'attributes' => ['placeholder' => 'Pescado']])
            @include('components.input', ['label' => 'Id Pescador', 'input' => 'id_pescador', 'attributes' => ['placeholder' => 'Pescador']])
            <!-- @include('components.file', ['label' => 'FOTO', 'input' => 'foto', 'attributes' => ['placeholder' => 'Foto']]) -->
            @include('components.submit', ['input' => 'Cadastrar'])
        </form>
        <ul>
            <li>
                <a href="{{Route('home')}}">
                    <h3> Voltar </h3>
                </a>
            </li>
        </ul>    
        
    </section>
</body>
</html>