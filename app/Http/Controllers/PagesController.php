<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\News;
use App\Models\UMKM;
use Carbon\Carbon;

class PagesController extends Controller
{
    public function home()
    {
        Carbon::setLocale('id');

        $agendas = Agenda::whereDate('waktu', '>=', Carbon::today())->orderBy('waktu', 'asc')->get();
        $newest = News::orderBy('tanggal', 'desc')->first();

        return view('home', compact('agendas', 'newest'));
    }

    public function newsIndex()
    {
        Carbon::setLocale('id');

        $news = News::orderBy('tanggal', 'desc')->get();
        
        return view('berita.index', compact('news'));
    }

    public function newsShow($slug)
    {
        $news = News::where('slug', $slug)->first();
        return view('berita.show', compact('news'));
    }

    public function umkmIndex()
    {
        $umkm = UMKM::orderBy('nama', 'asc')->get();

        return view('umkm.index', compact('umkm'));
    }    

    public function umkmShow($slug)
    {
        $umkm = UMKM::where('slug', $slug)->first();
        return view('umkm.show', compact('umkm'));
    }

    public function kepengurusan() {
        return view('kepengurusan');
    }
}
