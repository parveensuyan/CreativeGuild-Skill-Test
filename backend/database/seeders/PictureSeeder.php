<?php

namespace Database\Seeders;

use App\Models\Photographer;
use App\Models\Picture;
use Illuminate\Database\Seeder;

class PictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $photoGrapher = Photographer::where('email', 'nick.reynolds@domain.co')->first();
        $data = [
            [
                "title" =>  "Nandhaka Pieris",
                "description" =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "img" =>  "img/landscape1.jpg",
                "date" =>  "2015-05-01",
                "featured" =>  1,
                "photographer_id" => $photoGrapher->id,
                "created_at"    => date('Y-m-d'),
                "updated_at"    => date('Y-m-d'),
            ],
            [
                "title" =>  "New West Calgary",
                "description" =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "img" =>  "img/landscape2.jpg",
                "date" =>  "2016-05-01",
                "featured" =>  0,
                "photographer_id" => $photoGrapher->id,
                "created_at"    => date('Y-m-d'),
                "updated_at"    => date('Y-m-d'),
            ],
            [
                "title" =>  "Australian Landscape",
                "description" =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "img" =>  "img/landscape3.jpg",
                "date" =>  "2015-02-02",
                "featured" =>  0,
                "photographer_id" => $photoGrapher->id,
                "created_at"    => date('Y-m-d'),
                "updated_at"    => date('Y-m-d'),
            ],
            [
                "title" =>  "Halvergate Marsh",
                "description" =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "img" =>  "img/landscape4.jpg",
                "date" =>  "2014-04-01",
                "featured" =>  1,
                "photographer_id" => $photoGrapher->id,
                "created_at"    => date('Y-m-d'),
                "updated_at"    => date('Y-m-d'),
            ],
            [
                "title" =>  "Rikkis Landscape",
                "description" =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "img" =>  "img/landscape5.jpg",
                "date" =>  "2010-09-01",
                "featured" =>  0,
                "photographer_id" => $photoGrapher->id,
                "created_at"    => date('Y-m-d'),
                "updated_at"    => date('Y-m-d'),
            ],
            [
                "title" =>  "Kiddi Kristjans Iceland",
                "description" =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "img" =>  "img/landscape6.jpg",
                "date" =>  "2015-07-21",
                "featured" =>  1,
                "photographer_id" => $photoGrapher->id,
                "created_at"    => date('Y-m-d'),
                "updated_at"    => date('Y-m-d'),
            ]
        ];
        if ($photoGrapher) {
            Picture::insert($data);
        }
    }
}
