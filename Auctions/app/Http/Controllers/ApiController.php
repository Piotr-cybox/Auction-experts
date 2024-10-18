<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    //
    public function showAuctions()
    {
        $token = env('BEARER_TOKEN');
        $response = Http::withToken($token)->get('https://automotive.aeapi.net/auction');
        dd($response->json());
    }

    public function ShowByAuction()
    {
        $token = env('BEARER_TOKEN');
        $response = Http::withToken($token)->get('https://automotive.aeapi.net/auction{$id}');
        dd($response->json());
    }

    public function createAuction(){
        $token = env('BEARER_TOKEN');
        $response = Http::withToken($token)->put('https://automotive.aeapi.net/auction{$id}');



    }
}
