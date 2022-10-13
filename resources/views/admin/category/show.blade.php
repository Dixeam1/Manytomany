@extends('layout/layout')
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            CATEGORY
        </div>
        <div class="card-body">
            <div class=" mb-0">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($collection as $item)
                        <tr>
                            <th scope="row">{{$i++}}</th>
                            <td>{{$item->name}}</td>
                            <td>{{$item->slug}}</td>
                            <td>
                                <a href="delete/{{$item->id}}">Delete</a>
                                <a class="ml-4" href="edit/{{$item->id}}">Edit</a>

                            </td>
                        </tr>    
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
        
        @endsection()
        
        
        