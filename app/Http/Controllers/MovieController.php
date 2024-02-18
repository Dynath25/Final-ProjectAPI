<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\Movie;
use App\Models\MovieCategory;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $show_movie = Movie::all();
        return Response($show_movie, 200);
    }

    public function store(MovieRequest $request)
    {
        $categoryExists = movieCategory::where('id', $request->category_id)->exists();
        if (!$categoryExists) {
            return response()->json(['error' => 'Category not found'], 404);
        }
        Movie::create([
            'movie_name' => $request->movie_name,
            'category_id' => $request->category_id,
            'director' => $request->director,
            'description' => $request->description,
        ]);
        return response()->json('Data Added Successfully');
    }
 
    public function show($id)
    {
        $data = Movie::find($id);
        if (!$data) {
            return response()->json(['error' => 'Data not found'], 404);
        }
        return response()->json($data->toArray());
    }

    public function update(UpdateMovieRequest $request, $id)
    {
        $movie = Movie::find($id);
        if (!$movie) {
            return response()->json('Data not found', 404);
        }
        $movie->update([
            'movie_name' => $request->movie_name,
            'category_id' => $request->category_id,
            'description' => $request->description
        ]);
        return response()->json('Data Updated Successfully');
    }

    public function destroy($id)
    {
        $movie = Movie::find($id);
        if (!$movie) {
            return response()->json('Data not found', 404);
        }
        $movie->delete();
        return response()->json('Data Deleted Successfully');
    }
}
