<!-- Horizontal Form -->
@extends('Layouts.master')
@section('content')
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Clinks</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form class="form" style="text-align: center" method="post" action="{{route('clink.store')}}">
        @csrf
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
        @endif
        <div class="card-body">

                <div class="mb-3" style="">
                    <label for="exampleInputEmail1" class="form-label">Clink Name</label>
                    <input type="text" name="name" class="form-control" style=" width: 900px;margin-right: 300px"  >

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Clink Phone</label>
                    <input type="number" name="phone" class="form-control" style=" width: 900px;margin-right: 300px" >
                </div>

                <button type="submit" class="btn btn-primary">Add</button>

        </div>
    </form>
</div>
<table class="table table-success table-active table-primary table-bordered table-head-fixed">
    <thead>
    <tr>
        <th >#</th>
        <th >name</th>
        <th >phone</th>

    </tr>
    </thead>
    <tbody>
    @foreach($clinks as $clink)
        <tr>
            <th scope="row">{{$clink->id}}</th>
            <td>{{$clink->name}}</td>
            <td>{{$clink->phone}}</td>
        </tr>
    @endforeach
    </tbody>
</table>

@endsection
