<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\anime;

class ClientController extends Controller
{
    public function index()
    {
        $data = anime::orderBy('tahun_rilis', 'desc')->paginate(10);
        return view('client.index', compact('data'));
    }

    public function show($id)
    {
        $data = anime::where('id', $id)->first();
        return view('client.detail', compact('data'));
    }

    public function lists(Request $request)
    {
        $data = anime::orderBy('tahun_rilis', 'desc')->paginate(10);
        $query = $request->input('search');

        $results = anime::where('judul', 'like', '%' . $query . '%')->get();
        return view('client.list', compact('data', 'results'));
    }
}
