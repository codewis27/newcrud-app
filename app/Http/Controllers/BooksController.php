<?php

namespace App\Http\Controllers;

use App\Repository\BooksRepository;
use App\Repository\EloquentBooksRepository;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    private $eloquentBooks;

    public function __construct(EloquentBooksRepository $eloquentBooks)
    {
        $this->eloquentBooks = $eloquentBooks;
    }

    public function index()
    {
        $title = "Data Buku";
        $data = $this->eloquentBooks->all();
        return view('books', compact('data', 'title'));
    }
    public function formtambahdata()
    {
        $title = "Tambah Buku";
        return view('formtambahdata', compact('title'));
    }
    public function tambahdata(Request $request)
    {
        $this->eloquentBooks->create($request->all());
        return redirect()->route('books')->with('success', 'Data berhasil ditambahkan');
    }
    public function formeditdata($id)
    {
        $title = "Edit Buku";
        $data = $this->eloquentBooks->getbyid($id);
        return view('formeditdata', compact('data', 'title'));
    }
    public function updatedata(Request $request, $id)
    {
        $this->eloquentBooks->update($id, $request->all());
        return redirect()->route('books')->with('success', 'Data berhasil diubah');
    }
    public function deletedata($id)
    {
        $this->eloquentBooks->delete($id);
        return redirect()->route('books')->with('success', 'Data berhasil dihapus');
    }
}
