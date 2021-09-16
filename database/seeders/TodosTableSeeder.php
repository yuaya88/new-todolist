<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        $contents = ['買い物','銀行','勉強'];
        foreach ($contents as $content) {
            DB::table('todos')->insert([
                'content' => $content,
                'created_at' => new Datetime(),
                'updated_at' => new DateTime()
            ]);
        }

    }
}
