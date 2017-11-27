<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ZadnjePredavanje extends Controller
{
    
    public function zadnje()
    {
        return "zadnje predavanje";
		return view ('zadnje', ['varijabla' => 'ispiši varijablu'] );
    }
}
