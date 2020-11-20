@extends('website.layouts.default')
@section('content')
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">LOGIN</h2>
                    <form action="mail.html" method="post">
                            <div class="col-lg-12 form_group">
                            <label for="email">Email address</label>
                                <input name="email" 
                                    class="input--style-2" required="" type="email">
                            </div> 
                            <div class="col-lg-12 form_group">
                            <label for="password">Password</label>
                                <input name="password" 
                                    class="input--style-2" required="" type="passwor">
                            </div>
                            <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit">login</button>
                            </div>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
@endsection
	