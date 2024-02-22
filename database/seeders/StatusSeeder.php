<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create(['status'=>'active']);
        Status::create(['status'=>'inactive']);
        Status::create(['status'=>'suspended']);
        Status::create(['status'=>'blocked']);
    }
}
