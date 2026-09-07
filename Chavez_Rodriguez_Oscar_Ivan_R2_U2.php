<?php
$jugadores = [
    [
        'nombre' => 'pixel_hero',
        'puntuacion' => 1200,
        'fecha' => '2024-06-15'
    ],
    [
        'nombre' => 'cyber_ninja22',
        'puntuacion' => 1500,
        'fecha' => '2024-07-02'
    ],
    [
        'nombre' => 'storm_wolf',
        'puntuacion' => 1800,
        'fecha' => '2024-07-10'
    ],
    [
        'nombre' => 'galactic_gamer',
        'puntuacion' => 1100,
        'fecha' => '2024-06-30'
    ],
    [
        'nombre' => 'arcade_master',
        'puntuacion' => 1600,
        'fecha' => '2024-07-15'
    ],
    [
        'nombre' => 'star_chaser91',
        'puntuacion' => 1400,
        'fecha' => '2024-05-25'
    ],
    [
        'nombre' => 'vortex_warrior',
        'puntuacion' => 1700,
        'fecha' => '2024-07-20'
    ],
    [
        'nombre' => 'lone_wolf47',
        'puntuacion' => 1300,
        'fecha' => '2024-06-05'
    ],
    [
        'nombre' => 'game_wizard99',
        'puntuacion' => 1450,
        'fecha' => '2024-07-28'
    ],
    [
        'nombre' => 'cosmic_rider22',
        'puntuacion' => 1550,
        'fecha' => '2024-04-10'
    ]
];

// Sacar el promedio
$promedio = 0;

foreach ($jugadores as $jugador => $datos) {
    strval($promedio += $datos['puntuacion']);
}
echo "El promedio de puntuación de todos los jugadores es: " . $promedio / count($jugadores) . "<br>" . "<br>";



// Filtrar puntuaciones

$filtrarFechas = function ($jugador) {
    return $jugador['fecha'];
};

foreach ($jugadores as $jugador => $datos) {

    echo "Jugador: " . $datos['nombre'] . ", fecha: " . $datos['fecha'] . "<br>";
};
