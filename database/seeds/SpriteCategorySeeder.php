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
            array(1, 'door', 'doors/door_horizontal.png'),
            array(2, 'wall', 'walls/wall_cross.png'),
            array(3, 'stair', 'stairs/stairs_horizontal.png'),
            array(4, 'floor', 'floors/floor_pathway.png' ),
            array(5, 'chest', 'chest.png'),
            array(6, 'water', 'water.png'),
        );

        foreach ($cats as $cat)
        { 
           DB::table('sprite_category')->insert([
            'cat_id'    => $cat[0],
            'cat_name'  => $cat[1],
            'cat_img'   => $cat[2],
            ]);
        }
        
    }
}
