@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        {{--[21] here will make such that only a logged-in user can create a post --}}
                        <li><a href="http://localhost/lsapp3/public/posts/create" >Create Post</a></li>

                    <h3>Your Posts</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
