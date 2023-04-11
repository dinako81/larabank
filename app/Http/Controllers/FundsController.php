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

    public function plusfunds(Request $request, Client $client)
    {
        $client->acc_balance = $request->acc_balance + $client->acc_balance;
        $client->save();
        return redirect()->route('clients-addfunds');
    }

    public function withdrawfunds(Client $client)
    {
        return view('funds.withdrawfunds', [
            'client' => $client
        ]);
    }

    public function minusfunds(Request $request, Client $client)
    {
        $client->acc_balance =  $client->acc_balance - $request->acc_balance;
        $client->save();
        return redirect()->route('clients-index');
    }
}