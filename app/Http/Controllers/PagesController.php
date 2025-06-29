<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\News;
use App\Models\UMKM;
use App\Models\APBD;
use App\Models\Penduduk;
use Carbon\Carbon;

class PagesController extends Controller
{
    public function home()
    {
        Carbon::setLocale('id');

        $agendas = Agenda::whereDate('waktu', '>=', Carbon::today())->orderBy('waktu', 'asc')->get();
        $newest = News::orderBy('tanggal', 'desc')->first();
        $stats = Penduduk::orderBy('created_at', 'desc')->first();

        return view('home', compact('agendas', 'newest', 'stats'));
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

    public function kesenian() {
        return view('kesenian');
    }
    public function apbd() 
    {
        $apbd = APBD::orderBy('tahun', 'desc')->take(6)->get();
        
        return view('apbd', compact('apbd'));
    }

    public function lembaga($slug)
    {
        $lembagas = [
            'bpd' => [
                'nama' => 'Badan Permusyawaratan Desa',
                'gambar' => 'assets/lembaga/bpd.svg',
                'deskripsi' => 'Badan Permusyawaratan Desa (BPD) adalah lembaga yang berfungsi sebagai perwujudan demokrasi dalam penyelenggaraan pemerintahan desa. BPD memiliki tugas untuk menampung dan menyalurkan aspirasi masyarakat desa, serta melakukan pengawasan terhadap pelaksanaan peraturan desa dan kinerja kepala desa.',
            ],
            'lpmd' => [
                'nama' => 'Lembaga Pemberdayaan Masyarakat Desa',
                'gambar' => 'assets/lembaga/lpmd.svg',
                'deskripsi' => 'Lembaga Pemberdayaan Masyarakat Desa (LPMD) merupakan lembaga yang berperan dalam membantu pemerintah desa dalam perencanaan, pelaksanaan, dan pengembangan pembangunan desa. LPMD bertujuan untuk meningkatkan partisipasi masyarakat dalam pembangunan dan pemberdayaan potensi yang ada di desa.',
            ],
            'poskesdes' => [
                'nama' => 'Poskesdes',
                'gambar' => 'assets/lembaga/poskesdes.svg',
                'deskripsi' => 'Poskesdes adalah Pos Kesehatan Desa yang menyediakan pelayanan kesehatan dasar bagi masyarakat desa. Poskesdes menjadi ujung tombak dalam upaya promotif, preventif, kuratif, dan rehabilitatif kesehatan, serta mendukung program kesehatan pemerintah di tingkat desa.',
            ],
            'pkk' => [
                'nama' => 'Pemberdayaan Kesejahteraan Keluarga',
                'gambar' => 'assets/lembaga/pkk.svg',
                'deskripsi' => 'Pemberdayaan Kesejahteraan Keluarga (PKK) adalah gerakan nasional yang bertujuan untuk memberdayakan keluarga dalam meningkatkan kesejahteraan melalui berbagai program, seperti pendidikan, kesehatan, ekonomi, dan lingkungan hidup. PKK berperan aktif dalam membina keluarga agar lebih mandiri dan sejahtera.',
            ],
        ];

        if (!array_key_exists($slug, $lembagas)) {
            abort(404);
        }

        $lembaga = [
            'slug' => $slug,
            'nama' => $lembagas[$slug]['nama'],
            'gambar' => $lembagas[$slug]['gambar'],
            'deskripsi' => $lembagas[$slug]['deskripsi'],
        ];

        return view('lembaga', compact('lembaga'));
    }
}
