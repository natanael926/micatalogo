<?php

use Illuminate\Database\Seeder;

/**
 * Class UserTableSeeder
 *
 * @autor Natanael Acosta Crousset <natanael926@gmail.com>
 */
class GenreTableSeeder extends Seeder {

    public function run()
    {

        $generes = [
            ['name' => 'Drama', 'description' => 'Películas que se centran principalmente en el desarrollo de un conflicto entre los protagonistas, o del protagonista con su entorno o consigo mismo'],
            ['name' => 'Comedia', 'description' => 'Películas realizadas con la intención de provocar humor, entretenimiento o/y risa en el espectador.'],
            ['name' => 'Acción', 'description' => 'Cuyo argumento implica una interacción moral entre el «bien» y el «mal» llevada a su fin por la violencia o la fuerza física'],
            ['name' => 'Aventura', 'description' => 'Contienen situaciones de peligro y riesgo.'],
            ['name' => 'Terror', 'description' => 'Realizadas con la intención de provocar tensión, miedo y/o el sobresalto en la audiencia.'],
            ['name' => 'Ciencia ficción', 'description' => 'Presentan la progresión de lo desconocido a lo conocido por el descubrimiento de una serie de enigmas.'],
            ['name' => 'Romántico', 'description' => 'Hacen hincapié en los elementos amorosos y románticos.'],
            ['name' => 'Musical', 'description' => 'Contienen interrupciones en su desarrollo, para dar un breve receso por medio de un fragmento musical cantado o acompañados de una coreografía.'],
            ['name' => 'Melodrama', 'description' => 'Tiene una carga emocional o moral muy fuerte o emotiva, atendiendo al gusto de cada persona.'],
            ['name' => 'Catástrofe', 'description' => 'El tema principal es una gran catástrofe  (por ejemplo grandes incendios, terremotos, naufragios o una hipotética colisión de un asteroide contra la Tierra).'],
            ['name' => 'Suspense', 'description' => 'Realizadas con la intención de provocar tensión en el espectador. También suele utilizarse la palabra thriller para designar películas de este tipo, aunque hay sutiles diferencias.'],
            ['name' => 'Fantasía', 'description' => 'Csontienen hechos, mundos, criaturas o cosas fantasiosas.'],
        ];


        foreach ($generes as $genere){
            \DB::table('genres')->insert($genere);
        }

    }

}