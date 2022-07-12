@extends('delgont::layout.master')

@section('title', 'Account - '.$account->name)


@section('pageHeading')
    Your Account
@endsection

@section('actions-right')
@endsection

@section('actions')
    <a href="" class="btn-outline-primary text-primary btn btn-sm p-1"><i class="bx bx-cog"></i> Account Settings</a>
    <a href="{{ route('delgont.account.activitylog') }}" class="btn-outline-success text-success btn btn-sm p-1"><i class="bx bx-menu"></i> Activity Log</a>
@endsection

@section('content')
<section class="mt-2">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-3">
                <div class="card">
                    <img src="{{ ($account->avator) ? asset($account->avator) : asset('img/default-avator.jpg') }}" alt="" class="card-img-top avator-holder">
                    <div class="card-body p-1">
                        <form action="" method="POST" class="edit-account-avator" enctype="multipart/form-data">
                            @csrf
                            <label for="file-upload" class="custom-file-upload">
                                <i class="fa fa-camera"></i>
                            </label>
                            <input id="file-upload" class="render-image-on-input-file-change" type="file" name="avator"  data-imgholder=".avator-holder" onchange="hello()" />
        
                            <button type="submit" class="btn btn-sm btn-primary">save</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <form action="" class="row edit-account-form" id="editAccountForm">
                            <div class="col-lg-4">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control outline-primary" value="Stephen Okello">
                            </div>
                            <div class="col-lg-4">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control outline-primary" value="Stephen Okello">
                            </div>
                            <div class="col-lg-4">
                                <label for="username">Username</label>
                                <input type="text" class="form-control outline-primary" value="{{ $account->name }}">
                            </div>
                            <div class="col-lg-12 mt-2">
                                <small><b>Authentication Details</b></small><hr />
                            </div>
                            <div class="col-lg-8">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" value="{{ $account->email }}" />
                            </div>
                            <div class="col-lg-4">
                            </div>
                            <div class="col-lg-12 text-lg-right mt-3">
                                <button type="submit" class="btn btn-primary btn-sm"><i class="bx bx-edit"></i> Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
    
@endsection