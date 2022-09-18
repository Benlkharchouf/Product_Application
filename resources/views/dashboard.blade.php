@extends('frontend.main_master')
@section('content')

<div class="body-content">
    <div class="container">
        <div class="row">
			@include('frontend.common.user_sidebar')

            <div class="col-md-2">

            </div><!--// end col-->

            <div class="col-md-6">

                <div class="card">
                    <h3 class="text-center"><span class="text-danger">Hi....</span><strong>{{
                    Auth::user()->name }}</strong> Welcome To See Online Shop</h3>
                </div>

            </div><!--// end col-->

        </div><!--//end row-->

    </div>
</div>









@endsection
