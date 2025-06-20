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
        $news = News::where('slug', $slug)->get();
        return $news;
    }

    public function umkmIndex()
    {
        $umkm = UMKM::orderBy('nama', 'asc')->get();
        // $umkm = collect([
        //     [
        //     'id' => 1,
        //     'nama' => 'UMKM Sari Rasa',
        //     'owner' => 'Ibu Sari',
        //     'deskripsi' => 'Menjual aneka kue tradisional dan jajanan pasar.',
        //     'image' => 'sari_rasa.jpg',
        //     ],
        //     [
        //     'id' => 2,
        //     'nama' => 'UMKM Batik Limo',
        //     'owner' => 'Pak Budi',
        //     'deskripsi' => 'Produsen batik tulis khas Cepokolimo.',
        //     'image' => 'batik_limo.jpg',
        //     ],
        //     [
        //     'id' => 3,
        //     'nama' => 'UMKM Kopi Cepoko',
        //     'owner' => 'Bu Rina',
        //     'deskripsi' => 'Kopi robusta asli hasil petani lokal.',
        //     'image' => 'kopi_cepoko.jpg',
        //     ],
        // ]);

        return view('umkm.index', compact('umkm'));
    }    
}
