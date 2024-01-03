<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::insert("INSERT INTO general_settings 
        (school_name, school_phone, school_email, school_logo_url, school_address, school_about) 
        VALUES (?,?,?,?,?,?)", [
            "Defalt School",
            "019999999",
            "school@mail.com",
            "NOT-SET",
            "CTG",
            "OKAY",
        ]);
    }
}
