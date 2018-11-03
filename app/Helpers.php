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


    /**
    * Converte data padrão do MySQL para padrão brasileiro,
    * com conversão de hora  de UTC para São Paulo
    * @param  String $data data formato mysql
    * @return String       data formato brasileiro
    */
    public static function dataBR($data, $mostra_horas = true, $mostra_dias = true, $mostra_segundos = true, $muda_hora = true): string
    {
        if (is_null($data)) {
            return "";
        }
        if (strpos($data, ' ') !== false && $mostra_horas) {
            $utc_date = \DateTime::createFromFormat(
                'Y-m-d H:i:s',
                $data,
                new \DateTimeZone('UTC')
            );
            if (!is_object($utc_date)) {
                return date("d/m/Y 00:00:00", strtotime($data));
            }
            $br_date = clone $utc_date;
            if ($muda_hora) {
                $br_date->setTimeZone(new \DateTimeZone('America/Sao_Paulo'));
            }
            return $mostra_segundos? $br_date->format("d/m/Y H:i:s") : $br_date->format("d/m/Y H:i");
        }
        $formato = $mostra_dias ? "d/m/Y" : "m/Y";
        return date($formato, strtotime($data));
    }
}