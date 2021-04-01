<?php

namespace App\Http\Controllers;


use App\Pendaftaran;
use App\Jurusan;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    private $pendaftaran;
        public function __construct(Pendaftaran $pendaftaran)
        {
            $this->pendaftaran=$pendaftaran;
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftaran=$this->pendaftaran->getJoinJurusan();
        return view('pendaftaran.index',['pendaftaran'=>$pendaftaran]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pendaftaran=$this->pendaftaran->getJoinJurusan();
        $jurusan = Jurusan::All();
        return view('pendaftaran.create',['pendaftaran'=>$pendaftaran,'jurusan' => $jurusan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nis'=>'required',
            'nama'=>'required',
            'jk'=>'required',
            'tempat_lahir'=>'required',
            'tgl_lahir'=>'required',
            'alamat'=>'required',
            'asal_sekolah'=>'required',
            'kelas'=>'required',
            'id_jurusan'=>'required',
        ]);

        Pendaftaran::create($request->all());
        return redirect('/pendaftaran')->with('sukses','Data Berhasil diSimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pendaftaran=Pendaftaran::find($id);
        $jurusan=Jurusan::all();
        return view('pendaftaran/show',['pendaftaran'=>$pendaftaran,'jurusan'=>$jurusan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pendaftaran=Pendaftaran::find($id);
        $jurusan=Jurusan::all();
        return view('pendaftaran/edit',['pendaftaran'=>$pendaftaran,'jurusan'=>$jurusan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pendaftaran=Pendaftaran::find($id);
        $pendaftaran->update($request->all());
        return redirect('/pendaftaran')->with('sukses','Data Berhasil diEdit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pendaftaran=Pendaftaran::find($id);
        $pendaftaran->delete();
        return redirect('/pendaftaran')->with('sukses','Data Berhasil diHapus');
    }
}
