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
    <!--begin::Body-->
    <div class="card-body py-3">
        <!--begin::Form container-->
        <form action="" method="post" class="d-flex flex-column gap-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-5 mb-md-0">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
                        <label for="floatingInput">
                            العنوان
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <select class="form-select form-select py-4" aria-label="Select example">
                        <option>التصنيف</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-5 mb-md-0">
                        <input type="file" class="form-control" id="customFile">
                        <label for="customFile">
                            الصورة (png, jpg)
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-control d-flex align-items-center gap-4 flex-row">
                        <span class="fs-3">تفعيل تعدد النماذج</span>
                        <div class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="radio" value="yes" id="flexRadioDefault" name="multiVersion" />
                            <label class="form-check-label fs-4 me-2 ms-6" for="flexRadioDefault">
                                لا
                            </label>

                            <label class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="radio" value="no" name="multiVersion" />
                                <span class="form-check-label fs-4 me-2">
                                    نعم
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating mb-5 mb-md-0">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
                        <label for="floatingInput">
                            الترتيب
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <select class="form-select form-select py-4" aria-label="Select example">
                        <option>عدد الحقول في كل صف</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-control d-flex align-items-center gap-4 flex-row mb-5 mb-md-0">
                        <span class="fs-3">دمج الصور في الخلفية</span>
                        <div class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="radio" value="yes" id="flexRadioDefault" name="multiVersion" />
                            <label class="form-check-label fs-4 me-2 ms-6" for="flexRadioDefault">
                                لا
                            </label>

                            <label class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="radio" value="no" name="multiVersion" />
                                <span class="form-check-label fs-4 me-2">
                                    نعم
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-control d-flex align-items-center gap-4 flex-row">
                        <span class="fs-3 ">صيغة تحميل البطاقة</span>
                        <div class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input ms-2" type="checkbox" value="1" id="flexCheckDefault" />
                            <label class="form-check-label" for="flexCheckDefault">
                                بي دي اف
                            </label>
                        </div>
                        <div class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input ms-2" type="checkbox" value="1" id="flexCheckDefault" />
                            <label class="form-check-label" for="flexCheckDefault">
                                صورة
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <select class="form-select form-select py-4 mb-5 mb-md-0" aria-label="Select example">
                        <option>الإتجاه</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <select class="form-select form-select py-4" aria-label="Select example">
                        <option>الحجم</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-control d-flex align-items-center gap-4 flex-row mb-5 mb-md-0">
                        <span class="fs-3">تفعيل الأرشفة في محرات البحث</span>
                        <div class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="radio" value="yes" id="flexRadioDefault" name="multiVersion" />
                            <label class="form-check-label fs-4 me-2 ms-6" for="flexRadioDefault">
                                لا
                            </label>

                            <label class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="radio" value="no" name="multiVersion" />
                                <span class="form-check-label fs-4 me-2">
                                    نعم
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-control d-flex align-items-center gap-4 flex-row">
                        <span class="fs-3">تشفير رابط البطاقة</span>
                        <div class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="radio" value="yes" id="flexRadioDefault" name="multiVersion" />
                            <label class="form-check-label fs-4 me-2 ms-6" for="flexRadioDefault">
                                لا
                            </label>

                            <label class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="radio" value="no" name="multiVersion" />
                                <span class="form-check-label fs-4 me-2">
                                    نعم
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-control d-flex align-items-center gap-4 flex-row mb-5 mb-md-0">
                        <span class="fs-3">تشفير رابط البطاقة</span>
                        <div class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="radio" value="yes" id="flexRadioDefault" name="multiVersion" />
                            <label class="form-check-label fs-4 me-2 ms-6" for="flexRadioDefault">
                                مفعلة
                            </label>

                            <label class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="radio" value="no" name="multiVersion" />
                                <span class="form-check-label fs-4 me-2">
                                    معطلة
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-control d-flex align-items-center gap-4 flex-row mb-5 mb-md-0">
                        <span class="fs-3">تخصيص تصميم الصفحة</span>
                        <div class="form-check form-check-custom form-check-solid">
                            <input class="form-check-input" type="radio" value="yes" id="flexRadioDefault" name="multiVersion" />
                            <label class="form-check-label fs-4 me-2 ms-6" for="flexRadioDefault">
                                لا
                            </label>

                            <label class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="radio" value="no" name="multiVersion" />
                                <span class="form-check-label fs-4 me-2">
                                    نعم
                                </span>
                            </label>
                        </div>
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