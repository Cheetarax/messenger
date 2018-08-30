<?php

use Illuminate\Database\Seeder;
use App\Message;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Message::create([
            'from_id' => 1,
            'to_id' => 2,
            'content' => 'Cómo va eso?'
        ]);

        Message::create([
            'from_id' => 2,
            'to_id' => 1,
            'content' => 'Bien, gracias. Qué tal tu?'
        ]);

        Message::create([
            'from_id' => 1,
            'to_id' => 3,
            'content' => 'Este finde BBQ, te apuntas?'
        ]);

        Message::create([
            'from_id' => 3,
            'to_id' => 1,
            'content' => 'que hay que llevar?'
        ]);
    }
}
