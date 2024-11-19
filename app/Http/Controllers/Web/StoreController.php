<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('stores.index', ['stores' => Store::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'reservation_status' => 'required',
            'requires_products' => 'required',
            'reservation_method' => 'required',
            'activity_status' => 'required',
            'store_payment_method' => 'required',
        ]);
        Store::create($request->all());
        return redirect(route('stores.index'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $store = Store::find($id);
        if (!$store) {
            abort(404);
        }
        return view('stores.edit', ['store' => $store]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'reservation_status' => 'required',
            'requires_products' => 'required',
            'reservation_method' => 'required',
            'activity_status' => 'required',
            'store_payment_method' => 'required',
        ]);
        $store = Store::find($id);
        if (!$store) {
            abort(404);
        }
        $store->update($request->all());
        return redirect(route('stores.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $store = Store::find($id);
        if (!$store) {
            abort(404);
        }
        $store->delete();
        return redirect(route('stores.index'));
    }
}
