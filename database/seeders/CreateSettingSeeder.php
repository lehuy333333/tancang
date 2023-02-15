<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\GlobalSetting;
use App\Models\TypeBlog;

class CreateSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $settings = [
            [
                'key'=>'home-slider-cover-image-1',
                'is_image'=>true,
            ],
            [
                'key'=>'home-slider-image-1',
                'is_image'=>true,
            ],
            [
                'key'=>'home-slider-description-1',
            ],
            [
                'key'=>'home-slider-cover-image-2',
                'is_image'=>true,
            ],
            [
                'key'=>'home-slider-image-2',
                'is_image'=>true,
            ],
            [
                'key'=>'home-slider-description-2',
            ],
            [
                'key'=>'home-slider-cover-image-3',
                'is_image'=>true,
            ],
            [
                'key'=>'home-slider-image-3',
                'is_image'=>true,
            ],
            [
                'key'=>'home-slider-description-3',
            ],


        ];

        foreach ($settings as $setting) {
            GlobalSetting::create($setting);
        };

        $type_blogs = [
            'news',
            'group_news',
        ];

        foreach ($type_blogs as $type_blog) {
            TypeBlog::create(['name' => $type_blog]);
        }
    }
}
