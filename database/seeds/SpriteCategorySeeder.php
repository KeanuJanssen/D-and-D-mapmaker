<?php

use Illuminate\Database\Seeder;

class SpriteCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        $cats = array (
            array(1, 'door'),
            array(2, 'wall'),
            array(3, 'stair'),
            array(4, 'floor'),
            array(5, 'chest'),
            array(6, 'water'),
        );

        foreach ($cats as $cat)
        { 
           DB::table('sprite_category')->insert([
            'cat_id'    => $cat[0],
            'cat_name'  => $cat[1],
            ]);
        }
        
    }
}
