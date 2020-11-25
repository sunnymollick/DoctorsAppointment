@extends('website.layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2 class="text-center text-dark">Your Appointment Details</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Serial No</th>
                            <th scope="col">Patient Name</th>
                            <th scope="col">Doctor Name</th>
                            <th scope="col">Department Name</th>
                            <th scope="col">Appointment Day</th>
                            <th scope="col">Shift</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                          <th>SM-FA :: {{ $appointments->id }}</th>
                          <td>{{ $appointments->patient_name }}</td>
                          <td>{{ $appointments->doc_name }}</td>
                          <td>{{ $appointments->dept }}</td>
                          <td>{{ $appointments->appointment_day }}</td>
                          <td>
                            @if($appointments->shift == 1)
                                <span>Morning</span>
                            @else
                                <span>Evening</span>
                            @endif
                            </td>
                          </tr>
                        </tbody>
                      </table>


                      </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
