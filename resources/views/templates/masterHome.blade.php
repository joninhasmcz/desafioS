<DOCTYPE html>
<html lang="en">
<head>
    <title> homePage </title>
    <meta charset="utf-8">    
    
</head>
<body>
    <h1> Pesca Japaratinga </h1>
    <nav id="principal">
    <ul>
        <li>
            <a href="{{Route('pescadores')}}">
                <h3> Pescador </h3>
            </a>
        </li>
        <li>
            <a href="{{Route('pescados')}}">
                <h3> Pescado </h3>
            </a>
        </li>
        <li>
            <a href="{{Route('pescaria')}}">
                <h3> Pescaria </h3>
            </a>
        </li>
        <li>
            <a href="{{Route('reserva')}}">
                <h3> Campeonato de Pesca </h3>
            </a>
        </li>
        <li>
            <a href="">
                <h3> Sair </h3>
            </a>
        </li>
    </ul>
</nav>

</body>
</html>