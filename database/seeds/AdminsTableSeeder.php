<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\admin_area\Admin::class,5)->create();
        // factory(App\admin_area\Post::class,5)->create();
    }
}
