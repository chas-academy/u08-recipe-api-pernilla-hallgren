<?php

namespace App\Http\Controllers;

use App\Models\FavouriteList;
use Illuminate\Http\Request;

class FavouriteListController extends Controller
{
    protected $user;

    public function __construct() 
    {
        
        // $this->middleware('auth:api');
        $this->user = auth()->user();
    
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(['data' => $this->user->favourites()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $favouriteList = new FavouriteList;
        $favouriteList->name = $request->name; 
    
        if ($this->user->favourites()->save($favouriteList))
            return response([
                'success' => true, 
                'name' => $favouriteList
            ]);
        else
            return response([
                'success' => false,
                'message' => 'Sorry this list cannot be saved'
            ], 400);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FavouriteList  $favouriteList
     * @return \Illuminate\Http\Response
     */
    public function show(FavouriteList $favouriteList)
    {
        if($favouriteList->user_id === $this->user->id) {
            return response($favouriteList);
        }
        return response(['message' => 'Sorry, you do not have access to this list']);
            
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FavouriteList  $favouriteList
     * @return \Illuminate\Http\Response
     */
    public function edit(FavouriteList $favouriteList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FavouriteList  $favouriteList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FavouriteList $favouriteList)
    {
        $favouriteList->name = $request->name; 

        if($favouriteList->save()) {
            return response(['message' => 'Success'], 201);
        } else {
            return response(['message' => 'Failed to update']);
        }
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FavouriteList  $favouriteList
     * @return \Illuminate\Http\Response
     */
    public function destroy(FavouriteList $favouriteList)
    {
        $favouriteList->delete();
    }    
}
