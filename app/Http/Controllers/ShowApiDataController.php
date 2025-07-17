<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class ShowApiDataController extends Controller
{
    public function showApiData()
    {
        // Fetch posts from JSONPlaceholder API
        $response = Http::get("https://jsonplaceholder.typicode.com/posts");

        // Convert JSON to array
        $data = $response->json();

        // Pass it to view
        return view('showApiData', ['data' => $data]);
    }
}
