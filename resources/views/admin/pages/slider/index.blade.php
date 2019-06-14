@extends('admin.layouts.master')
@section('title')
Slider
@endsection
@section('content')
<div class="page-content">
    <section>
        <div class="box-item">
            <div class="box-item-head">
                <h3 class="title">جدول اللإسلابدر</h3>
                <i class="fa fa-angle-down"></i>
            </div><!-- End Box-Item-Head -->
            <div class="box-item-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="btn-group">
                            <a href="{{route('admin.slider.add')}}" class="box-btn ">
                                اضافة سليد جديدة
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div><!-- End col -->
                </div><!--End Row-->
                <div id="sample_editable_1_wrapper" class="dataTables_wrapper no-footer">
                    <div class="row">

                    </div>
                    <div class="table-scrollable">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th> # </th>
                                    <th> الصورة </th>
                                    <th> الترتيب </th>
                                    <th> التفعيل  </th>
                                    <th> تعديل </th>
                                    <th> حذف </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sliders as $slider)
                                <tr>
                                    <td> {{ $slider->id }} </td>
                                    <td> 
                                        <img src="{{asset('storage/uploads/slider').'/'.$slider->image}}">
                                    </td>
                                    <td> {{ $slider->_order }} </td>
                                    @if($slider->active == 1)
                                    <td> نعم </td>
                                    @elseif($slider->active == 0)
                                    <td> لا </td>
                                    @endif
                                    <td>
                                        <a class="custom-btn small green" href="{{ route('admin.slider.edit' , ['id' => $slider->id]) }}"> تعديل </a>
                                    </td>
                                    <td>
                                        <a class="delete custom-btn small red" href="{{ route('admin.slider.delete' , ['id' => $slider->id]) }}"> حذف </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div><!-- End Box-Item-Content -->
            </div><!-- End Box-Item -->
    </section>

</div><!--End page-content-->
@endsection