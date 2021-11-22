<?php

namespace App\Http\Controllers;

use App\Models\Photographer as ModelsPhotographer;
use Illuminate\Http\Request;

class Photographer extends Controller
{
    //

    public function getPhotographers()
    {
        return ModelsPhotographer::with(['picture' => function($query) {
            return $query->select('id','title','img','date','featured','photographer_id');
        }])->get();    
    }
    
}
