@extends('layouts.main')
@section('title', 'Dashboard')

@section('content')
    <div class="content-wrapper container">
        <div class="page-content">
            <section class="row justify-content-between">
                <div class="col-3">
                    <div class="card">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-center">
                                <div class="stats-icon green mb-2">
                                    <i class="iconly-boldProfile"></i>
                                </div>
                                <div class="ms-3 name">
                                    <h6 class="text-muted font-semibold">Transaction</h6>
                                    <h5 class="font-extrabold mb-0">112</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-center">
                                <div class="stats-icon blue mb-2">
                                    <i class="iconly-boldProfile"></i>
                                </div>
                                <div class="ms-3 name">
                                    <h6 class="text-muted font-semibold">Product Sold</h6>
                                    <h5 class="font-extrabold mb-0">1.427</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-center">
                                <div class="stats-icon purple mb-2">
                                    <i class="iconly-boldProfile"></i>
                                </div>
                                <div class="ms-3 name">
                                    <h6 class="text-muted font-semibold">Income</h6>
                                    <h5 class="font-extrabold mb-0">2,3M</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-center">
                                <div class="stats-icon red mb-2">
                                    <i class="iconly-boldProfile"></i>
                                </div>
                                <div class="ms-3 name">
                                    <h6 class="text-muted font-semibold">Total Fail</h6>
                                    <h5 class="font-extrabold mb-0">5</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header pb-2">
                        <div class="row">
                            <div class="col-9 d-flex">
                                <h5 class="card-title">
                                    Deals Detail
                                </h5>
                            </div>
                            {{-- <div class="col-3 d-flex">
                                <a href="{{ route('supplier.create') }}" class="btn btn-primary">
                                    <i class="bi bi-plus-lg"></i>
                                    Add Product
                                </a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table" id="table1">
                            <thead>
                                <tr>
                                    <th>Product Name </th>
                                    <th>Location</th>
                                    <th>Date - Time</th>
                                    <th>Piece</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Silverqueen</td>
                                    <td>Cashier 1</td>
                                    <td>14.02.2024 - 02.14</td>
                                    <td>1140</td>
                                    <td>Rp14.000</td>
                                    <td>
                                        <span class="badge bg-success text-white">succes</span>
                                    </td>
                                </tr>
                                {{-- @forelse ($supplier as $key => $value)
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
                        @endforelse --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
