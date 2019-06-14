@extends('admin.layouts.master')
@section('title')
الخدمات
@endsection
@section('content')
<div class="page-content">
    <section>
        <div class="box-item">
            <div class="box-item-head">
                <h3 class="title">جدول  الخدمات</h3>
                <i class="fa fa-angle-down"></i>
            </div><!-- End Box-Item-Head -->
            <div class="box-item-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="btn-group">
                            <a href="{{route('admin.services.add')}}" class="box-btn ">
                                اضافة خدمة جديدة
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div><!-- End col -->
                </div><!--End Row-->
                <div id="sample_editable_1_wrapper" class="dataTables_wrapper no-footer">
                    <div class="row">

                    </div>
                    <div class="table-scrollable">
                        <table class="table table-striped dataTable no-footer" role="grid">
                            <thead>
                                <tr role="row">
                                    <th> # </th>
                                    <th> العنوان </th>
                                    <th> التفعيل  </th>
                                    <th> الترتيب </th>
                                    <th> تعديل </th>
                                    <th> حذف </th>
                            </thead>
                            <tbody>

                                @foreach($services as $service)
                                <tr role="row" class="even">
                                    <td class="sorting_1">{{$service->id}} </td>
                                    <td>
                                        {{$service->s_name_ar}} |
                                    </td>
                                    <td> 
                                        @if($service->active)
                                        نعم
                                        @else
                                        لا
                                        @endif
                                    </td>
                                    <td>
                                        {{$service->_order}}
                                    </td>
                                    <td>
                                        <a class="custom-btn small green" href="{{ route('admin.service.edit' , ['id' => $service->id]) }}"> تعديل </a>
                                    </td>
                                    <td>
                                        <a class="delete custom-btn small red" href="{{ route('admin.service.delete' , ['id' => $service->id]) }}"> حذف </a>
                                    </td>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div><!-- End Box-Item-Content -->
            </div><!-- End Box-Item -->
    </section>

</div><!--End page-content-->
@endsection