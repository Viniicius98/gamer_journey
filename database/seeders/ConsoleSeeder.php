<?php

namespace Database\Seeders;

use App\Models\Console;
use Illuminate\Database\Seeder;

class ConsoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Console::create(['console' => 'Xbox']);
        Console::create(['console' => 'Xbox 360']);
        Console::create(['console' => 'Xbox One']);
        Console::create(['console' => 'Xbox Series S/X']);
        Console::create(['console' => 'Playstation']);
        Console::create(['console' => 'Playstation 2']);
        Console::create(['console' => 'Playstation 3']);
        Console::create(['console' => 'Playstation 4']);
        Console::create(['console' => 'Playstation 5']);
        Console::create(['console' => 'Playstation Portable']);
        Console::create(['console' => 'Nintendo Entertainment System (NES)']);
        Console::create(['console' => 'Super Nintendo Entertainment System (SNES)']);
        Console::create(['console' => 'Nintendo 64']);
        Console::create(['console' => 'Nintendo GameCube']);
        Console::create(['console' => 'Nintendo Wii']);
        Console::create(['console' => 'Nintendo WiiU']);
        Console::create(['console' => 'Nintendo Switch']);

    }
}
