<?php

namespace App\Http\Controllers;

use App\Models\FavouriteListItem;
use Illuminate\Http\Request;

class FavouriteListItemController extends Controller
{
    protected $user;

    public function __construct() 
    {
        
        $this->user = auth()->user();
    
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        

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
        $favouriteListItem = new FavouriteListItem;
        $favouriteListItem->recipe_detail_id = $request->recipe_detail_id; 
        $favouriteListItem->recipe_image = $request->recipe_image; 
        $favouriteListItem->recipe_label = $request->recipe_label; 
        $favouriteListItem->recipe_ingredientlines = $request->recipe_ingredientLines; 
        $favouriteListItem->favourite_list_id = $request->favourite_list_id; 

        

        if ($favouriteListItem->save()) {
            return response([
                'message' => 'Added to favourite list']);  
        } else {
            return response(['message' => 'Sorry can not add to favourite list']);
        }
               
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FavouriteListItem  $favouriteListItem
     * @return \Illuminate\Http\Response
     */
    public function show(FavouriteListItem $favouriteListItem)
    {
        


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FavouriteListItem  $favouriteListItem
     * @return \Illuminate\Http\Response
     */
    public function edit(FavouriteListItem $favouriteListItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FavouriteListItem  $favouriteListItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FavouriteListItem $favouriteListItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FavouriteListItem  $favouriteListItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(FavouriteListItem $favouriteListItem)
    {
        
        $favouriteListItem->delete();
    }
}
