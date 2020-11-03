<DOCTYPE html>
<html lang="en">
<head>
    <title> Pescaria </title>
    <meta charset="utf-8">       
    
</head>
<body>
    <h1> Opções Para Pescaria </h1>
    <nav id="principal">
        <ul>
            <li>
                <a href="{{Route('mostrarPescarias')}}">
                    <h3> Mostrar Pescarias </h3>
                </a>
            </li>
            <li>
                <a href="{{Route('criarPescarias')}}">
                    <h3> Criar Uma Pescaria </h3>
                </a>
            </li>
            <li>
                <a href="{{Route('editarPescarias')}}">
                    <h3> Editar Uma Pescaria </h3>
                </a>
            </li>
            <li>
                <a href="{{Route('deletarPescarias')}}">
                    <h3> Deletar Uma Pescaria </h3>
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
