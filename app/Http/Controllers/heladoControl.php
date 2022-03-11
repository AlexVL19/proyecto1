<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class heladoControl extends Controller
{
    public function helado($opc){
        if ($opc >= 1 && $opc <=3){

            $valorH = 3000;
            $valortopping = 0;
            $topping = '';
            $valortotal = 0;

            if ($opc == 1)
            {
                $valortopping = 500;
                $topping = 'Chocolate';
            }

            if ($opc == 2)
            {
                $valortopping = 1000;
                $topping = 'Brownie';
            }

            if ($opc == 3)
            {
                $valortopping = 1500;
                $topping = 'Delicatessen';
            }

            $valortotal = $valorH + $valortopping;
            return 'El topping escogido es: ' . $topping . ' y su precio es ' . $valortopping . '. El valor total a pagar por el helado es ' . $valortotal;
        }

        else{
            return 'Opción no valida';
        }
    }
}
