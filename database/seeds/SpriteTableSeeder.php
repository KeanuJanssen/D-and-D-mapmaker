<?php

use Illuminate\Database\Seeder;

class SpriteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sprites = array (
            array(1, 1, '/doors/door_horizontal.png'),
            array(2, 1, '/doors/door_vertical.png'),
            array(3, 4, '/floors/floor_pathway.png'),
            array(4, 4, '/floors/floor_stone.png'),
            array(5, 3, '/stairs/stairs_horizontal.png'),
            array(6, 3, '/stairs/stairs_vertical.png'),
            array(7, 2, '/walls/wall_corner_bottomleft.png'),
            array(8, 2, '/walls/wall_corner_bottomright.png'),
            array(9, 2, '/walls/wall_corner_topleft.png'),
            array(10, 2, '/walls/wall_corner_topright.png'),
            array(11, 2, '/walls/wall_cross.png'),
            array(12, 2, '/walls/wall_line_horizontal.png'),
            array(13, 2, '/walls/wall_line_vertical.png'),
            array(14, 2, '/walls/wall_stub_bottom.png'),
            array(15, 2, '/walls/wall_stub_left.png'),
            array(16, 2, '/walls/wall_stub_right.png'),
            array(17, 2, '/walls/wall_stub_top.png'),
            array(18, 2, '/walls/wall_t_bottom.png'),
            array(19, 2, '/walls/wall_t_left.png'),
            array(20, 2, '/walls/wall_t_right.png'),
            array(21, 2, '/walls/wall_t_top.png'),
            array(22, 5, '/chest.png'),
            array(23, 6, '/water.png'),
        );

        foreach ($sprites as $sprite)
        { 
           DB::table('sprites')->insert([
            'sprite_id'     => $sprite[0],
            'cat_id'        => $sprite[1],
            'sprite_img'    => $sprite[2],
            ]);
        }
    }
}
