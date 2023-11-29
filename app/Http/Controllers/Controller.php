<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('index');
    }

    public function datalist()
    {
        return view('Page.Datalist');
    }

    public function importfile()
    {
        $Date = DB::table('log_price')->distinct()->orderBy('DateUpdate_Old', 'Desc')->pluck('DateUpdate_Old');

        return view('Page.importfile', compact('Date'));
    }

    public function Change()
    {
        return view('Page.Change');
    }

    public function Product()
    {
			return view('Page.Product');
    }

    public function Customer()
    {
			return view('Page.Customer');
    }

    public function DC1()
    {
			return view('Page.DC1');
    }
}