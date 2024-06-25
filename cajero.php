<?php
function cajero_automatico(){

    echo "Bienvenido a tu cuenta bancaria\n";

    $saldo= 1000000;
    
    while (true){
        echo "1) Consultar el saldo\n";
        echo "2) Retirar \n";
        echo "3) Depositar\n";
        echo "4) Salir\n";

        $usuario=intval(readline("ingrese una opción: \n"));
        if ($usuario==1){
            echo "su saldo es de , $saldo \n"; 

        }elseif ($usuario==2){
            $retirar=intval(readline("ingrese el valor que desea retirar: "));
            if ($retirar<=$saldo);
            $saldo=$saldo-$retirar;
            echo "Retiro existoso...";
            echo "su saldo es de , $saldo \n";

        }elseif ($usuario==3){
            $depositar= intval(readline("ingrese la cantidad que desea depositar: "));
            $saldo=$saldo+$depositar;
            echo "Deposito existoso...";
            echo "Tu saldo despues de el deposito es de ,$saldo \n";

        }elseif ($usuario==4){
            echo "Gracias por trabajar con maikesbanc y confiar en nosotros adios...";
            break;
        }
    }
}
cajero_automatico();

        


        


   
    
    
          
    

   

    
   



