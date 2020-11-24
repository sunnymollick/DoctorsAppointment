@extends('admin.layouts.default')
@section('content')
    <div class="container">
        <div class="jumbotron text-center">
            <h2>All Departments</h2> 
        </div>
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($department as $dept)
                <tr>
                    <td>{{ $dept->id}}</td>
                    <td>{{ $dept->name}}</td>
                    <td>
                    <button  class="btn btn-danger" data-toggle="modal" data-target="#modal{{$dept->id}}">Delete </button>
                       <div class="modal" id="modal{{$dept->id}}">
                            <div class="modal-dialog">
                               <div class="modal-content">
                                    <div class="modal-header">
                                    <h4 class="modal-title">Delete Confirmation!!</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                     Are you sure you want to delele <b><i>{{ $dept->name}}? </i></b>
                                    </div>
                                    <div class="modal-footer">
                                    <a  class="btn btn-success" href="{{ URL::to('delete-dept/'.$dept->id)}}">yes</a>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>

                @endforeach
                </tbody>
            </table>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


@endsection

@section('scripts')

@endsection