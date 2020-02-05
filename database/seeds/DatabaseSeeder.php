<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Organization::class, 50)->create()->each(function($u) {
            $u->users()
                ->saveMany( factory(App\Models\User::class, random_int(4, 11))->make() )
                ->each(function($p){
                    $p->wallet()->save(factory(App\Models\Wallet::class)->make());
                });
        });
    }
}
