<?php
namespace App\Http\Controllers;

use App\Models\Apartments;

class ControllerApartments extends Controller
{
    public function list(){
//        $apartments = Apartments::all()->paginate(6);
        $apartments = Apartments::all();
        return view("apartment.list_apartment",[
            "apartments"=>$apartments
        ]);
    }
}
