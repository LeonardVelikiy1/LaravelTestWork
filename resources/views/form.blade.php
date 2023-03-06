@extends('layouts.app')
@section('content')
        <form method="post"  action="/route">
        <div class="shadow p-3 mb-5 bg-light rounded" style="
        
        background-color: white;
        border-radius: 5%;
        width:250px;
        height:300px;
        margin-top:300px ;
        text-align:center;
        align:middle;
        display:block;
        margin-left: auto;
        margin-right: auto;
        ">
            <label class="font-weight-bold" style="margin-bottom:5px; margin-top:20px;">Write your name</label>
            <input style="margin-bottom:35px;;" name='name' type="text">

            <label class="font-weight-bold" style="margin:5px;">Write a message</label>
            <input style="margin-bottom:45px;" name='message' type="text">

            <input value="Otpravit` zapros"  class="btn btn-warning" type="submit">
        </div>
        </form>
@endsection

