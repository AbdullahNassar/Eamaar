@extends('admin.layouts.master')
@section('title')
العملاء
@endsection
@section('content')
<div class="page-content">
    <section>
        <div class="box-item">
            <div class="box-item-head">
                <h3 class="title">جدول العملاء</h3>
                <i class="fa fa-angle-down"></i>
            </div><!-- End Box-Item-Head -->
            <div class="box-item-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="btn-group">
                            <a href="{{route('admin.client.add')}}" class="box-btn ">
                                اضافة عميل جديد
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
                                    <th> الترتيب </th>
                                    <th> الصورة </th>
                                    <th> الاسم </th>
                                    <th> تعديل </th>
                                    <th> حذف </th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($clients as $client)
                                <tr role="row" class="even">
                                    <td class="sorting_1">{{$client->id}} </td>
                                    <td>
                                        <img src="{{asset('storage/uploads/clients').'/'.$client->image}}">
                                    </td>
                                    <td>
                                        {{$client->client_name_ar}}
                                        
                                    </td>
                                    <td>
                                        <a class="custom-btn small green" href="{{ route('admin.client.edit' , ['id' => $client->id]) }}"> تعديل </a>
                                    </td>
                                    <td>
                                        <a class="delete custom-btn small red" href="{{ route('admin.client.delete' , ['id' => $client->id]) }}"> حذف </a>
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