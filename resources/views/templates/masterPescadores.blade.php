<DOCTYPE html>
<html lang="en">
<head>
    <title> Pescadores </title>
    <meta charset="utf-8">    
    
</head>
<body>
    <h1> Opções Para Pescadores </h1>
    <nav id="principal">
    <ul>
        <li>
            <a href="{{Route('mostrarPescador')}}">
                <h3> Mostrar Pescadores </h3>
            </a>
        </li>
        <li>
            <a href="{{Route('criarPescador')}}r">
                <h3> Criar Um Pescador </h3>
            </a>
        </li>
        <li>
            <a href="">
                <h3> Editar Um Pescador </h3>
            </a>
        </li>
        <li>
            <a href="">
                <h3> Deletar Um Pescador </h3>
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