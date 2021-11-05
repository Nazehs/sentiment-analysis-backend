<?php

namespace App\Http\Controllers;

use App\Models\Sentiments;
use Illuminate\Http\Request;

class SentimentController extends Controller
{
    //
    public function index()
    {
        return Sentiments::all();
    }

    public function getSentiment(Sentiments $id)
    {
        return Sentiments::find($id);
    }

    public function store(Request $request)
    {
        $sentiment = Sentiments::create($request->all());

        return response()->json($sentiment, 201);
    }

    public function update(Request $request, $id)
    {
        $sentiment = Sentiments::findOrFail($id);
        $sentiment->update($request->all());

        return response()->json($sentiment, 200);
    }

    public function delete(Request $request,  $id)
    {
        $sentiment = Sentiments::findOrFail($id);
        $sentiment->delete();

        return response()->json(null, 204);
    }
}