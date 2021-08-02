<?php

namespace App\Http\Controllers;

use App\Models\Classification;
use App\Http\ClassificationImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ClassificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classification = Classification::orderBy('points', 'desc')->paginate(10);

        return view('home',['classification'=>$classification]);
    }

    public function importClassification()
    {
        Excel::import(new ClassificationImport, request()->file('file'));
        return back()->with('message', 'Arquivo inserido com sucesso!');
    }
}