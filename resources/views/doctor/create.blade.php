<!-- Horizontal Form -->
@extends('Layouts.master')
@section('content')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Doctor</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form" style="text-align: center" method="post" action="{{route('doctor.store')}}">
            @csrf
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
            <div class="card-body">

                <div class="mb-3" style="">
                    <label for="exampleInputEmail1" class="form-label">Doctor Name</label>
                    <input type="text" name="name" class="form-control" style=" width: 900px;margin-right: 300px"  >

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Doctor Phone</label>
                    <input type="number" name="phone" class="form-control" style=" width: 900px;margin-right: 300px" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Doctor Email</label>
                    <input type="email" name="email" class="form-control" style=" width: 900px;margin-right: 300px" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Doctor Salary</label>
                    <input type="text" name="salary" class="form-control" style=" width: 900px;margin-right: 300px" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Doctor Specialization</label>
                    <input type="text" name="Specialization" class="form-control" style=" width: 900px;margin-right: 300px" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">clink id</label>

                        <input list="select" name="clink_id">
                    <datalist id="select">
                        @foreach($clinks as $clink)
                        <option value="">Choose Clink</option>
                        <option value="{{$clink->id}}">{{$clink->name}}</option>
                        @endforeach
                    </datalist>



                </div>

                <button type="submit" class="btn btn-primary">Add</button>

            </div>
        </form>
    </div>

    <table class="table table-success table-active table-hover table-primary table-bordered table-head-fixed">
        <thead>
        <tr>
            <th >#</th>
            <th > Doctor name</th>
            <th > Doctor phone</th>
            <th > Doctor salary</th>
            <th > Doctor email</th>
            <th > Doctor Specialization</th>

        </tr>
        </thead>
        <tbody>
        @foreach($doctors as $doctor)
        <tr>
            <th scope="row">{{$clink->id}}</th>
            <td>{{$doctor->name}}</td>
            <td>{{$doctor->phone}}</td>
            <td>{{$doctor->salary}}</td>
            <td>{{$doctor->email}}</td>
            <td>{{$doctor->Specialization}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>




@endsection

