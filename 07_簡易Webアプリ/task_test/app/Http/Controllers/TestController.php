<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {

        // Eloquent(エロクアント)
        $values = Test::all();

        $count = Test::count();

        $first = Test::findOrFail(1);

        $whereTest = Test::where('text', '=', 'test')->get();


        //クエリビルダ
        $queryBuilder = DB::table('tests')->where('text', '=', 'test')->select('id', 'text')->get();

        dd($values, $count, $first, $whereTest, $queryBuilder);

        return view('tests.test', compact('values'));

        //エロクアント VS クエリビルダ
        // エロクアントの方がリレーション、スコープが使いやすいため前者がおすすめ
    }
}
