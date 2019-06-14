@extends('admin.layouts.master')
@section('title')
المشاريع
@endsection
@section('content')
<div class="page-content">
    <section>
        <div class="box-item">
            <div class="box-item-head">
                <h3 class="title">جدول  المشاريع</h3>
                <i class="fa fa-angle-down"></i>
            </div><!-- End Box-Item-Head -->
            <div class="box-item-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="btn-group">
                            <a href="{{route('admin.project.add')}}" class="box-btn ">
                                اضافة مشروع جديد
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
                                    <th> الصورة </th>
                                    <th> الاسم </th>
                                    <th> العميل </th>
                                    <th> تعديل </th>
                                    <th> حذف </th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($projects as $project)
                                <tr role="row" class="even">
                                    <td class="sorting_1">{{$project->id}} </td>
                                    <td>
                                        <img src="{{asset('storage/uploads/projects').'/'.$project->p_image}}">
                                    </td>
                                    <td>
                                        {{$project->name_ar}}
                                    </td>
                                    <td>
                                        {{$project->client_name_ar}}
                                    </td>
                                    <td>
                                        <a class="custom-btn small green" href="{{ route('admin.project.edit' , ['id' => $project->id]) }}"> تعديل </a>
                                    </td>
                                    <td>
                                        <a class="delete custom-btn small red" href="{{ route('admin.project.delete' , ['id' => $project->id]) }}"> حذف </a>
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