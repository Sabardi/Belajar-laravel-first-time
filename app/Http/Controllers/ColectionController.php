<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColectionController extends Controller
{
    //
    public function colectionSatu(){
        $myArray = [1, 9, 3, 4, 5, 3, 5, 7];
        $collection = new \Illuminate\Support\Collection($myArray);
        echo $collection;
    }
    public function colectionDua(){
        $myArray = [1, 9, 3, 4, 5, 3, 5, 7];
        $collection = collect($myArray);
    }
    public function colectionTiga(){

        $collection = collect([1, 9, 3, 4, 5, 3, 5, 7]);

        // cara mengakses nya
        echo $collection[1]; echo "<br/>";
        echo $collection[2];  echo "<br/>";

        foreach($collection as $data){
            echo "$data";
        }

    }
    public function colectionEmpat(){

    }
    public function colectionLima(){

    }
    public function colectionEnam(){

    }
}

12.4. Collection Method 
