<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\News;
use Carbon\Carbon;

class PagesController extends Controller
{
    public function home()
    {
        Carbon::setLocale('id');

        $agendas = Agenda::orderBy('tanggal', 'asc')->get();
        $newest = News::orderBy('date', 'desc')->first();

        return view('home', compact('agendas', 'newest'));
    }
}
