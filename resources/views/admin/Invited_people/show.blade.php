@extends('layouts.admin')

@section('title')
جميع المدعوين
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
                    <li class="breadcrumb-item text-white fw-bold lh-1">جميع المدعوين</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Toolbar wrapper=-->
            <!--begin::Toolbar wrapper=-->
            <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-4 gap-lg-10 pt-6 pb-18 py-lg-13">
                <div class="d-flex gap-4 gap-lg-13 justify-content-between w-100">
                    <!--begin::Item-->
                    <div class="d-flex flex-column">
                        <!--begin::Input group-->
                        <div class="input-group mb-5" dir="ltr">
                            <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2" />
                            <button class="input-group-text btn btn-success" id="basic-addon2">البحث</button>
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Item-->
                    <select class="form-select w-25 py-0" aria-label="Select example">
                        <option>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
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
    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                    <tr class="fw-bold text-muted">
                        <th class="min-w-150px">اسم المدعو</th>
                        <th class="min-w-200px"> رقم الحجز </th>
                        <th class="min-w-150px">رقم المدعو</th>
                        <th class="min-w-150px">رقم الجوال</th>
                        <th class="min-w-150px">عدد الضيوف</th>
                        <th class="min-w-150px">رقم الدعوة </th>
                        <th class="min-w-100px text-end">موعد الارسال</th>
                        <th class="min-w-100px text-end">العمليات</th>
                    </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
                    <tr>
                        <td class="text-end">
                            سمير علي محمد الفهيدي
                        </td>
                        <td>
                            1
                        </td>
                        <td>
                            1234
                        </td>
                        <td class="text-end">
                            0562341234
                        </td>
                        <td class="text-end">
                            <span class="me-2 fs-7 fw-bold">122</span>
                        </td>
                        <td class="text-end">

                            32

                        </td>
                        <td class="text-end">

                            219

                        </td>
                        <td>
                            <div class="d-flex justify-content-s flex-shrink-0 gap-2">
                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm ">
                                    <i class="ki-outline ki-switch fs-2"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm ">
                                    <i class="ki-outline ki-pencil fs-2"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                    <i class="ki-outline ki-trash fs-2"></i>
                                </a>
                            </div>
                        </td>
                    </tr>

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