<html>
  <body>
    <meta charset="UTF-8">
    <form action="formulario.php"
    method="POST">
    
Numero1 :<input type="number"
    name="Numero1"><br>
    Numero2 :<input type="number"
    name="Numero2"><br>
    Numero3 :<input type="number"
    name="Numero3"><br>

   

<input type="submit">

  </form>

		
	<?php
        
        
        //gargoyle
        
        
// $_POST é uma array, contendo todos os parâmetros que são enviados pelo método post, e eu só quero mostrar alguma coisa na tela caso essa array não esteja vazia
// ou seja, quando o usuário mandou alguma coisa =p
// !empty signigica NÃO vazio. No php, o operador ! significa uma negação.

if (!empty($_POST)) {


// foreach é uma estrutura de repetição. Este trecho de código significa: pra cada chave/valor ( $key=>$value) dentro da array $_POST, eu quero verificar se o valor é vazio,
    // e se for, eu quero deletar a posição dele dentro da array $_POST, o removendo por consequência.
    foreach ($_POST as $key=>$value) {
        if ($value == "") {
            unset($_POST[$key]);
        }
    }

    // Depois de feitos os tratamentos, eu mostro os maiores e menores valores restantes dentro da array $_POST
    echo "O maior valor e: " . max($_POST) . ", e o menor e: " . min($_POST);
}
    


    ?> 




   
  </body>


</html>