<DOCTYPE html>
<html lang="en">
<head>
    <title> Campeonato </title>
    <meta charset="utf-8">    
    
</head>
<body>
    <h1> Campeonato de Pesca Japaratinga </h1>
        <nav id="principal">
            <ul>
                <li>
                    <a href="{{Route('reservarInitial')}}">
                        <h3> Adicionar os IDs do Campeonato / Pescar </h3>
                    </a>
                </li>
                <li>
                    <a href="{{Route('classificarPeso')}}">
                        <h3> Classificações da Pesca Peso </h3>
                    </a>
                </li>
                <li>
                    <a href="{{Route('classificarQuantidade')}}">
                        <h3> Classificações da Pesca Quantidade </h3>
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