<?php

namespace Miguelfz\Composer1;

class Calculadora{

    public static function somar($n,$m){
        return $n+$m;
    }

    public static function dividir($n,$m){
        return $n/$m;
    }

    public static function subtrair($n,$m){
        return $n-$m;
    }

    public static function miltiplicar($n,$m){
        return $n*$m;
    }

    public static function quadrado($n){
        return $n*$n;
    }

}