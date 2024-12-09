@extends('layouts.admin')
@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Items</h1>
        <a href="{{route('backend.items.create')}}" class="btn btn-primary float-end">Create Item</a>
    </div>
    <ol class="breadcrumb mb-4 ps-4">
        <li class="breadcrumb-item"><a href="{{route('backend.dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('backend.items.index')}}">Items</a></li>
        <li class="breadcrumb-item active">Item Create</li>
    </ol>
    <div class="card mb-4 m-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Posts List
        </div>
        <div class="card-body">
            <form action="{{route('backend.items.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="codeNo" class="form-label fw-bold">Code No</label>
                    <input type="text" class="form-control" id="codeNo" name="code_no">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label fw-bold">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label fw-bold">Price</label>
                    <input type="text" class="form-control" id="price" name="price">
                </div>
                <div class="mb-3">
                    <label for="discount" class="form-label fw-bold">Discount</label>
                    <input type="text" class="form-control" id="discount" name="discount">
                </div>
                <div class="mb-3">
                    <label for="inStock" class="form-label fw-bold">Instock</label>
                    <select name="in_stock" id="in_stock" class="form-select">
                        <option selected>Yes</option>
                        <option value="">No</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label fw-bold">Category</label>
                    <select name="category_id" id="category_id" class="form-select">
                        <option selected>Choose Category</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label fw-bold">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="2"></textarea>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Create</button>
                </div>
            </form>
        </div>
    </div>

@endsection