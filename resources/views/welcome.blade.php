@extends('layouts.master')
@section('content')
    <div class=" text-center mt-10">
        <div class="row">
            <div class="col-md-12">
                <h1>Redu<span class="text text-danger">.</span></h1>
                <p>Please Enter Your PIN</p>
            </div>
            <div class="col-md-12 mt-1">
                <input type="text" class="inputs w-3 text-center" maxlength=1 id="input_1"/>
                <input type="text" class="inputs w-3 text-center" maxlength=1 id="input_2"/>
                <input type="text" class="inputs w-3 text-center" maxlength=1 id="input_3"/>
                <input type="text" class="inputs w-3 text-center" maxlength=1 id="input_4"/>
            </div>
            <div class="col-md-12 mt-4">
                If You Don't Have PIN Please Enter
                <a class="generate">Generate One</a>
            </div>
        </div>
    </div>
@endsection
