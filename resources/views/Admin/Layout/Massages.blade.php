@if(Session::has('success'))
    <!---Success Message--->
    <div class="alert alert-success" role="alert">
        <h4 style="color: #45ba87"> <strong>Well Done !</strong> </h4>
        <p style="color: #45ba87">{{Session::get('success')}}</p>
    </div>
@endif

@if(Session::has('error'))
    <!---Error Message--->
    <div class="alert alert-danger" role="alert">
        <h4 style="color: #f5707a"> <strong> Error ! </strong> </h4>
        <p style="padding-left: 15px; font-size: 15px; text-transform: capitalize"> {{Session::get('error')}} </p>
    </div>
@endif

@if($errors->any())
    <!---Error Message--->
    <div class="alert alert-danger" role="alert">
        <h4 style="color: #f5707a"> <strong> Oh snap ! </strong> </h4>
        @foreach($errors->all() as $error)
            <p style="padding-left: 15px; font-size: 15px; text-transform: capitalize">
                {{$error}}
            </p>
        @endforeach
    </div>
@endif
