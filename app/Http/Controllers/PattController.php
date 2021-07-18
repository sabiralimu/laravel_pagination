<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patt;

class PattController extends Controller
{
    public function insert()
    {
        $std = new patt;
        $std->fname = 'mr.';
        $std->lname = 'anu';
        $std->email = 'mr@gmail.com';
        $std->password = 'mr.ana';
        $std->address = 'mrar basa';
        $std->image = 'pic';
        $std->city = 'ng';
        $std->company = 'selesh';
        $std->phone = '017548695';
        $std->post_code = 'g.p.o-234';
        $std->save();
    }

    public function select()
    {
        $std = new patt;
        $data = $std->paginate(4);
        return view('file.index', compact('data'));
    }
}