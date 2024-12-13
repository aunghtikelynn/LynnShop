@extends('layouts.admin')
@section('content')
    <div class="container-fluid px-4">
        <div class="my-3">
            <h1 class="mt-4">Items</h1>
            <a href="{{route('backend.categories.create')}}" class="btn btn-primary float-end">Create Category</a>
        </div>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('backend.dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Categories</li>
        </ol>
        
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Categories List
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Imgae</th>
                            <th>#</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @php 
                            $i = 1;
                        @endphp
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$category->name}}</td>
                                <td><img src="{{$category->image}}" alt="" width="100"></td>
                                <td>
                                    <a href="" class="btn btn-sm btn-warning">Edit</a>
                                    <button class="btn btn-sm btn-danger delete" data-id="{{$category->id}}">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$categories->links()}}
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $('tbody').on('click','.delete',function(){
                alert('hello');
                let id = $(this).data('id');
                console.log(id);
            })
        })
    </script>
@endsection