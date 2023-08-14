@extends('layouts.admin')

@section('title')
جميع الخطوط
@endsection

@section('toolbar')
<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar py-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex align-items-start">
        <!--begin::Toolbar container-->
        <div class="d-flex flex-column flex-row-fluid">
            <!--begin::Toolbar wrapper-->
            <div class="d-flex align-items-center pt-1">
                <!-- begin::Breadcrumb -->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold">
                    <!-- begin::Item -->
                    <li class="breadcrumb-item text-white fw-bold lh-1">
                        <a href="../../demo30/dist/index.html" class="text-white">
                            <i class="ki-outline ki-home text-white fs-3"></i>
                        </a>
                    </li>
                    <!-- end::Item -->
                    <!-- begin::Item -->
                    <li class="breadcrumb-item">
                        <i class="ki-outline ki-left fs-4 text-white mx-n1"></i>
                    </li>
                    <!-- end::Item -->
                    <!-- begin::Item -->
                    <li class="breadcrumb-item text-white fw-bold lh-1">
                        جميع الخطوط
                    </li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Toolbar wrapper=-->
            <!--begin::Toolbar wrapper=-->
            <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-4 gap-lg-10 pt-6 pb-18 py-lg-13">

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
    <div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                    <tr class="fw-bold text-muted">
                        <th class="min-w-200px"> البطاقة </th>
                        <th class="min-w-100px text-end">العمليات</th>
                    </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
                    @forelse ($fonts as $font)
                    <tr>
                        <td class="text-end">
                            <div class="d-flex flex-column w-100 me-2">
                                <div class="d-flex flex-stack mb-2">
                                    <a href="{{$font->firstMedia('thumbnail')->getUrl()}}" download=""  rel="noopener noreferrer"><span class="me-2 fs-7 fw-bold"> {{$font->name}}</span></a>
                                </div>

                            </div>
                        </td>
                        <td>
                            <div class="d-flex justify-content-s flex-shrink-0 gap-2">
                                <!-- <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm ">
                                    <i class="ki-outline ki-pencil fs-2"></i>
                                </a> -->

                                <form id="form{{$font->id}}" action="{{route('fonts.destroy',$font)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                        <i class="ki-outline ki-trash fs-2"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center p-5 bg-secondary">
                            لا يوجد بيانات
                        </td>
                    </tr>
                    @endforelse
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Table container-->
    </div>
    <!--begin::Body-->
</div>
@endsection