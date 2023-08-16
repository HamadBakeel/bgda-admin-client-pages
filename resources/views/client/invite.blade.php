@extends('layouts.client')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
<!--Import Google Icon Font-->
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/materialize-stepper@3.1.0/dist/css/mstepper.min.css">
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
                    <li class="breadcrumb-item text-white fw-bold lh-1">إنشاء دعوة</li>
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
                        <!-- <div class="input-group mb-5" dir="ltr">
                            <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2" />
                            <button class="input-group-text btn btn-success" id="basic-addon2">البحث</button>
                        </div> -->
                        <!--end::Input group-->
                    </div>
                    <!--end::Item-->
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
<ul class="stepper horizontal">
    <li class="step active">
        <div class="step-title waves-effect">معرض صور الدعوات</div>
        <div class="step-content">
            المعرض
            <!-- Your step content goes here (like inputs or so) -->
            <div class="step-actions">
                <!-- Here goes your actions buttons -->
                <button class="waves-effect waves-dark btn next-step bg-gradient">التالي</button>
            </div>
        </div>
    </li>
    <li class="step ">
        <div class="step-title waves-effect">كتابة بيانات الدعوة</div>
        <div class="step-content">
            <!-- Your step content goes here (like inputs or so) -->
            الفورم
            <div class="step-actions">
                <!-- Here goes your actions buttons -->
                <button class="waves-effect waves-dark btn btn-flat previous-step">السابق</button>
                <button class="waves-effect waves-dark btn next-step bg-gradient">التالي</button>
            </div>
        </div>
    </li>
    <li class="step ">
        <div class="step-title waves-effect">استعراض الدعوة بعد التصميم</div>
        <div class="step-content">
            <!-- Your step content goes here (like inputs or so) -->
            إستعراض الدعوة
            <div class="step-actions">
                <!-- Here goes your actions buttons -->
                <button class="waves-effect waves-dark btn btn-flat previous-step">السابق</button>
                <button class="waves-effect waves-dark btn next-step bg-gradient">التالي</button>
            </div>
        </div>
    </li>
    <li class="step ">
        <div class="step-title waves-effect">الإرسال للمدعوين</div>
        <div class="step-content">
            <!-- Your step content goes here (like inputs or so) -->
            فورم المدعوين
            <div class="step-actions">
                <!-- Here goes your actions buttons -->
                <button class="waves-effect waves-dark btn btn-flat previous-step">السابق</button>
                <button class="waves-effect waves-dark btn next-step bg-gradient">التالي</button>
            </div>
        </div>
    </li>
</ul>

@endsection

@section('script')
<script src="https://unpkg.com/materialize-stepper@3.1.0/dist/js/mstepper.min.js"></script>

<script>
    var stepper = document.querySelector('.stepper');
    var stepperInstace = new MStepper(stepper, {
        // options
        // firstActive: 0 // this is the default
    })
</script>
@endsection