<DOCTYPE html>
<html lang="en">
<head>
    <title> Deletar </title>
    <meta charset="utf-8">    
    
</head>
<body>
    <h1> Deletar Um Pescado </h1>
    <section id = "view-form">
        <form action="{{Route('deletarIdPescados')}}">            
            @include('components.input', ['label' => 'Id Escolhido', 'input' => 'id', 'attributes' => ['placeholder' => 'Nome']])
            @include('components.submit', ['input' => 'Enviar'])         
        </form>
    </section>
</body>
</html>