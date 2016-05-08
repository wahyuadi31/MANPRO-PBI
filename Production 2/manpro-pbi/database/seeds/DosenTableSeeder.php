<?php

use Illuminate\Database\Seeder;

class DosenTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('data_dosen')->delete();

        \DB::table('data_dosen')->insert(array (
            0 =>
            array (
                'id' => 1,
                'nama' => '<h1>tono</h1>',
                'jabatan' => 'trololo',
                'profile' => 'haha i like boobs',
                'image' => 'tono20160506 074517.jpg',
                'created_at' => '2016-05-06 07:41:05',
                'updated_at' => '2016-05-06 16:02:19',
            ),
            1 =>
            array (
                'id' => 2,
                'nama' => 'tikoo',
                'jabatan' => 'toki',
                'profile' => 'trolololollo',
                'image' => 'tikoo20160506 074128.jpg',
                'created_at' => '2016-05-06 07:41:28',
                'updated_at' => '2016-05-06 07:41:28',
            ),
            2 =>
            array (
                'id' => 3,
                'nama' => 'kok',
                'jabatan' => 'babu',
                'profile' => 'me too dude',
                'image' => 'kok20160506 074155.jpg',
                'created_at' => '2016-05-06 07:41:55',
                'updated_at' => '2016-05-06 07:41:55',
            ),
            3 =>
            array (
                'id' => 4,
                'nama' => 'boobylicious',
                'jabatan' => 'boob lover',
                'profile' => 'heh, cute, i think i will like it here',
                'image' => 'boobylicious20160506 074237.jpg',
                'created_at' => '2016-05-06 07:42:37',
                'updated_at' => '2016-05-06 07:42:37',
            ),
        ));


    }
}
