<!-- Horizontal Form -->
@extends('Layouts.master')
@section('content')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Patient</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form" style="text-align: center" method="post" action="{{route('detect.store')}}">
            @csrf
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
            <div class="card-body">

                <div class="mb-3">
                    <label  class="form-label">patient name</label>

                    <select name="patient_id">
                        <option value="">Choose patient</option>
                        @foreach($patients as $patient)
                            <option value="{{$patient->id}}">{{$patient->name}}</option>
                        @endforeach
                    </select>



                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">patient age</label>
                    <input type="number" name="age" class="form-control" style=" width: 900px;margin-right: 300px" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">patient Illness</label>
                    <input type="text" name="typeOfIllness" class="form-control" style=" width: 900px;margin-right: 300px" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">date Of  Detection</label>
                    <input type="date" name="dateOfToday" class="form-control" style=" width: 900px;margin-right: 300px" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">patient treatment</label>
                    <input type="text" name="treatment" class="form-control" style=" width: 900px;margin-right: 300px" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">date Of Consultation</label>
                    <input type="date" name="dateOfConsultation" class="form-control" style=" width: 900px;margin-right: 300px" >
                </div>
                <div class="mb-3">
                    <label  class="form-label">Doctor name</label>

                    <select name="doctor_id">
                        <option value="">Choose doctor</option>
                        @foreach($doctors as $doctor)
                            <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                        @endforeach
                    </select>



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
            <th > patient age</th>
            <th > patient Illness</th>
            <th > date Of  Detection</th>
            <th > patient treatment</th>
            <th > date Of Consultation</th>
            <th > doctor name</th>
            <th >print</th>

        </tr>
        </thead>
        <tbody>
        @foreach($detects as $detect)
            <tr>
                <th scope="row">{{$detect->id}}</th>
                @foreach($patients as $patient)
                <td>{{$patient->name}}</td>
                @endforeach
                <td>{{$detect->age}}</td>
                <td>{{$detect->typeOfIllness}}</td>
                <td>{{$detect->dateOfToday}}</td>
                <td>{{$detect->treatment}}</td>
                <td>{{$detect->dateOfConsultation}}</td>
                <td>{{$detect->doctors->name}}</td>
                <td><a class="btn btn-success" id="click" onclick="window.print()">Print</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

<script>
    function onclick(){


    document.getElementById($detects->id).innerHTML=window.print();}
</script>


@endsection

