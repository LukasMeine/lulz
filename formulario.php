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
		
// $_POST � uma array, contendo todos os par�metros que s�o enviados pelo m�todo post, e eu s� quero mostrar alguma coisa na tela caso essa array n�o esteja vazia
// ou seja, quando o usu�rio mandou alguma coisa =p
// !empty signigica N�O vazio. No php, o operador ! significa uma nega��o.

if(!empty($_POST)){


// foreach � uma estrutura de repeti��o. Este trecho de c�digo significa: pra cada chave/valor ( $key=>$value) dentro da array $_POST, eu quero verificar se o valor � vazio,
// e se for, eu quero deletar a posi��o dele dentro da array $_POST, o removendo por consequ�ncia.
foreach($_POST as $key=>$value){
if($value == ""){

unset($_POST[$key]);

}
}

// Depois de feitos os tratamentos, eu mostro os maiores e menores valores restantes dentro da array $_POST
echo "O maior valor e: " . max($_POST) . ", e o menor e: " . min($_POST); 
}
    


    ?> 




   
  </body>


</html>