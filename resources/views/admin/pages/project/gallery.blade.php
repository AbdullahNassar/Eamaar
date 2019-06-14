@extends('admin.layouts.master')
@section('title')
المشاريع
@endsection
@section('content')
<div class="page-content">
    <section>
        <div class="box-item">
            <div class="box-item-head">
                <h3 class="title">اضافة</h3>
                <i class="fa fa-angle-down"></i>
            </div><!-- End Box-Item-Head -->
            <div class="box-item-content">
            <div class="modal-body">
                <form action="{{route('admin.project.images')}}" style="border-color:#eee; width: 970px; height: 700px; margin-bottom: 20px; " class="dropzone" id="my-dropzone" method="post">
                    {{ csrf_field() }}
                    <div class="col-xs-12">
                            <div class="col-md-6" style="margin-right: 230px">
                                <div class="form-group ar">
                                    <p style="text-align: center;">المشروع</p>
                                    <select class="form-control" required name="project">
                                        <option>          </option>
                                        @foreach($projects as $project)
                                            <option value="{{ $project->id }}">{{ $project->name_ar }}</option>
                                        @endforeach
                                    </select>
                                </div><!-- End Form-Group -->
                            </div><!--End Col-md-6-->
                        </div>
                        <p style="text-align: center;">اضغط لتحميل صور المشروع</p>
                </form>
            </div><!-- End Box-Item-Content -->
        </div><!-- End Box-Item -->
    </section><!--End Section-->
</div><!--End page-content-->
@endsection