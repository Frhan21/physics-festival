<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Event;
use App\Models\Sekolah;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'=>'Admin Physics Festival Unand',
            'username'=>'admin',
            'email'=>'physicsfestivalunand@gmail.com',
            'password'=>bcrypt('admin123')

        ]);

        Event::create([
            'title'=> 'Seminar Nasional',
            'slug'=>'seminar-nasional'
        ]);
        Event::create([
            'title'=> 'Lomba Fisika',
            'slug'=>'lomba-fisika'
        ]);
        Event::create([
            'title'=> 'Lomba Cerdas Tangkas Fisika',
            'slug'=>'lomba-cerdas-tangkas-fisika'
        ]);
        Event::create([
            'title'=> 'Lomba Karya Tulis Ilmiah',
            'slug'=>'lomba-karya-tulis-ilmiah'
        ]);
        Event::create([
            'title'=> 'Design Competition',
            'slug'=>'design-competition'
        ]);
        Event::create([
            'title'=> 'Mading Competition',
            'slug'=>'mading-competition'
        ]);
        Event::create([
            'title'=> 'Rangking 1',
            'slug'=>'rangking-1'
        ]);

        Sekolah::create([
            'sekolah'=>'SMA',
        ]);

        Sekolah::create([
            'sekolah'=>'SMP'
        ]);

        Sekolah::create([
            'sekolah'=>'Perguruan Tinggi'
        ]);

        Sekolah::create([
            'sekolah'=> 'Umum'
        ]);

    }
}
