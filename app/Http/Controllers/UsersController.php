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
    public function index()
    {
        $searches = SearchHistory::latest()->take(5)->get();


        return Inertia::render('Dashboard', [
            'users' => Http::get('https://jsonplaceholder.typicode.com/users')->json(),
            'searches' => $searches
        ]);
    }


    public function storeSearch(Request $request)
    {
        SearchHistory::create([
            'name' => $request->value
        ]);

        $this->index();

        return redirect()->back();
    }

    public function deleteSearch($id)
    {
        SearchHistory::find($id)->delete();
        $this->index();
        return redirect()->back();
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
