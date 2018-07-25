<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Setting::create([
            'site_name' => "Laravel's site",
            'contact_number' => '40373278',
            'contact_email' => 'info@laravel.com',
            'address' => 'Russia petersburg'
        ]);
    }
}
