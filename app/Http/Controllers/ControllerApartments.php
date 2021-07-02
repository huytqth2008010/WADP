<?php
namespace App\Http\Controllers;

use App\Models\Apartments;

class ControllerApartments extends Controller
{
    public function list(){
        $apartments = Apartments::all()->paginate(6);
        return view("page.list_apartment",[
            "apartments"=>$apartments
        ]);
    }
}
