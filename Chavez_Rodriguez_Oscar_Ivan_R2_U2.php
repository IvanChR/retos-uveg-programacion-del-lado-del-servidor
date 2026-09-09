<?php

// Ejercicio 1
$jugadores = [
    [
        'nombre' => 'pixel_hero',
        'puntuacion' => 1200,
        'fecha' => [
            'year' => 2024,
            'month' => 06,
            'day' => 15,
        ]
    ],
    [
        'nombre' => 'cyber_ninja22',
        'puntuacion' => 1500,
        'fecha' => [
            'year' => 2024,
            'month' => 07,
            'day' => 02,
        ]
    ],
    [
        'nombre' => 'storm_wolf',
        'puntuacion' => 1800,
        'fecha' => [
            'year' => 2024,
            'month' => 07,
            'day' => 10,
        ]
    ],
    [
        'nombre' => 'galactic_gamer',
        'puntuacion' => 1100,
        'fecha' => [
            'year' => 2024,
            'month' => 06,
            'day' => 30,
        ]
    ],
    [
        'nombre' => 'arcade_master',
        'puntuacion' => 1600,
        'fecha' => [
            'year' => 2024,
            'month' => 07,
            'day' => 15,
        ]
    ],
    [
        'nombre' => 'star_chaser91',
        'puntuacion' => 1400,
        'fecha' => [
            'year' => 2024,
            'month' => 05,
            'day' => 25,
        ]
    ],
    [
        'nombre' => 'vortex_warrior',
        'puntuacion' => 1700,
        'fecha' => [
            'year' => 2024,
            'month' => 07,
            'day' => 20,
        ]
    ],
    [
        'nombre' => 'lone_wolf47',
        'puntuacion' => 1300,
        'fecha' => [
            'year' => 2024,
            'month' => 06,
            'day' => 05,
        ]
    ],
    [
        'nombre' => 'game_wizard99',
        'puntuacion' => 1450,
        'fecha' => [
            'year' => 2024,
            'month' => 07,
            'day' => 28,
        ]
    ],
    [
        'nombre' => 'cosmic_rider22',
        'puntuacion' => 1550,
        'fecha' => [
            'year' => 2024,
            'month' => 04,
            'day' => 10,
        ]
    ]
];

// Sacar el promedio
$promedio = 0;

foreach ($jugadores as $jugador => $datos) {
    strval($promedio += $datos['puntuacion']);
}
echo "El promedio de puntuación de todos los jugadores es: " . $promedio / count($jugadores) . "<br>" . "<br>";


// Filtrar puntuaciones
foreach ($jugadores as $jugador => $datos) {

    if ($datos['fecha']['month'] == 07) {

        echo "Jugador: "
            . $datos['nombre'] . ", fecha: "
            . $datos['fecha']['year']
            . " - "
            . '0'
            . $datos['fecha']['month']
            . " - "
            . $datos['fecha']['day']
            . "<br>";
    }
};

// Ejercicio 2
$alumnos = [
    'Miguel' => [
        [
            'materia' => 'Fundamentos de programación',
            'calificación' => '85'
        ],
        [
            'materia' => 'Desarrollo web',
            'calificación' => '88'
        ]
    ],
    'Carlos'  => [
        [
            'materia' => 'Estructuras de Datos',
            'calificación' => '78'
        ],
        [
            'materia' => 'Fundamentos de programación',
            'calificación' => '55'
        ]
    ],
    'Melva' => [
        [
            'materia' => 'Fundamentos de Programación',
            'calificación' => '65'
        ],
        [
            'materia' => 'Algoritmos y lógica',
            'calificación' => '75'
        ]
    ],
    'Silvia' => [
        ['materia' => 'Desarrollo web', 'calificación' => '92']
    ],
    'Dulce' => [
        ['materia' => 'Algorítmos y lógica', 'calificación' => '60']
    ],
    'Karla' => [
        ['materia' => 'Estructuras de datos', 'calificación' => '70']
    ]
];



foreach ($alumnos as $alumno => $materias) {

    $calificacionAlumno = 0;
    $numeroMaterias = count($materias);

    echo "<br>" . $alumno . "<br>";
    foreach ($materias as $info) {
        $calificacionAlumno += $info['calificación'];
        echo "calificación: " .  $calificacionAlumno . "<br>";
    }

    $calificacionAlumno = intval($calificacionAlumno) / intval($numeroMaterias);
    echo "Promedio de calificacion: " . $calificacionAlumno . "<br>";

    if ($calificacionAlumno >= 70) {
        echo $alumno . ": Aprobado" . "<br>";
    } else {
        echo $alumno . ": reprobado" . "<br>";
    }

    /*   $alumnosAprobados = function ($carry, $) {}; */

    // array_reduce($alumnos,);
}
