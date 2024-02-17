@extends('layouts.main')
@section('title', 'Supplier')
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
                        Supplier
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header pb-2">
                <div class="row">
                    <div class="col-9 d-flex">
                        <h5 class="card-title">
                            Data Supplier
                        </h5>
                    </div>
                    <div class="col-3 d-flex">
                        <a href="{{ route('supplier.create') }}" class="btn btn-primary">
                            <i class="bi bi-plus-lg"></i>
                            Supplier
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Supplier</th>
                            <th>No. Telephone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($supplier as $key => $value)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $value->nama_supplier }}</td>
                                <td>{{ $value->no_telp }}</td>
                                <td>
                                    <a href="{{ route('supplier.show', $value->id) }}" class="btn btn-info"
                                        data-toggle="tooltip" data-placement="top" title="info">
                                        <i class="bi bi-info-circle"></i>
                                    </a>
                                    <a href="{{ route('supplier.edit', $value->id) }}" class="btn btn-warning"
                                        data-toggle="tooltip" data-placement="top" title="edit">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <form action="{{ route('supplier.destroy', $value->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" data-toggle="tooltip" data-placement="top"
                                            title="delete"
                                            onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>Data masih kosong</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
