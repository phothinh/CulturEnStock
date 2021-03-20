@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">S'abonner</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                        @csrf


                        <button type="submit" class="btn btn-primary">
                            M'ABONNER
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
