@extends ('admin.admin_master')
@section ('admin')
<div class="page-content">
<div class="row">
    <div class="col-lg-6">
        <div class="card"><br><br>
<center>
<img src="{{asset ('backend/assets/images/avatars/avatar-26.png')}}" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
</center>

            <div class="card-body">
                <h4 class="card-title">Name : {{ $adminData->name }} </h4>
                <hr>
                <h4 class="card-title">User Email : {{ $adminData->email }} </h4>
                <hr>
                <h4 class="card-title">User Name : {{ $adminData->username }} </h4>
                <hr>
                <a href="" class="btn btn-info btn-rounded waves-effect waves-light" > Edit Profile</a>




</div>


@endsection