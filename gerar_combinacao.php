<?php


class Combinacao
{
    private function _combinacao($regex, $qtd)
    {
        // $random_string = chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90)) . chr(rand(65, 90));
        // echo $random_string;
        // echo "<br>";
        // echo rand(65, 90);
        // $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%&*()_-+={[}]~^.,;:/?\|';
        
        $pass = array();
        $combLen = strlen($regex) - 1;
        for ($i = 0; $i < $qtd; $i++) {
            $n = rand(0, $combLen);
            $pass[] = $regex[$n];
        }

        return implode($pass);
    }

    public static function gerar_minusculas($qtd)
    {
        $regex = 'abcdefghijklmnopqrstuvwxyz';
        return self::_combinacao($regex, $qtd);
    }

    public static function gerar_maiusculas($qtd)
    {
        $regex = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        return self::_combinacao($regex, $qtd);
    }

    public static function gerar_maiusculas_minusculas($qtd)
    {
        $regex = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        return self::_combinacao($regex, $qtd);
    }

    public static function gerar_maiusculas_minusculas_numeros($qtd)
    {
        $regex = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        return self::_combinacao($regex, $qtd);
    }
    public static function gerar_todos_caracteres($qtd)
    {
        $regex = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%&*()_-+={[}]~^.,;:/?\|';
        return self::_combinacao($regex, $qtd);
    }
}
