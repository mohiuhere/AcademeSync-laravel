<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SessionListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $year = date('Y'); 
        $yearEnd = $year . '-12-31';
        $yearStart = $year . '-01-01';


        DB::insert("INSERT INTO session_lists (session_list_name, start_date, end_date, status) 
        VALUES (?, ?, ?, ?)", [
            $year, $yearStart, $yearEnd, 1
        ]);
    }
}
