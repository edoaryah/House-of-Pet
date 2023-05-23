<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UlasanController extends Controller
{
    public function readUlasanCsv()
    {
        $komen = json_decode(file_get_contents(storage_path() . "/scrapedataminerig.json"), true); 
        return view('ulasan', compact('komen'));
    }
}