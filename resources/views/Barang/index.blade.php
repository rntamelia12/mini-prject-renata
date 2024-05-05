@extends('layouts.app')

@section('content')
    <div class="container page-index">
        <div class="row">
            <div class="col">
                <h2 class="pb-2">Barang</h2>
            </div>
            <div class="col-auto">
                <a class="btn-add btn btn-warning" href="{{ route('barangs.create') }}">Tambah Barang</a>
            </div>
        </div>
        <table class="table mt-2 table-warning table-bordered">
            <thead>
                <tr class="table-warning">
                    <th scope="col">Kode Barang</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Satuan</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barang as $brg)
                    <tr>
                        <td>{{ $brg->kode_barang }}</td>
                        <td>{{ $brg->nama_barang }}</td>
                        <td>{{ $brg->harga_barang}}</td>
                        <td>{{ $brg->satuan->kode_satuan }}</td>
                        <td>{{ $brg->deskripsi_barang }}</td>
                        <td>
                            <a class="btn btn-sm  btn-outline-primary" href="{{ route('barangs.show', $brg->id) }}">Detail</a>
                            <a class="btn btn-sm  btn-outline-warning" href="{{ route('barangs.edit', $brg->id) }}">Edit Brg</a>

                            <form action="{{ route('barangs.destroy', $brg->id) }}" method="POST" type="button" class="btn btn-outline-danger p-0" onsubmit="return confirm('Yakin Hapus Data ?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm  btn-outline-danger m-0 border-0">Hapus</button>
                            </form>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
    </div>



@endsection
