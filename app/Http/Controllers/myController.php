<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    public function test(Request $req)
    {
      
    //  if just one array
        // foreach($req->input('products') as $value)
        // {
        //     echo $value;
        // }
        
        $req->validate([
            'checks'=>'required|array'
        ]);
        // //mean if no checkbox is checked no submit
        $checkbox=$req->input('checks');
        $textboxes=$req->input('products');
        $prices=$req->input('prices');

        foreach ($textboxes as $index => $value) {
           
            if (in_array($index, $checkbox)) {
                // Checkbox is checked, update the product name
                // Assuming you have a Product model with a `name` attribute
                echo "product Name : " . $value .' and his price '. $prices[$index] ."<br>";
            }
        }
        }
}
