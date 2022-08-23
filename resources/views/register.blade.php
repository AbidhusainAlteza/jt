
@extends('layout.master')

@section('includecss')
<link rel="stylesheet" type="text/css" href="css/style.min.css">
@endsection
@section('content')

    <main class="main account">
        <nav class="breadcrumb-nav">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="demo1.html"><i class="d-icon-home"></i></a></li>
                    <li>Register</li>
                </ul>
            </div>
        </nav>
        <div class="page-content mt-4 mb-10 pb-6">
            <div class="container">
                <h2 class="title title-center mb-10">User Register</h2>
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="user-register">
                            <form action="#" class="form">
                                <div class="row ">
                                    <h2 class="title">Register</h2>
                                    <div class="col-md-12 ">
                                        <label>First Name *</label>
                                        <input type="text" class="form-control" name="first_name" required="">
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label>Last Name *</label>
                                        <input type="text" class="form-control" name="last_name" required="">
                                    </div>

                                    <button type="submit" class="btn btn-primary mt-3">SAVE CHANGES</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

{{-- <fieldset>
    <legend><button type="submit" class="btn btn-primary">SAVE CHANGES</button></legend>
    <legend>Password Change</legend>
</fieldset> --}}
