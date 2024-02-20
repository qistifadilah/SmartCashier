@extends('layouts.main')
@section('title', 'Create Supplier')

@section('content')
    <div class="row mb-2">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Add New Supplier</h3>
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">
                            Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a href="#">
                            Supplier
                        </a>
                    </li>
                    <li class="breadcrumb-item">Create</li>
                </ol>
            </nav>
        </div>
    </div>

    {{-- card --}}
    <div class="card">

        {{-- card-header --}}
        {{-- <div class="card-header pt-3 pb-2 mb-2">
            <h4 class="card-title">Form Supplier</h4>
        </div> --}}

        {{-- card-body --}}
        <form action="{{ route('supplier.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="supplier_name">Supplier Name</label>
                            <input type="text" id="supplier_name" class="form-control" name="supplier_name"
                                placeholder="Masukan nama supplier" value="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="no_telp">No. Telephone</label>
                            <input type="number" id="no_telp" class="form-control" name="no_telp"
                                placeholder="ex. 081234567896" value="">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea id="alamat" class="form-control" name="alamat" placeholder="Masukan alamat"></textarea>
                </div>
            </div>

            {{-- card footer --}}
            <div class="card-footer">
                <div class="row">
                    <div class="col-6 d-flex justify-content-start">
                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <input type="button" class="btn btn-primary" value="Back"
                            onclick="window.location.href='{{ route('supplier.index') }}'">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
