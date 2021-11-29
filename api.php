<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>relatórios região centro oeste</title>
    <style>
        h6{
            text-transform: capitalize;
        }
        h1{
            text-align:center;
            text-transform: uppercase;
            text-decoration: underline;
            color: #333;
        }
        h2{
            text-align:center;
            text-transform: uppercase;
            color: #333;
        }
        h3{
            text-align:center;
            text-transform: capitalize;
            color: green;
            font-size: 25px;
        }
        ul{
            margin-left:20px;
        }
        li{
            margin-left: 20px;
            font-size: 21px;
            font-weight: bold;
            font-style: italic;
            letter-spacing: 1.3px;
        }
        hr{
            margin-right: 60px;
        }
    </style>
</head>
<body>
    <h6>
    <span style="color:red;">obs:</span>estado do mato grosso do sul <span style="color:lightgreen;">Pagina:20</span>
    </h6>
    <h6>
    <span style="color:red;">obs:</span>estado do mato grosso <span style="color:lightgreen;">Pagina:25</span>
    </h6>
    <h1>relatório</h1>
    <h2>estados e municípios região centro oeste</h2>
    <h3>distrito federal</h3>
    <?php
    $url ='https://servicodados.ibge.gov.br/api/v1/localidades/estados/df/municipios';

    $results = json_decode(file_get_contents($url));
    
    // print_r($results);
    
    foreach($results as $cidade){
        echo '<ul>';
        echo '<li>'.$cidade->nome.'</li><br>';
        echo '<hr>';
        echo '</ul>';
    }
    ?>
 
    <h3>goiás</h3>
    <?php
    $url ='https://servicodados.ibge.gov.br/api/v1/localidades/estados/go/municipios';

    $results = json_decode(file_get_contents($url));
    
    // print_r($results);
    
    foreach($results as $cidade){
        echo '<ul>';
        echo '<li>'.$cidade->nome.'</li><br>';
        echo '<hr>';
        echo '</ul>';
    }
    ?>
    
    <h3>mato grosso do sul</h3>
    <?php
    $url ='https://servicodados.ibge.gov.br/api/v1/localidades/estados/ms/municipios';

    $results = json_decode(file_get_contents($url));
    
    // print_r($results);
    
    foreach($results as $cidade){
        echo '<ul>';
        echo '<li>'.$cidade->nome.'</li><br>';
        echo '<hr>';
        echo '</ul>';
    }
    ?>
    <h3>mato grosso</h3>
    <?php
    $url ='https://servicodados.ibge.gov.br/api/v1/localidades/estados/mt/municipios';

    $results = json_decode(file_get_contents($url));
    
    // print_r($results);
    
    foreach($results as $cidade){
        echo '<ul>';
        echo '<li>'.$cidade->nome.'</li><br>';
        echo '<hr>';
        echo '</ul>';
    }
    ?>
</body>
</html>



