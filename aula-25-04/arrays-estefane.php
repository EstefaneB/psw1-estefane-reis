<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Arrays revisao</h1>
   
    <?php
      echo '<h2> arrays com lista ordenada - explicito </h2>';

      $listaordenada = array('carro', 'bike', 'moto'); 
                     //array

      echo '<pre>'; //"pre é teg do html para utilizamos (imprimimos)" é a mesma coisa que uma divi
       print_r($listaordenada);
      echo '</pre>';

      echo '<h2> adicionar itens ao arrays</h2>';

      $listaordenada [] = 'aviao';//adiciona novas chaves
      $listaordenada [] = 'onibus';

      echo '<pre>'; //"pre é teg do html para utilizamos (imprimimos)"
        print_r($listaordenada);
      echo '</pre>';

      echo '<h2> alterar itens ao arrays</h2>';

      $listaordenada [0] = 'patinete';

      echo '<pre>'; //"pre é teg do html para utilizamos (imprimimos)"
        print_r($listaordenada);
      echo '</pre>';

      echo '<h2> arrays com lista ordenada - implicito </h2>';

      $listaordenada = [
        'carro',
        'bike',
        'mula'
      ];

      echo '<pre>'; //"pre é teg do html para utilizamos (imprimimos)"
        print_r($listaordenada);
      echo '</pre>';

      echo '<h2> arrays associativos =chave => valor  </h2>';

       $array = [
        0 => 'sapato',
        1 => 'moletom',
        2 => 'blusa'
       ];

       echo '<pre>'; //"pre é teg do html para utilizamos (imprimimos)"
        print_r($array);
      echo '</pre>';

      echo '<h2> arrays - impressão de um valor </h2>';

      echo '<pre>'; //"pre é teg do html para utilizamos (imprimimos)"
        print_r($array[0]);
      echo '</pre>';

      echo '<h2> alterar itens ao arrays</h2>';

      $array [0] = 'sapato grande';

      echo '<pre>'; //"pre é teg do html para utilizamos (imprimimos)"
        print_r($array);
      echo '</pre>';

      echo '<h2> adicionar uns itens ao arrays</h2>';

      $array [18 ] = 'social';
      $array [ ] = 'calça';
      $array ['cpf' ] = '111232871547821';

       echo '<pre>'; //"pre é teg do html para utilizamos (imprimimos)"
        print_r($array);
      echo '</pre>';

      echo '<h2> arrays com varios tipos </h2>';
       
      $multitipo = [
        'iddade' => 27,
        'data' => ' 12/22/34',
        2 => 'blusa'
      ];
      echo '<pre>'; //"pre é teg do html para utilizamos (imprimimos)"
        print_r($multitipo);
      echo '</pre>';

      echo '<h2> arrays multidimesional-com multiplos array </h2>';
      $mutidimesimal = [

         'aluno'=> [
             [ 
            'id'=> 1,
            'nome' => 'zeca',
            'endereco' => 'rua x'
            ],

           [ 
                'id'=> 1,
                'nome' => 'zeca',
                'endereco' => 'rua x'
                ]

         ],
           'professores' => [
            'mat' => '3432432',
            'nome' => 'antoi',
            'idade' => 34

           ]
        ];

        echo '<pre>'; //"pre é teg do html para utilizamos (imprimimos)"
           print_r($mutidimesimal);
        echo '</pre>';

        echo '<pre>'; //"pre é teg do html para utilizamos (imprimimos)"
        print_r($mutidimesimal ['aluno'][0]);
        echo '</pre>';

        echo '<pre>'; //"pre é teg do html para utilizamos (imprimimos)"
        print_r($mutidimesimal['aluno'] [0] ['nome']);
        echo '</pre>';




    
    
    ?>
</body>
</html>