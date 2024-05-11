<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        // Eloquent (エロくアント)
        $values = Test::all();

        $count = Test::count();

        $first = Test::findOrFail(1);

        $whereBBB = Test::where('text', '=', 'bbb')->get();

        // クエリビルダ
        $queryBuilder = DB::table('tests')->where('text', '=', 'bbb')
            ->select('id', 'text')->get();

        dd($values, $count, $first, $whereBBB, $queryBuilder);


        // dd($values);

        return view('tests.test', compact('values'));
    }
}
