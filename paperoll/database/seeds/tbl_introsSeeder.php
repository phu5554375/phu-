<?php

use Illuminate\Database\Seeder;

class tbl_introsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tbl_intros')->insert([
            'name' => 'phu',
            'email' => 'phu@gmail.com',
            'desc' => 'abcs',
            'class_attr' => 'right',
        ]);
    }    
}
