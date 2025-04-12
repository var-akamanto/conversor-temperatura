<?php
// conversor.php

// Celsius → Fahrenheit
function conversor1($valor) {
    return ($valor * 9 / 5) + 32;
}

// Celsius → Kelvin
function conversor2($valor) {
    return $valor + 273.15;
}

// Fahrenheit → Celsius (inverso do conversor1)
function fahrenheitParaCelsius($valor) {
    return ($valor - 32) * 5 / 9;
}

// Kelvin → Celsius (inverso do conversor2)
function kelvinParaCelsius($valor) {
    return $valor - 273.15;
}

// Fahrenheit → Kelvin: converte para Celsius e depois para Kelvin
function fahrenheitParaKelvin($valor) {
    $celsius = fahrenheitParaCelsius($valor);
    return conversor2($celsius);
}

// Kelvin → Fahrenheit: converte para Celsius e depois para Fahrenheit
function kelvinParaFahrenheit($valor) {
    $celsius = kelvinParaCelsius($valor);
    return conversor1($celsius);
}
?>
