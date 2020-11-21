@extends('admin.layouts.default')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Add Department</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('create-department') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="col-md-8 offset-md-2">
                            <input type="text" name="department" class="form-control" placeholder="Enter Department">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8 offset-md-2">
                            <input type="submit" value="Add" class="btn btn-block btn-primary" >
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
