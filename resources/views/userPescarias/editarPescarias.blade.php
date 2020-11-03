<DOCTYPE html>
<html lang="en">
<head>
    <title> Editar </title>
    <meta charset="utf-8">    
    
</head>
<body>
    <h1> Editar Uma Pescaria </h1>
    <section id = "view-form">
        <form action="{{Route('editarIdPescarias')}}">            
            @include('components.input', ['label' => 'Id Escolhido', 'input' => 'id', 'attributes' => ['placeholder' => 'Nome']])
            @include('components.input', ['label' => 'LOCALIZACAO', 'input' => 'localizacao', 'attributes' => ['placeholder' => 'Localizacao']])
            @include('components.input', ['label' => 'DATA', 'input' => 'data', 'attributes' => ['placeholder' => 'Data']])
            <!-- @include('components.file', ['label' => 'FOTO', 'input' => 'foto', 'attributes' => ['placeholder' => 'Foto']]) -->
            @include('components.submit', ['input' => 'Cadastrar'])       
        </form>

    </section>
</body>
</html>