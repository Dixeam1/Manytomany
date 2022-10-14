@extends('layout/layout')
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            ADD PRODUCT
        </div>
        <div class="card-body">
            <div class=" mb-0">
                <form method="POST" action="{{url('product/create')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">product Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter product Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Select Category</label>
                        <select class="form-control" name="category_id">
                            @foreach ($categories as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">product Price</label>
                        <input type="text" name="price" class="form-control" id="exampleInput1" placeholder="Enter product Price">
                    </div>
                    
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection()
