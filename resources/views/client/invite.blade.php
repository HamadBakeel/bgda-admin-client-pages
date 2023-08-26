@extends('layouts.client')

@section('styles')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
<!--Import Google Icon Font-->
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/materialize-stepper@3.1.0/dist/css/mstepper.min.css">
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}

<style>
    .form-floating>.form-control:focus~label,
    .form-floating>.form-control:not(:placeholder-shown)~label,
    .form-floating>.form-control-plaintext~label,
    .form-floating>.form-select~label {
        transform: scale(0.95) translateY(-0.7rem) translateX(1rem);
    }

    input:not([type]),
    input[type=text],
    input[type=password],
    input[type=email],
    input[type=url],
    input[type=time],
    input[type=date],
    input[type=datetime],
    input[type=datetime-local],
    input[type=tel],
    input[type=number],
    input[type=search],
    textarea.materialize-textarea {
        margin-bottom: 10px;
    }

    .modal {
        width: 100%;
    }

    @media (min-width: 576px) {
        .modal-dialog {
            max-width: 80%;
        }
    }

    .modal .modal-header {
        padding: 1.75rem 1.75rem 1.75rem 0;
    }

    .modal .modal-content {
        padding: 0rem 1rem 1rem !important;
    }

    .modal .modal-footer {
        justify-content: start;
        gap: 10px;
        background-color: transparent;
        padding: 10px 7px;
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
                    <div class="d-flex flex-column"></div>
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
            <div class="content" style="max-height: 100%; overflow-y: scroll; overflow-x: hidden">

                <ul class="row">
                    <li>
                        @foreach ($invitations as $invitation)

                        <input type="radio" name="test" id="cb{{ $invitation->id }}" />
                        <label style="width: 200px;" for="cb{{ $invitation->id }}"><img data-id="{{ $invitation->id }}" src="{{ asset('uploads/' .  $invitation->getMedia('thumbnail')->first()->getDiskPath()) }}" /></label>
                        @endforeach
                    </li>
                    {{--
                        <li><input type="radio" name="test" id="cb2" />
                            <label for="cb2"><img   data-id="invitation2.webp" src="assets/media/invitations/invitation2.webp" /></label>
                        </li>
                        <li><input type="radio" name="test" id="cb3" />
                            <label for="cb3"><img  data-id="invitation3.jpg"  src="assets/media/invitations/invitation3.jpg" /></label>
                        </li>
                        <li><input type="radio" name="test" id="cb4" />
                            <label for="cb4"><img  data-id="invitation4.jpg" src="assets/media/invitations/invitation4.jpg" /></label>
                        </li>
                        <li><input type="radio" name="test" id="cb5" />
                            <label for="cb5"><img  data-id="invitation5.jpg" src="assets/media/invitations/invitation5.jpg" /></label>
                        </li>
                        <li><input type="radio" name="test" id="cb6" />
                            <label for="cb6"><img  data-id="invitation6.jpeg" src="assets/media/invitations/invitation6.jpeg" /></label>
                        </li>
                        <li><input type="radio" name="test" id="cb7" />
                            <label for="cb7"><img  data-id="invitation7.jpg" src="assets/media/invitations/invitation7.jpg" /></label>
                        </li>
                        <li><input type="radio" name="test" id="cb8" />
                            <label for="cb8"><img  data-id="invitation8.jpg" src="assets/media/invitations/invitation8.jpg" /></label>
                        </li>
                     --}}
                </ul>
            </div>
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
                <input type="hidden" class="form-control" id="invitation_id" name="invitation_id" />
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="invitation_name" id="floatingInput" placeholder="ادخل اسم الداعي" required />
                            <label for="floatingInput">الداعي</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-floating">
                            <input type="date" name="invitation_date" class="form-control" id="floatingInput" required />
                            <label for="floatingInput">تاريخ الزفاف</label>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" name="invitation_place" required />
                            <label for="floatingInput">إسم القصر</label>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInput" name="invitation_place_details" required />
                            <label for="floatingInput"> مكان القصر</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="d-flex justify-content-center gap-3 mt-5">
                            <!-- <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
                            <label for="floatingInput">إسم القصر</label> -->
                            <div class="badge badge-light py-3 fs-3">تاريخ الإرسال</div>
                            <div class="badge badge-secondary py-3 fs-3">2023/5/2</div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <!-- <hr class="mt-5 mb-3" style="width: 97%; display: block; margin: auto"> -->
                        <div class=" d-flex">

                        </div>
                    </div>
                </div>
                <!-- Repeat the same pattern for the remaining rows -->
            </div>


            <div class="step-actions">
                <!-- Here goes your actions buttons -->
                <button class="waves-effect waves-dark btn btn-flat previous-step">السابق</button>
                <button class="waves-effect waves-dark btn next-step bg-gradient" id="btn-submit">التالي</button>
            </div>
        </div>
    </li>
    <li class="step ">
        <div class="step-title waves-effect">استعراض الدعوة بعد التصميم</div>
        <div class="step-content">
            <!-- Your step content goes here (like inputs or so) -->

            {{-- <img src="assets/media/invitations/invitation1.webp" style="width: 300px; display: block; height: 300px; margin: auto" /> --}}
            <div id="new_invitation">
                <h1>اختر دعوه وأملأ البيانات<h1>
            </div>

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
            <div class="content" style="max-height: 100%; overflow-y: scroll; overflow-x: hidden">

                <!--begin::Repeater-->
                <div id="insert_invited_people_data">
                    <!--begin::Form group-->
                    <div class="form-group">
                        <div data-repeater-list="insert_invited_people_data">
                            <div data-repeater-item class="border border-secondary mb-2 rounded">
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <div class="form-floating ms-5">
                                            <input type="text" class="form-control nameInput" id="nameInput" />
                                            <label for="nameInput">إسم المدعو</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-floating ms-5">
                                            <input type="number" class="form-control guestsInput" id="guestsInput" />
                                            <label for="guestsInput">عدد المعازيم</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-floating">
                                            <input type="number" class="form-control mobileInput" id="mobileInput" />
                                            <label for="mobileInput">رقم الجوال</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8 me-8">
                                            <i class="ki-duotone ki-trash fs-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                            حذف
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Form group-->

                    <!--begin::Form group-->
                    <div class="form-group mt-5">
                        <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                            <i class="ki-duotone ki-plus fs-3"></i>
                            إضافة
                        </a>
                    </div>
                    <!--end::Form group-->
                </div>
                <!--end::Repeater-->
            </div>

            <div class="step-actions">
                <!-- Here goes your actions buttons -->
                <button class="waves-effect waves-dark btn btn-flat previous-step">السابق</button>
                <button class="waves-effect waves-dark btn next-step bg-gradient" id="getData">التالي</button>
            </div>
        </div>
    </li>
    <li class="step ">
        <div class="step-title waves-effect">مراجعة بيانات المدعوين</div>
        <div class="step-content">
            <!-- Your step content goes here (like inputs or so) -->
            <div class="content" style="max-height: 100%; overflow-y: scroll; overflow-x: hidden">
                <table class="review-table striped responsive-table">
                    <thead>
                        <tr>
                            <th>إسم المدعو</th>
                            <th>عدد المعازيم</th>
                            <th>رقم الجوال</th>
                            <th>حالة الدعوة</th>
                        </tr>
                    </thead>

                    <tbody id="invitedPeopleTable">
                        <!-- <tr>
                            <td>صالح محمد علي ناجي</td>
                            <td>12</td>
                            <td>051297345</td>
                            <td style="display: flex; align-items: center; color: orange; font-weight: bold">قيد الإنتضار <i class="small material-icons">timelapse</i>
                            </td>
                        </tr>
                        <tr>
                            <td>صالح محمد علي ناجي</td>
                            <td>4</td>
                            <td>053247345</td>
                            <td style="display: flex; align-items: center; color: green; font-weight: bold">تمت الدعوة <i class="small material-icons">done</i>
                            </td>
                        </tr> -->
                    </tbody>
                </table>

            </div>

            <div>

                <div class="step-actions" style="gap: 10px">
                    <!-- Here goes your actions buttons -->
                    <button class="waves-effect waves-dark btn btn-flat previous-step">السابق</button>
                    <button class="waves-effect waves-dark btn next-step bg-gradient">الارسال الآن</button>
                    <button class="waves-effect waves-dark btn next-step bg-gradient">الارسال لاحقاً</button>
                    <button type="button" class="btn bg-gradient" data-bs-toggle="modal" data-bs-target="#addNewPeole">ادخال مدعوين جدد</button>
                </div>
            </div>
    </li>
</ul>
<!-- Modal Structure -->
<div class="modal fade" style="background-color: transparent; box-shadow: none;" tabindex="-1" id="addNewPeole">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">إضافة مدعوين آخرين</h3>


                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <!--begin::Repeater-->
                <div id="insert_other_invited_people_data">
                    <!--begin::Form group-->
                    <div class="form-group">
                        <div data-repeater-list="insert_other_invited_people_data">
                            <div data-repeater-item class="border border-secondary mb-2 rounded">
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <div class="form-floating ms-5">
                                            <input type="text" class="form-control nameInput" id="nameInput" />
                                            <label for="nameInput">إسم المدعو</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-floating ms-5">
                                            <input type="number" class="form-control guestsInput" id="guestsInput" />
                                            <label for="guestsInput">عدد المعازيم</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-floating">
                                            <input type="number" class="form-control mobileInput" id="mobileInput" />
                                            <label for="mobileInput">رقم الجوال</label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8 me-8">
                                            <i class="ki-duotone ki-trash fs-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                            حذف
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Form group-->

                    <!--begin::Form group-->
                    <div class="form-group mt-5">
                        <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                            <i class="ki-duotone ki-plus fs-3"></i>
                            إضافة
                        </a>
                    </div>
                    <!--end::Form group-->
                </div>
                <!--end::Repeater-->
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">إغلاق</button>
                <button type="button" class="btn bg-gradient">إضافة</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://unpkg.com/materialize-stepper@3.1.0/dist/js/mstepper.min.js"></script>
<script src="assets/plugins/custom/formrepeater/formrepeater.bundle.js"></script>

<script>
    var stepper = document.querySelector('.stepper');
    var stepperInstace = new MStepper(stepper, {
        // options
        // firstActive: 0 // this is the default
    })


    $('#insert_invited_people_data').repeater({
        initEmpty: false,

        defaultValues: {
            'text-input': 'foo'
        },

        show: function() {
            $(this).slideDown();
        },

        hide: function(deleteElement) {
            $(this).slideUp(deleteElement);
        }
    });


    $('#insert_other_invited_people_data').repeater({
        initEmpty: false,

        defaultValues: {
            'text-input': 'foo'
        },

        show: function() {
            $(this).slideDown();
        },

        hide: function(deleteElement) {
            $(this).slideUp(deleteElement);
        }
    });


    // Create an array to store the data
    let formData = [];

    const getDataButton = document.querySelector('#getData')
    // get form repeater date
    // Get the repeater container element

    getDataButton.addEventListener('click', () => {
        formData = [];
        const repeaterContainer = document.getElementById('insert_invited_people_data');

        // Get all the repeater item elements
        const repeaterItems = repeaterContainer.querySelectorAll('[data-repeater-item]');
        // Iterate over each repeater item
        repeaterItems.forEach((item) => {
            // Get the input values within the repeater item
            const name = item.querySelector('.nameInput').value;
            const guests = item.querySelector('.guestsInput').value;
            const mobile = item.querySelector('.mobileInput').value;

            // Create an object to store the data
            const data = {
                name: name,
                guests: guests,
                mobile: mobile
            };

            // Add the data object to the formData array
            formData.push(data);
        });
        // Now you can use the `formData` array which contains the data from the form repeater
        const invitedPeopleTable = document.getElementById('invitedPeopleTable');
        formData.forEach(item => {
            const tr = document.createElement('tr');
            const nameTd = document.createElement('td')
            const guestsTd = document.createElement('td')
            const mobileTd = document.createElement('td')
            const statusTd = document.createElement('td')

            nameTd.textContent = item.name
            guestsTd.textContent = item.guests
            mobileTd.textContent = item.mobile
            statusTd.innerHTML = `
            <td style="display: flex; align-items: center; color: orange; font-weight: bold">
                قيد الإنتضار 
                <i class="small material-icons">timelapse</i>
            </td>`

            tr.appendChild(nameTd)
            tr.appendChild(guestsTd)
            tr.appendChild(mobileTd)
            tr.appendChild(statusTd)

            invitedPeopleTable.appendChild(tr)
        })
    })
</script>

<script>
    $(document).ready(function() {
        $("img").on("click", function() {
            var dataId = $(this).attr("data-id");
            $('input[name=invitation_id]').val(dataId);

        });
    });
</script>


<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#btn-submit").click(function(e) {

        e.preventDefault();
        var invitation_id = $("input[name=invitation_id]").val();
        if (invitation_id == "") {
            alert('choose invitation first')
        }
        var invitation_name = $("input[name=invitation_name]").val();
        var invitation_date = $("input[name=invitation_date]").val();
        var invitation_place = $("input[name=invitation_place]").val();
        var invitation_place_details = $("input[name=invitation_place_details]").val();

        $('#new_invitation').empty();

        $.ajax({
            type: 'POST',
            url: "{{ route('overlay-image') }}",
            data: {
                invitation_id: invitation_id,
                invitation_name: invitation_name,
                invitation_date: invitation_date,
                invitation_place: invitation_place,
                invitation_place_details: invitation_place_details
            },
            success: function(data) {
                $('#new_invitation').empty();
                $('#new_invitation').empty();
                $('#new_invitation').prepend('<img src="' + data.image_path + '" style="width: 300px; display: block; height: 300px; margin: auto" />')

            }
        });

    });
</script>

@endsection