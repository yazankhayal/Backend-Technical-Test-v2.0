<?php

namespace App\Http\Controllers;

use App\Imports\ExcelActorsImport;
use App\Imports\ExcelGenresImport;
use App\Imports\ExcelKeywordsImport;
use App\Imports\ExcelSingleImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class HomePageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function test1()
    {
        return view('test1');
    }

    public function test2()
    {
        return view('test2');
    }

    public function import_genres(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'file' => 'required|file|mimes:csv,txt',
        ]);
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $object = array();
        Excel::import(new ExcelGenresImport($object),request()->file('file'));
        return back()->with("success",'Generate JSON');
    }

    public function import_keywords(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'file' => 'required|file|mimes:csv,txt',
        ]);
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $object = array();
        Excel::import(new ExcelKeywordsImport($object),request()->file('file'));
        return back()->with("success",'Generate JSON');
    }

    public function import_actors(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'file' => 'required|file|mimes:csv,txt',
        ]);
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $object = array();
        Excel::import(new ExcelActorsImport($object),request()->file('file'));
        return back()->with("success",'Generate JSON');
    }

    public function import_movies(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'file' => 'required|file|mimes:csv,txt',
        ]);
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $object = array();
        Excel::import(new ExcelSingleImport($object),request()->file('file'));
        return back()->with("success",'Generate JSON');
    }
}
