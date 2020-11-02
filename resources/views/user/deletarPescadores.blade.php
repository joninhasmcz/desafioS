<DOCTYPE html>
<html lang="en">
<head>
    <title> Deletar </title>
    <meta charset="utf-8">    
    
    <style>
        form.form-padrao {float left; width: 80%;}
        form.form-padrao label {float: left; width: 49%; height: 60px; padding: 7px 15px; border 1px solid white; background: white; border-radius: 5px; margin -bottom: 20px;}
        form.form-padrao label span { float: left; width: 100%; font: 400 .75em 'Arial'; color: white; padding-bottom: 5px;}
        form.form-padrao label input { float: left; width: 100%; color: black; font: 400 1.25em 'Arial' }
        form.form-padrao label.submit { background: black; border-color: black}
        form.form-padrao label.submit input { font-weight: 800; text-transform: uppercase; line-height: 50 px; color: white}

        
    </style>
</head>
<body>
    <h1> Deletar Um Pescador </h1>
    <section id = "view-form">
        {!! Form::open(['route' => 'pescadoresController@pegarDados','method' => 'post', 'class' => 'form-padrao']) !!}
            
            @include('components.input', ['label' => 'Id Escolhido', 'input' => 'id', 'attributes' => ['placeholder' => 'Nome']])
            @include('components.submit', ['input' => 'Enviar'])         
        {!! Form::close() !!}
    </section>
</body>
</html>