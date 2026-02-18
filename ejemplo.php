<?php

/**
 * Clase Calculadora
 *
 * Clase simple para realizar operaciones matemáticas básicas.
 */
class Calculadora

//Comentario para subir proyecto al git

//Segundo comentario para el proyecto git

{
    /**
     * Suma dos números.
     *
     * @param int $a Primer número
     * @param int $b Segundo número
     * @return int Resultado de la suma
     */
    public function sumar(int $a, int $b): int
    {
        return $a + $b;
    }

    /**
     * Resta dos números.
     *
     * @param int $a Primer número
     * @param int $b Segundo número
     * @return int Resultado de la resta
     */
    public function restar(int $a, int $b): int
    {
        return $a - $b;
    }
}
