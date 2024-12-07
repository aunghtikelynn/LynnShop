@extends('layouts.admin')
@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Items</h1>
        <a href="{{route('backend.items.create')}}" class="btn btn-primary float-end">Create Item</a>
    </div>
    <ol class="breadcrumb mb-4 ps-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="">Items</a></li>
        <li class="breadcrumb-item active">Item Create</li>
    </ol>
    <div class="card mb-4 m-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Posts List
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="codeNo" class="form-label fw-bold">Code No</label>
                <input type="text" class="form-control" id="codeNo" name="codeNo">
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
                <label for="instock" class="form-label fw-bold">Instock</label>
                <select name="instock" id="instock" class="form-select">
                    <option selected>Yes</option>
                    <option value="">No</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label fw-bold">Category</label>
                <select name="category" id="category" class="form-select">
                    <option selected>Choose Category</option>
                    <option value="">...</option>
                    <option value="">...</option>
                    <option value="">...</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label fw-bold">Description</label>
                <textarea class="form-control" id="description" name="description" rows="2"></textarea>
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">Create</button>
            </div>
        </div>
    </div>

@endsection