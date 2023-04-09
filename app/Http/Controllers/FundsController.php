<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FundsController extends Controller
{
    public function addfunds(Client $client)
    {
        return view('funds.addfunds', [
            'client' => $client
        ]);
    }

    public function update(Request $request, Client $client)
    {
        $client->name = $request->name;
        $client->surname = $request->surname;
        $client->personal_code = $request->personal_code;
        $client->tt = isset($request->tt) ? 1 : 0;
        $client->save();
        return redirect()->route('clients-index');
    }
}