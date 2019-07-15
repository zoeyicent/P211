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
        // $this->call(UsersTableSeeder::class);
        $this->call(SYSTableSeeder::class);
        $this->call(SYSMNUTableSeeder::class);
        $this->call(TBLUSRTableSeeder::class);
        $this->call(OTHERTableSeeder::class);
        // $this->call(TBLUAMTableSeeder::class);
        // $this->call(TBLDSCTBLSYSTableSeeder::class);
        
    }
}
