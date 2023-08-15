@extends('layouts.admin')

@section('title')إضافة بطاقة@endsection

@section('toolbar')
<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar py-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex align-items-start">
        <!--begin::Toolbar container-->
        <div class="d-flex flex-column flex-row-fluid">
            <!--begin::Toolbar wrapper-->
            <div class="d-flex align-items-center pt-1">
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-white fw-bold lh-1">
                        <a href="../../demo30/dist/index.html" class="text-white">
                            <i class="ki-outline ki-home text-white fs-3"></i>
                        </a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <i class="ki-outline ki-left fs-4 text-white mx-n1"></i>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-white fw-bold lh-1">إضافة بطاقة</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Toolbar wrapper=-->
            <!--begin::Toolbar wrapper=-->
            <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-4 gap-lg-10 pt-6 pb-18 py-lg-13">
                <div class="d-flex gap-4 gap-lg-13 justify-content-between w-100"></div>
                <!--end::Items-->
            </div>
            <!--end::Toolbar wrapper=-->
        </div>
        <!--end::Toolbar container=-->
    </div>
    <!--end::Toolbar container-->
</div>
<!--end::Toolbar-->
@endsection


@section('content')
<div class="card mb-5 mb-xl-8">

@if ($message = session('success'))
    <div class="alert alert-success" role="alert">
        {{$message}}
    </div>
    @elseif ($message = session('success'))
    <div class="alert alert-danger" role="alert">
        {{$message}}
    </div>
    @endif
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
        {{$error}}
    </div>
    @endforeach

    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Form container-->
        <form action="{{route('invitations.store')}}" enctype="multipart/form-data" method="post" class="d-flex flex-column gap-6">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-5 mb-md-0">
                        <input type="text" name="title" value="{{old('title')}}" class="form-control" id="floatingInput" placeholder="name@example.com" />
                        <label for="floatingInput">
                            العنوان
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-5 mb-md-0">
                        <input type="file" name="image"  class="form-control" id="customFile">
                        <label for="customFile">
                            الصورة (png, jpg)
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <select name="font_id" value="{{old('font_id')}}" class="form-select form-select py-4" aria-label="Select example">
                        <option>الخط</option>
                        @foreach ($fonts as $font)
                        <option value="{{$font->id}}">{{$font->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <div class="form-floating mb-5 mb-md-0">
                        <input name="font_color" value="{{old('font_color')}}" type="color" class="form-control" id="floatingInput" placeholder="name@example.com" />
                        <label for="floatingInput">
                            لون الخط
                        </label>
                    </div>
                </div>

            </div>

            <div>
                <button type="submit" class="btn btn-success">تأكيد</button>
                <button class="btn btn-danger">رجوع</button>
            </div>
        </form>
        <!--end::Form container-->
    </div>
    <!--begin::Body-->
</div>
@endsection