@extends('layouts.admin')
@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Create Items</h1>
        <a href="{{route('backend.items.index')}}" class="btn btn-danger float-end">Cancel</a>
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
                    <input type="text" class="form-control @error('code_no') is-invalid @enderror" value="{{old('code_no')}}" id="codeNo" name="code_no">
                    @error('code_no')
                        <div class="invalid-feedback">{{ $message}} </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" id="name" name="name">
                    @error('name')
                        <div class="invalid-feedback">{{ $message}} </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label fw-bold">Image</label>
                    <input type="file" accept="image/*" class="form-control @error('image') is-invalid @enderror" value="{{old('image')}}" id="image" name="image">
                    @error('image')
                        <div class="invalid-feedback">{{ $message}} </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label fw-bold">Price</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" value="{{old('price')}}" id="price" name="price">
                    @error('price')
                        <div class="invalid-feedback">{{ $message}} </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="discount" class="form-label fw-bold">Discount</label>
                    <input type="text" class="form-control @error('discount') is-invalid @enderror" value="{{old('discount')}}" id="discount" name="discount">
                    @error('discount')
                        <div class="invalid-feedback">{{ $message}} </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="inStock" class="form-label fw-bold">Instock</label>
                    <select name="in_stock" id="in_stock" class="form-select @error('in_stock') is-invalid @enderror">

                        <option selected value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                    @error('in_stock')
                        <div class="invalid-feedback">{{ $message}} </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label fw-bold">Category</label>
                    <select name="category_id" id="category_id" class="form-select @error('category_id') is-invalid @enderror">
                        <option value="" selected>Choose Category</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" {{old('category_id') == $category->id ? 'selected':''}}>{{$category->name}}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="invalid-feedback">{{ $message}} </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label fw-bold">Description</label>
                    <textarea class="form-control @error('code_no') is-invalid @enderror" id="description" name="description" rows="2">{{old('description')}}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message}} </div>
                    @enderror
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Create</button>
                </div>
            </form>
        </div>
    </div>

@endsection