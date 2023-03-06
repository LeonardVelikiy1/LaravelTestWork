@extends('layouts.app')

@section('content')
@if ($formsuckselfulssaved === true ) 
<div
    style="
     background-color: rgb(46, 219, 121);
        border-radius:1%;
        width:1500px;
        height:50px;
        margin-top:300px;
        text-align:center;
        align:middle;
        display:block;
        color:white;
        margin-left: auto;
        margin-right: auto;
    ">
    Thank you, the message was sent!!

@else 
<div
    style="
     background-color: rgb(255, 72, 72);
        border-radius:1%;
        width:1500px;
        height:50px;
        margin-top:300px;
        text-align:center;
        align:middle;
        display:block;
        color:white;
        margin-left: auto;
        margin-right: auto;
    ">
   The form is not filled out correctly, check the uniqueness of the name or the length of the message.
    @endif
    <a href="/" style="color:rgb(0, 0, 0);">Back to the main page?</a>
</div>
@endsection