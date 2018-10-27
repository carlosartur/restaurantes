<?php
namespace App;

class Helpers {
    /**
     * Formata de dinheiro para float, para gravar no banco de dados
     * @param  string $valor Valor para formatar
     * @return float         Valor formatado
     */
    public static function dinheiroParaFloat($valor): float
    {
        if (empty($valor)) {
            return 0.00;
        }
        $valor = str_replace('.', '', $valor);
        $valor = str_replace(',', '.', $valor);
        return (float) $valor;
    }

    /**
    * Formata de float para padrão de exibição de dinheiro brasileiro
    * @param  float  $valor Valor em float
    * @return string        Valor formatado
    */
    public static function floatParaDinheiro(float $valor): string
    {
        return number_format($valor, 2, ',', '.');
    }
}