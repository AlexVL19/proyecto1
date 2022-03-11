<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class preciosControl extends Controller
{
    public function precio($precio){

        if(is_numeric($precio))
        {

            if($precio>0){

                $preciofin = 0;

                if($precio < 100000)
                {
                    return 'Este producto no tiene descuento';
                }

                if ($precio >= 100000 && $precio < 150000)
                {
                    $preciofin = $precio*0.02;
                    return 'El descuento del producto es del 2%, y el total a pagar es ' . $precio - $preciofin;
                }

                if ($precio >= 150000 && $precio < 300000)
                {
                    $preciofin = $precio*0.03;
                    return 'El descuento del producto es del 3%, y el total a pagar es ' . $precio - $preciofin;
                }

                if ($precio >= 300000 && $precio < 500000)
                {
                    $preciofin = $precio*0.04;
                    return 'El descuento del producto es del 4%, y el total a pagar es ' . $precio - $preciofin;
                }

                if ($precio >= 500000)
                {
                    $preciofin = $precio*0.05;
                    return 'El descuento del producto es del 5%, y el total a pagar es ' . $precio - $preciofin;
                }
            }
            else {
                return 'El valor ingresado es incorrecto, inténtelo nuevamente';
            }
        }

        else{

            return 'El valor ingresado es incorrecto, inténtelo nuevamente';
        }
    }

    public function getiva($price, $producto)
    {
        if(is_numeric($price))
        {
            if($price>0)
            {
                $iva = $price*0.19;
                $preciofinal = $price + $iva;

                return 'El artículo ' . $producto. ' sin IVA cuesta ' . $price . ' y el precio del IVA es de ' . $iva . '. El total a pagar por el artículo es de ' . $preciofinal;
            }

            else
            {
                return 'Los parámetros son incorrectos, intenta de nuevo.';
            }
        }

        else
        {
            return 'Los parámetros son incorrectos, intenta de nuevo.';
        }

    }
}
