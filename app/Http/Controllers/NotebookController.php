<?php

namespace App\Http\Controllers;

use App\Http\Requests\NotebookRequest;
use App\Models\Notebook;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class NotebookController extends Controller
{

    public function index()
    {
        $notebooks = Notebook::all();
        return response()->json($notebooks);
    }


    public function store(NotebookRequest $request)
    {
        $notebook = Notebook::create($request->validated());
        return  $notebook;
    }


    public function show($id)
    {
        $notebook = Notebook::find($id);
        return response()->json($notebook);
    }

    public function update($id, NotebookRequest $request)
    {
        $notebook = Notebook::find($id);
        $notebook->update($request->validated());
        return $notebook;
    }


    public function destroy($id)
    {
        $notebook = Notebook::find($id);
        $notebook->delete();
    }
}
