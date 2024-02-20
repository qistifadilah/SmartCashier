@extends('layouts.main')
@section('title', 'Create Product')

@section('content')
    <div class="row mb-2">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Add New Product</h3>
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
                            Product
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
            <h4 class="card-title">Form Product</h4>
        </div> --}}

        {{-- card-body --}}
        <form action="{{ route('product.store') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="mb-3">
                            <div class="form-group">
                                <label for="formFile">Upload Photo</label>
                                <input class="form-control" type="file" id="formFile" name="photo">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="product_name">Product Name</label>
                            <input type="text" id="product_name" class="form-control" name="product_name"
                                placeholder="Enter product name" value="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="product_code">Product Code</label>
                            <input type="text" id="product_code" class="form-control" name="product_code"
                                placeholder="Enter code" value="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="product_price">Product Price</label>
                            <input type="number" id="product_price" class="form-control" name="product_price"
                                placeholder="Rp10.000" value="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="stock">Stock</label>
                            <input type="number" id="stock" class="form-control" name="stock" placeholder="1"
                                value="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <select name="category_id" id="category"
                                class="form-select @error('category_id') is-invalid @enderror">
                                <option disabled selected>--Pilih Salah Satu--</option>
                                @forelse ($category as $key => $value)
                                    <option value="{{ $value->id }}">{{ $value->category }}</option>
                                @empty
                                    <option disabled>--Data Masih Kosong--</option>
                                @endforelse
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Product Description</label>
                    <textarea id="description" class="form-control" name="description" placeholder="Enter description"></textarea>
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
                            onclick="window.location.href='{{ route('product.index') }}'">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
