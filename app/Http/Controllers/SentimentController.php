<?php

namespace App\Http\Controllers;

use App\Models\Sentiments;
use Illuminate\Http\Request;

class SentimentController extends Controller
{
    //APIs ROUTES

    // get all the sentiment analysis
    public function index()
    {
        return Sentiments::all();
    }

    // get sentiment by id
    public function getSentiment(Sentiments $id)
    {
        return Sentiments::find($id);
    }

    // create sentiment analysis
    public function store(Request $request)
    {
        $sentiment = Sentiments::create($request->all());

        return response()->json($sentiment, 201);
    }

    // update the sentiment analysisby id
    public function update(Request $request, $id)
    {
        $sentiment = Sentiments::findOrFail($id);
        $sentiment->update($request->all());

        return response()->json($sentiment, 200);
    }

    // delete sentiment analysis
    public function delete(Request $request,  $id)
    {
        $sentiment = Sentiments::findOrFail($id);
        $sentiment->delete();

        return response()->json(null, 204);
    }


    // VIEW ROUTES

    // generate analysis view
    public function generateAnalysisPage()
    {
        return view('pages.generateAnalysis');
    }

    // result view
    public function resultsPage()
    {
        return view('pages.results');
    }

    // sentiment analysis view
    public function sentimentOverviewPage()
    {
        return view('pages.sentimentOverview');
    }
}