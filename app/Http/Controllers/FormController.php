<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\addBetRequest;
use App\Http\Requests\addLotRequest;
use App\Models\Lot;
use App\Models\Bids;

class FormController extends Controller
{
    public function register(RegisterRequest $req)
    {

    }

    public function login(LoginRequest $req)
    {

    }

    public function addBet(addBetRequest $req)
    {
        $bid = new Bids();
        $bid->price = $req->input('cost');
        $bid->save();

    }

    public function addLot(addLotRequest $req)
    {
        $lot = new Lot();
        $lot->name = $req->input('lot-name');
        $lot->description = $req->input('message');
        $lot->link = $req->input('lot-img');
        $lot->start_coast = $req->input('lot-rate');
        $lot->step_bids = $req->input('lot-step');
        $lot->end_date= $req->input('lot-date');

        $lot->save();

        return redirect()->route('index')->with('success', 'Добавлено!');
    }

    public function allLots()
    {
        $lots = new Lot;
        return view('all-lots', ['lots' => $lots->all()]);
    }

    public function lot($id)
    {
        $lot = new Lot;
        return view('lot', ['lots' => $lot->find($id)]);
    }

    public function navigate()
    {
        $result = Categories::all();
        return view('navigation', compact('result', $result));
    }
}
