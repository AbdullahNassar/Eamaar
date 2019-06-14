@extends('admin.layouts.master')
@section('title')
لوحة التحكم
@endsection
@section('content')
   <section>
        <div class="box-item">
            <div class="box-item-head">
                <h3 class="title">لوحة التحكم</h3>
                <i class="fa fa-angle-down"></i>
            </div><!-- End Box-Item-Head -->
        </div><!-- End Box-Item -->
        <img src="{{asset('storage/uploads/slider/slide-1.png')}}">
    </section><!--End Section-->   
@endsection