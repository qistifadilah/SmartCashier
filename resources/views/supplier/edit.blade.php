@extends('layouts.main')
@section('title', 'Edit | Supplier')
@section('content')
    <div class="row mb-2">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Supplier</h3>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        {{-- <a href="{{ route('auth.dashboard') }}">
                            Dashboard
                        </a> --}}
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a href="{{ route('supplier.index') }}">
                            Supplier
                        </a>
                    </li>
                    <li class="breadcrumb-item">Edit</li>
                </ol>
            </nav>
        </div>
    </div>
    {{-- card --}}
    <div class="card">

        {{-- card-header --}}
        <div class="card-header bg-light-warning pt-3 pb-2 mb-2">
            <h4 class="card-title">Form Supplier</h4>
        </div>

        {{-- card-body --}}
        <form action="{{ route('supplier.update', $supplier->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="nama_supplier">Nama Supplier</label>
                    <input type="text" id="nama_supplier" class="form-control" name="nama_supplier"
                        placeholder="Masukan Nama supplier" value="{{ $supplier->nama_supplier }}">
                </div>
                <div class="form-group">
                    <label for="no_telp">No. Telephone</label>
                    <input type="number" id="no_telp" class="form-control" name="no_telp"
                        placeholder="Masukan No. Telephone" value="{{ $supplier->no_telp }}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea id="alamat" class="form-control" name="alamat" placeholder="Masukan alamat">{{ $supplier->alamat }}</textarea>
                </div>
            </div>

            {{-- card footer --}}
            <div class="card-footer">
                <div class="row">
                    <div class="col-6 d-flex justify-content-start">
                        <button type="submit" class="btn btn-warning me-1 mb-1"
                            onclick="return confirm('Apakah anda yakin ingin mengubah data ini?')">
                            Update
                        </button>
                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <input type="button" class="btn btn-warning" value="Back"
                            onclick="window.location.href='{{ route('supplier.index') }}'">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
