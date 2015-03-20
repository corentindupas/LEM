<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder {

    public function run() {
        DB::table('students')->delete(); // supprimer les enregistrements de la table students
        DB::unprepared('ALTER TABLE students AUTO_INCREMENT=1'); // remettre l'auto
// insérer des données dans la table students
        DB::table('students')->insert(
                [
                    [
                        'name' => 'Guillaume',
                        'surname' => 'Perot',
                        'formation' => 'développement',
                        'bio' => 'Je suis Guillaume et je suis en formation développeur, ça me plait beaucoup et je veux devenir intégrateur front-end.',
                        'status' => 'publish'
                    ],
                    [
                        'name' => 'Sabrina',
                        'surname' => 'Dupont',
                        'formation' => 'graphisme',
                        'bio' => 'Je m\'appelle Sabrina j\'ai 23 ans et je suis passionnée par les arts graphiques. Je rêve de travailler dans une grande entreprise design.',
                        'status' => 'publish'
                    ],
                    [
                        'name' => 'Andrée',
                        'surname' => 'Manoukian',
                        'formation' => 'journalisme',
                        'bio' => 'Moi c\'est Andrée, je suis journaliste en 3ème année, et mon truc c\'est le terrain, aller voir ce qu\'il se passe vraiment et le monter aux gens.',
                        'status' => 'publish'
                    ],
                    [
                        'name' => 'Michel',
                        'surname' => 'Chellemi',
                        'formation' => 'graphisme',
                        'bio' => 'Michel 19 ans, en PAM, je découvre ce qu\'est le travail créatif en équipe et je prends beaucoup de plaisir à exposer mes idées.',
                        'status' => 'publish'
                    ]
        ]);
    }

}
