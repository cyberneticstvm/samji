@extends('base')
@section("content")
<section class="section position-relative bg-white">
    <div class="container">
        <!-- Start:: row-1 -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
                @endif
                {{ $exception->getMessage() }}
            </div>
        </div>
    </div>
</section>
@endsection