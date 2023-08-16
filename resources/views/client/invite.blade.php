@extends('layouts.client')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
<!--Import Google Icon Font-->
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/materialize-stepper@3.1.0/dist/css/mstepper.min.css">

<style>
    .form-floating>.form-control:focus~label,
    .form-floating>.form-control:not(:placeholder-shown)~label,
    .form-floating>.form-control-plaintext~label,
    .form-floating>.form-select~label {
        transform: scale(0.95) translateY(-0.7rem) translateX(2rem);
    }

    input:not([type]), input[type=text], input[type=password], input[type=email], input[type=url], input[type=time], input[type=date], input[type=datetime], input[type=datetime-local], input[type=tel], input[type=number], input[type=search], textarea.materialize-textarea {
        margin-bottom: 10px;
    }
</style>
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
            <!-- Your step content goes here (like inputs or so) -->

            <ul class="d-flex flex-wrap ">
                <li><input type="radio" name="test" id="cb1" />
                    <label for="cb1"><img src="assets/media/invitations/invitation1.webp" /></label>
                </li>
                <li><input type="radio" name="test" id="cb2" />
                    <label for="cb2"><img src="assets/media/invitations/invitation2.webp" /></label>
                </li>
                <li><input type="radio" name="test" id="cb3" />
                    <label for="cb3"><img src="assets/media/invitations/invitation3.jpg" /></label>
                </li>
                <li><input type="radio" name="test" id="cb4" />
                    <label for="cb4"><img src="assets/media/invitations/invitation4.jpg" /></label>
                </li>
                <li><input type="radio" name="test" id="cb5" />
                    <label for="cb5"><img src="assets/media/invitations/invitation5.jpg" /></label>
                </li>
                <li><input type="radio" name="test" id="cb6" />
                    <label for="cb6"><img src="assets/media/invitations/invitation6.jpeg" /></label>
                </li>
                <li><input type="radio" name="test" id="cb7" />
                    <label for="cb7"><img src="assets/media/invitations/invitation7.jpg" /></label>
                </li>
                <li><input type="radio" name="test" id="cb8" />
                    <label for="cb8"><img src="assets/media/invitations/invitation8.jpg" /></label>
                </li>
            </ul>

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

            <div class="content" style="max-height: 100%; overflow-y: scroll; overflow-x: hidden">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
                            <label for="floatingInput">إسم العريس</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
                            <label for="floatingInput">إسم العروس</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
                            <label for="floatingInput">تاريخ الزفاف</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
                            <label for="floatingInput">إسم القصر</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
                            <label for="floatingInput">إسم العريس</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
                            <label for="floatingInput">إسم العروس</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
                            <label for="floatingInput">تاريخ الزفاف</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
                            <label for="floatingInput">إسم القصر</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
                            <label for="floatingInput">تاريخ الزفاف</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
                            <label for="floatingInput">إسم القصر</label>
                        </div>
                    </div>
                </div>
                <!-- Repeat the same pattern for the remaining rows -->
            </div>


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