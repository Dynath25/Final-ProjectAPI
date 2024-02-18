<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieCategoryRequest;
use App\Http\Requests\UpdateMovieCategoryRequest;
use App\Models\MovieCategory;
use Illuminate\Http\Request;

class MovieCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show_category = movieCategory::all();
        return Response($show_category, 200);
    }

    public function store(MovieCategoryRequest $request)
    {
        movieCategory::create([
            'category'=> $request->category,
        ]);
        return response()->json('Data Added Successfully');
    }

    public function show($id)
    {
        $data = movieCategory::find($id);
        if (!$data) {
            return response()->json(['error' => 'Data not found'], 404);
        }
        return response()->json($data->toArray());
    }

    public function update(UpdateMovieCategoryRequest $request, $id)
    {
        $movieCategory = movieCategory::find($id);
        if (!$movieCategory) {
            return response()->json('Data not found', 404);
        }
        $movieCategory->update([
            'category' => $request->category,
        ]);
        return response()->json('Data Updated Successfully');
    }

    public function destroy(movieCategory $movieCategory, $id)
    {
        $movieCategory = movieCategory::find($id);
        if (!$movieCategory) {
            return response()->json('Data not found', 404);
        }
        $movieCategory->delete();
        return response()->json('Data Deleted Successfully');
    }
}
