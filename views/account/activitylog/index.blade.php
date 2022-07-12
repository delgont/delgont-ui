@extends('delgont::.layout.master')

@section('title', 'Account Activity Log')


@section('pageHeading', 'Your Activity')

@section('pageActions')
@endsection

@section('content')
    <section class="mt-2">
        <div class="container-fluid">
           <div class="row">

               <div class="col-lg-3">
                   <div class="row">
                       <div class="col-lg-3">
                            <img src="{{ ($account->avator) ? asset($account->avator) : asset('img/default-avator.jpg') }}" alt="avator" class="img-fluid rounded-circle mb-3 ml-3 w-100" />
                       </div>
                       <div class="col-lg-9 pt-2 text-capitalize">
                            <h4>{{ $account->name }}</h4>
                       </div>
                   </div>
                   <hr />
               </div>

               <div class="col-lg-6 p-0">
                   <div class="card">
                       <div class="card-body">
                           @if (count($activitylog))
                               <div class="activitylog">
                                   @foreach ($activitylog as $log)
                                    <div class="log p-3">
                                        <h6>{{$log->action}}</h6>
                                        {{$log->activity_log}}
                                        <button class="float-right btn btn-sm btn-danger"><i class="fa fa-trash"></i></button><hr />
                                    </div>
                                  @endforeach
                               </div>
                           @else
                               <h2>Your most recent account activity will show up here</h2>
                           @endif
                       </div>
                   </div>
               </div>

           </div>
        </div>
    </section>
    
@endsection