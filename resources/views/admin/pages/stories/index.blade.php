@extends('admin.layouts.master')
@section('title')
قصص النجاح
@endsection
@section('content')
<div class="page-content">
    <section>
        <div class="box-item">
            <div class="box-item-head">
                <h3 class="title">جدول قصص النجاح</h3>
                <i class="fa fa-angle-down"></i>
            </div><!-- End Box-Item-Head -->
            <div class="box-item-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="btn-group">
                            <a href="{{route('admin.story.add')}}" class="box-btn ">
                                اضافة قصة جديد
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
                                    <th> المحتوى </th>
                                    <th> تعديل </th>
                                    <th> حذف </th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($stories as $story)
                                <tr role="row" class="even">
                                    <td class="sorting_1">{{$story->_order}} </td>
                                    <td>
                                        <img src="{{asset('storage/uploads/stories').'/'.$story->image}}">
                                    </td>
                                    <td> 
                                        @if($story->active)
                                        نعم
                                        @else
                                        لا
                                        @endif
                                    </td>
                                    <td>
                                        {{$story->name}}
                                        
                                    </td>
                                    <td>
                                        {{$story->title}}
                                        
                                    </td>
                                    <td>
                                        <a class="custom-btn small green" href="{{ route('admin.story.edit' , ['id' => $story->id]) }}"> تعديل </a>
                                    </td>
                                    <td>
                                        <a class="delete custom-btn small red" href="{{ route('admin.story.delete' , ['id' => $story->id]) }}"> حذف </a>
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