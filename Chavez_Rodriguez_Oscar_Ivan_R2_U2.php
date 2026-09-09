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
    $promedio += $datos['puntuacion'];
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
}

$contar = array_reduce($alumnos, function ($carry,  $materias) {
    $suma = array_sum(array_column($materias, 'calificación'));
    $promedio = $suma / count($materias);

    // Evaluamos la calificación y sumamos al acumulador
    if ($promedio >= 70) {
        $carry['aprobados']++;
    } else {
        $carry['reprobados']++;
    }

    return $carry;
}, ['aprobados' => 0, 'reprobados' => 0]);



echo "<br>";
echo "Total de aprobados: " . $contar['aprobados'] . "<br>";
echo "Total de reprobados: " . $contar['reprobados'] . "<br>" . "<br>";


// Ejercicio 3 
$mascotas = [
    [
        'nombre' => 'Bombón',
        'especie'  => 'Perro',
        'edad' => 4,
    ],
    [
        'nombre' => 'Nina',
        'especie'  => 'Gato',
        'edad' => 2,
    ],
    [
        'nombre' => 'Iris',
        'especie'  => 'Ave',
        'edad' => 1,
    ],
    [
        'nombre' => 'Nemo',
        'especie'  => 'Pez',
        'edad' => 3,
    ],
    [
        'nombre' => 'Zeus',
        'especie'  => 'Perro',
        'edad' => 5,
    ],
    [
        'nombre' => 'Phoebe',
        'especie'  => 'Gato',
        'edad' => 6,
    ],
    [
        'nombre' => 'Oscar',
        'especie'  => 'Lagarto',
        'edad' => 2,
    ],
    [
        'nombre' => 'Luis',
        'especie'  => 'Perro',
        'edad' => 3,
    ],
    [
        'nombre' => 'Ramon',
        'especie'  => 'Gato',
        'edad' => 4,
    ],
    [
        'nombre' => 'Rogelio',
        'especie'  => 'Pez',
        'edad' => 1,
    ],
];

$perros = 0;
$gatos = 0;
$aves = 0;
$peces = 0;
$lagartos = 0;

$edadMenor = 0;
$edadMedia = 0;
$edadMayor = 0;

foreach ($mascotas as $mascota) {


    switch ($mascota['especie']) {
        case "Perro":
            $perros += $mascota['edad'];
            break;
        case "Gato":
            $gatos += $mascota['edad'];
            break;
        case "Pez":
            $peces += $mascota['edad'];
            break;
        case "Ave":
            $aves += $mascota['edad'];
            break;
        case "Lagarto":
            $lagartos += $mascota['edad'];
            break;
        default:
            break;
    }

    if ($mascota['edad'] < 2) {
        $edadMenor++;
    } else if ($mascota['edad'] > 2 && $mascota['edad'] < 4) {
        $edadMedia++;
    } else {
        $edadMayor++;
    }
}



echo "Promedio de edad por especie: " . "<br>";
echo "Aves: " . $aves . "<br>";
echo "Peces: " . $peces . "<br>";
echo "Perros: " . $perros . "<br>";
echo "Gatos: " . $gatos . "<br>";
echo "Lagartos: " . $lagartos . "<br>" . "<br>";

echo "Número de mascotas por rango de edad: " . "<br>";
echo "Menos de 2 años: " . $edadMenor . " mascotas <br>";
echo "2 a 4 años: " . $edadMedia . " mascotas <br>";
echo "Mayor de 4 años: " . $edadMayor . " mascotas <br>";
