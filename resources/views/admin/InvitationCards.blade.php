@extends('layouts.admin')

@section('title')جميع البطاقات@endsection

@section('content')
<div class="card mb-5 mb-xl-8">
    <!--begin::Header-->
    <!-- <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">Members Statistics</span>
            <span class="text-muted mt-1 fw-semibold fs-7">Over 500 members</span>
        </h3>
        <div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add a user">
            <a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                <i class="ki-outline ki-plus fs-2"></i>New Member</a>
        </div>
    </div> -->
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Table container-->
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                <!--begin::Table head-->
                <thead>
                    <tr class="fw-bold text-muted">
                        <th class="min-w-200px"> البطاقة	</th>
                        <th class="min-w-150px">رابط البطاقة</th>
                        <th class="min-w-150px">رقم الخط</th>
                        <th class="min-w-100px text-end">لون الخط</th>
                    </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-45px  h-100px">
                                    <img src="assets/media/avatars/300-14.jpg" class="h-100 w-100" alt="" />
                                </div>
                                <div class="d-flex justify-content-start flex-column">
                                    <!-- <a href="#" class="text-dark fw-bold text-hover-primary fs-6">Ana Simmons</a>
                                    <span class="text-muted fw-semibold text-muted d-block fs-7">HTML, JS, ReactJS</span> -->
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="#" class="text-dark fw-bold text-hover-primary d-block fs-6">Intertico</a>
                        </td>
                        <td class="text-end">
                            <div class="d-flex flex-column w-100 me-2">
                                <div class="d-flex flex-stack mb-2">
                                    <span class="text-muted me-2 fs-7 fw-bold">50%</span>
                                </div>
                                <div class="progress h-6px w-100">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex justify-content-end flex-shrink-0">
                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <i class="ki-outline ki-switch fs-2"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
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