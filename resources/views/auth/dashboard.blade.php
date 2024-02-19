@extends('layouts.main')
@section('title', 'Dashboard')

@section('content')
    {{-- <header class="bg-primary mb-3 py-3">
        <div class="container">
            <h4 class="text-white text-center">
                Selamat Datang {{ Auth::user()->name }} di InventaSchool !
            </h4>
        </div>
    </header> --}}
    <div class="content-wrapper container">
        @can('isAdmin')
            <div class="page-content">
            <section class="row justify-content-between">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-center">
                                <div class="stats-icon green mb-2">
                                    <i class="iconly-boldProfile"></i>
                                </div>
                                <div class="ms-3 name">
                                    <h5 class="font-bold">Total Transaction</h5>
                                    <h6 class="text-muted mb-0">123</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-center">
                                <div class="stats-icon blue mb-2">
                                    <i class="iconly-boldProfile"></i>
                                </div>
                                <div class="ms-3 name">
                                    <h5 class="font-bold">Product Sold</h5>
                                    <h6 class="text-muted mb-0">123</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-center">
                                <div class="stats-icon purple mb-2">
                                    <i class="iconly-boldProfile"></i>
                                </div>
                                <div class="ms-3 name">
                                    <h5 class="font-bold">Total Sales</h5>
                                    <h6 class="text-muted mb-0">Rp250,000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @endcan
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
                            <div class="col-3 d-flex">
                                <a href="" class="btn btn-primary">
                                    <i class="bi bi-plus-lg"></i>
                                    New Transaction
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table" id="table1">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Loc Cashier</th>
                                    <th>Date - Time</th>
                                    <th>Piece</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection