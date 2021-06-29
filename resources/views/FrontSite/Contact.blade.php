@extends('FrontSite.Layout.Master')

@section('Title') Contact Page @endsection

<!-- Page Content -->
<div class="container">
    <br>
    @section('Content')
        <h1 class="mt-4 mb-3"> Contact Pages </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> Home</li>
            <li style="color: #00aced" class="breadcrumb-item active">Contact</li>
        </ol>

        <!-- Intro Content -->
        <div class="row">
            <div class="col-lg-3 col-md-0"></div>
            <div class="col-lg-6">

                <div class="col-lg-12">
                    @include('Admin.Layout.Massages')
                </div>
                <br>
                <form action="{{url('contact')}}" method="post" class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="first_name" required placeholder="first name" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="last_name" required placeholder="last name" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="email" required name="email" placeholder="email" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-12">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="massage" required="" placeholder="massage" autocomplete="off"></textarea>
                        </div>
                    </div>

                    <div class="form-group account-btn text-center m-t-10">
                        <div class="col-xs-12">
                            <button class="btn w-md btn-bordered btn-danger waves-effect waves-light" type="submit" name="Contact">
                                Contact Us
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
@endsection
