<?php

namespace App\Http\Controllers\Money;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\Money\MoneyStoreRequest;
use App\Models\Money;

class MoneyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      return view('money.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('money.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MoneyStoreRequest $request)
    {
      $data = $request->validated();

      $money  = New Money();
      $money->owner = $data['owner']; 
      $money->amount = $data['amount']; 
      $money->save();

      // toast('User has been successfully added.', 'success');
		  return redirect()->route('moneys.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
