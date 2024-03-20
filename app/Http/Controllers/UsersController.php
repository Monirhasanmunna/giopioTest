<?php

namespace App\Http\Controllers;

use App\Models\SearchHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $input = $request->input('value');
        if($input){ $this->storeSearch($input); }
        $searches = SearchHistory::latest()->take(5)->get();
        $products = Http::get('https://dailydealsdiscounts.com/api/client/product?title='.$input);

        
        return Inertia::render('Dashboard', [
            'products' => $products->json(),
            'searches' => $searches
        ]);
    }


    public function storeSearch($search)
    {
        SearchHistory::create([
            'name' => $search
        ]);
    }

    public function deleteSearch($id)
    {
        SearchHistory::find($id)->delete();
        return to_route('index');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
