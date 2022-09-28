<!-- Horizontal Form -->
@extends('Layouts.master')
@section('content')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Patient</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form" style="text-align: center" method="post" action="{{route('patient.store')}}">
            @csrf
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
            <div class="card-body">

                <div class="mb-3" style="">
                    <label for="exampleInputEmail1" class="form-label">patient Name</label>
                    <input type="text" name="name" class="form-control" style=" width: 900px;margin-right: 300px"  >

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">patient Phone</label>
                    <input type="number" name="phone" class="form-control" style=" width: 900px;margin-right: 300px" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">patient Email</label>
                    <input type="email" name="email" class="form-control" style=" width: 900px;margin-right: 300px" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">patient address</label>
                    <input type="text" name="address" class="form-control" style=" width: 900px;margin-right: 300px" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">patient age</label>
                    <input type="text" name="age" class="form-control" style=" width: 900px;margin-right: 300px" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Doctor name</label>

                    <input list="select" name="doctor_id">
                    <datalist id="select">
                        @foreach($doctors as $doctor)
                            <option value="">Choose doctor</option>
                            <option value="{{$doctor->id}}">{{$doctor->name}}</option>
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
            <th > patient Name</th>
            <th > patient phone</th>
            <th > patient age</th>
            <th > patient email</th>
            <th > patient address</th>
            <th > doctor name</th>

        </tr>
        </thead>
        <tbody>
        @foreach($patients as $patient)
            <tr>
                <th scope="row">{{$patient->id}}</th>
                <td>{{$patient->name}}</td>
                <td>{{$patient->phone}}</td>
                <td>{{$patient->email}}</td>
                <td>{{$patient->age}}</td>
                <td>{{$patient->address}}</td>
                <td>{{$patient->doctors->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>




@endsection

