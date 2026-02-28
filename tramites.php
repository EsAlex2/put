<?php
// simulacion de datos para tramites de la put


$tramites = [
    "1" => [
        "tramite" => "2602011517058",
        "tipo" => "Renovacion de licencia",
        "oficina" => "Oficina INTT - La california",
        "paso_actual" => rand(0, 5), // pasos del 1 al 5
        "pasos" => [
            1 => ["etapa" => "Solicitud de Licencia", "desc" => "Registro de datos personales.", "status" => "Completado", "check" => "Validado"],
            2 => ["etapa" => "Solicitud en Planta de Impresion", "desc" => "En proceso de Impresion de Plastico.", "status" => "Completado", "check" => "Aprobado"],
            3 => ["etapa" => "Emision de Solicitud", "desc" => "Impresion de plastico Realizado.", "status" => "En Progreso", "check" => "Pendiente"],
            4 => ["etapa" => "En camino a oficina INTT", "desc" => "Plastico en camino a la oficina seleccionada", "status" => "Pendiente", "check" => "N/A"],
            5 => ["etapa" => "Entrega Exitosa", "desc" => "Retire su licencia en la oficina seleccionada", "status" => "Pendiente", "check" => "N/A"],
        ]
    ],
];
?>