<?php
// simulacion de datos para tramites de la put
$tramites = [
    "1" => [
        "tramite" => "2602011517058",
        "tipo" => "Renovacion de licencia",
        "oficina" => "Oficina INTT - La california",
        "paso_actual" => 4, // pasos del 1 al 4
        "pasos" => [
            1 => ["titulo" => "Solicitud", "desc" => "Registro de datos básicos.", "status" => "Completado", "check" => "Validado"],
            2 => ["titulo" => "Examen Médico", "desc" => "Evaluación de vista y reflejos.", "status" => "Completado", "check" => "Aprobado"],
            3 => ["titulo" => "Examen Teórico", "desc" => "Prueba de leyes de tránsito.", "status" => "En Progreso", "check" => "Pendiente"],
            4 => ["titulo" => "Emisión", "desc" => "Impresión y entrega de plástico.", "status" => "Pendiente", "check" => "N/A"],
        ]
    ],
];
?>