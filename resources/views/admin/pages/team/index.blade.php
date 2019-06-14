@extends('admin.layouts.master')
@section('title')
Team
@endsection
@section('content')
<div class="page-content">
    <section>
        <div class="box-item">
            <div class="box-item-head">
                <h3 class="title">جدول فريق العمل</h3>
                <i class="fa fa-angle-down"></i>
            </div><!-- End Box-Item-Head -->
            <div class="box-item-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="btn-group">
                            <a href="{{route('admin.team.add')}}" class="box-btn ">
                                اضافة عضو جديد
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
                                    <th> التفعيل  </th>
                                    <th> الاسم </th>
                                    <th> اللقب </th>
                                    <th> تعديل </th>
                                    <th> حذف </th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($teams as $team)
                                <tr role="row" class="even">
                                    <td class="sorting_1">{{$team->_order}} </td>
                                    <td>
                                        <img src="{{asset('storage/uploads/team').'/'.$team->image}}">
                                    </td>
                                    <td> 
                                        @if($team->active)
                                        نعم
                                        @else
                                        لا
                                        @endif
                                    </td>
                                    <td>
                                        {{$team->name_ar}}
                                        
                                    </td>
                                    <td>
                                        {{$team->title_ar}}
                                        
                                    </td>
                                    <td>
                                        <a class="custom-btn small green" href="{{ route('admin.team.edit' , ['id' => $team->id]) }}"> تعديل </a>
                                    </td>
                                    <td>
                                        <a class="delete custom-btn small red" href="{{ route('admin.team.delete' , ['id' => $team->id]) }}"> حذف </a>
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