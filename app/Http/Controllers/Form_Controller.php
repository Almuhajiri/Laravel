<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Buku;
class Form_Controller extends Controller
{
  public function input()
  {
    return view('/form');
  }
  public function inputprocess(Request $request)
  {
    $request->validate([
      'judul'=>'required',
      'penerbit'=>'required',
      'tahun_terbit'=>'required|integer',
      'pengarang'=>'required'
    ]);
    $buku = new Buku([
        'judul' => $request->get('judul'),
        'penerbit' => $request->get('penerbit'),
        'tahun_terbit' => $request->get('tahun_terbit'),
        'pengarang' => $request->get('pengarang'),
    ]);
    $buku->save();
    // dd($request);
    return redirect('/view')->with('Success','Data buku telah ditambahkan');
  }
  public function view()
  {
    $buku = Buku::all();
    return view('view', compact('buku'));
  }
  public function destroy($id)
  {
    $buku = Buku::find($id);
    $buku->delete();
    return redirect('/view');
  }
  public function edit($id)
  {
    $buku = Buku::find($id);
    return view('form', compact('buku'));
  }
  public function update(Request $request, $id)
  {
    $request->validate([
      'judul'=>'required',
      'penerbit'=>'required',
      'tahun_terbit'=>'required|integer',
      'pengarang'=>'required'
    ]);
    $buku = Buku::find($id);
    $buku->judul = $request->get('judul');
    $buku->penerbit = $request->get('penerbit');
    $buku->tahun_terbit = $request->get('tahun_terbit');
    $buku->pengarang = $request->get('pengarang');
    $buku->save();
    // dd($request);
    return redirect('/view')->with('Success','Data buku telah diperbarui');
  }
}
