<DOCTYPE html>
<html lang="en">
<head>
    <title> Pescados </title>
    <meta charset="utf-8">       
    
</head>
<body>
    <h1> Opções Para Pescados </h1>
    <nav id="principal">
    <ul>
        <li>
            <a href="{{Route('mostrarPescados')}}">
                <h3> Mostrar Pescados </h3>
            </a>
        </li>
        <li>
            <a href="{{Route('criarPescados')}}">
                <h3> Criar Um Pescado </h3>
            </a>
        </li>
        <li>
            <a href="{{Route('editarPescados')}}">
                <h3> Editar Um Pescado </h3>
            </a>
        </li>
        <li>
            <a href="{{Route('deletarPescados')}}">
                <h3> Deletar Um Pescado </h3>
            </a>
        </li>
        <li>
            <a href="{{Route('home')}}">
                <h3> Voltar </h3>
            </a>
        </li>
    </ul>
</nav>

</body>
</html>
