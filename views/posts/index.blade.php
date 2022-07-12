@extends('delgont::layout.master')

@section('title', 'Posts')

@section('pageHeading', 'Posts')

@section('requiredJs')
<script src="{{ asset('stephendevs/pagman/js/posts.js') }}" defer></script>
@endsection



@section('content')
<section class="mt-4">
    <div class="container-fluid">
        <div class="row">
            
        </div>
        <div class="row">

            <!-- filter search posts select posts -->
            <!-- Posts Table -->
            <div class="col-lg-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        @include('delgont::include.table.postsTable', ['posts' => $posts])
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection