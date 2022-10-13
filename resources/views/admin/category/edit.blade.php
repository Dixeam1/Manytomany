@extends('layout/layout')
@section('content')
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            CATEGORY
        </div>
        <div class="card-body">
            <div class=" mb-0">
                
                <form method="POST" action="../update/{{$collection->id}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1" >Category Name</label>
                        <input type="text" class="form-control" name="name" value="{{$collection->name}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category Name">
                    </div>
                    
                    
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection()


