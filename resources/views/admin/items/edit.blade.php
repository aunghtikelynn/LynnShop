@extends('layouts.admin')
@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Items</h1>
        <a href="{{route('backend.items.index')}}" class="btn btn-danger float-end">Cancel</a>
    </div>
    <ol class="breadcrumb mb-4 ps-4">
        <li class="breadcrumb-item"><a href="{{route('backend.dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('backend.items.index')}}">Items</a></li>
        <li class="breadcrumb-item active">Edit Item</li>
    </ol>
    <div class="card mb-4 m-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Edit Item
        </div>
        <div class="card-body">
            <form action="{{route('backend.items.update',$item->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="codeNo" class="form-label fw-bold">Code No</label>
                    <input type="text" class="form-control @error('code_no') is-invalid @enderror" value="{{$item->code_no}}" id="codeNo" name="code_no">
                    @error('code_no')
                        <div class="invalid-feedback">{{ $message}} </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{$item->name}}" id="name" name="name">
                    @error('name')
                        <div class="invalid-feedback">{{ $message}} </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="image-tab" data-bs-toggle="tab" data-bs-target="#image-tab-pane" type="button" role="tab" aria-controls="image-tab-pane" aria-selected="true">Image</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="new_image-tab" data-bs-toggle="tab" data-bs-target="#new_image-tab-pane" type="button" role="tab" aria-controls="new_image-tab-pane" aria-selected="false">New Image</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="image-tab-pane" role="tabpanel" aria-labelledby="image-tab" tabindex="0">
                            <img src="{{$item->image}}" alt="" class="w-25 h-25 my-3">
                            <input type="hidden" name="old_image" id="" value="{{$item->image}}"> 
                        </div>
                        <div class="tab-pane fade" id="new_image-tab-pane" role="tabpanel" aria-labelledby="new_image-tab" tabindex="0">
                            <input type="file" accept="image/*" class="form-control my-3 @error('image') is-invalid @enderror" value="{{old('image')}}" id="image" name="image">
                        </div>
                    </div>
                    
                    @error('image')
                        <div class="invalid-feedback">{{ $message}} </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label fw-bold">Price</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" value="{{$item->price}}" id="price" name="price">
                    @error('price')
                        <div class="invalid-feedback">{{ $message}} </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="discount" class="form-label fw-bold">Discount</label>
                    <input type="text" class="form-control @error('discount') is-invalid @enderror" value="{{$item->discount}}" id="discount" name="discount">
                    @error('discount')
                        <div class="invalid-feedback">{{ $message}} </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="inStock" class="form-label fw-bold">Instock</label>
                    <select name="in_stock" id="in_stock" class="form-select @error('in_stock') is-invalid @enderror">

                        <option value="1" {{$item->in_stock == 1 ? 'selected':''}}>Yes</option>
                        <option value="0" {{$item->in_stock == 0 ? 'selected':''}}>No</option>
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
                            <option value="{{$category->id}}" {{$item->category_id == $category->id ? 'selected':''}}>{{$category->name}}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="invalid-feedback">{{ $message}} </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label fw-bold">Description</label>
                    <textarea class="form-control @error('code_no') is-invalid @enderror" id="description" name="description" rows="2">{{$item->description}}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message}} </div>
                    @enderror
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-warning" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>

@endsection