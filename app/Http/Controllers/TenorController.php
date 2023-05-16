<?php

namespace App\Http\Controllers;

use App\Models\Tenor;
use Illuminate\Http\Request;

class TenorController extends Controller
{
    public function index()
    {
        $list = Tenor::all();

        if ($list){
            return $this->sendResponse($list, 'List of available Tenors.');
        }

        return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
    }
}
