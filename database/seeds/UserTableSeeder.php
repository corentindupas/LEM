<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

    public function run() {
        DB::table('users')->delete(); // supprimer les enregistrements de la table users
        DB::unprepared('ALTER TABLE users AUTO_INCREMENT=1'); // remettre l'auto
// insérer des données dans la table users
        DB::table('users')->insert(
                [
                    [
                        'username' => 'Guillaume',
                        'email' => 'guillaume.perot@wanadoo.fr',
                        'password' => Hash::make('Guillaume'),
                    ],
                    [
                        'username' => 'Sabrina',
                        'email' => 'sabrina.dupont@wanadoo.fr',
                        'password' => Hash::make('Sabrina'),
                    ],
                    [
                        'username' => 'Andrée',
                        'email' => 'andree.poliakov@wanadoo.fr',
                        'password' => Hash::make('Andrée'),
                    ],
                    [
                        'username' => 'Michel',
                        'email' => 'michel.tintin@wanadoo.fr',
                        'password' => Hash::make('Michel'),
                    ]
        ]);
    }

}
