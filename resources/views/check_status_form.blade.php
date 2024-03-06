@extends('layouts.template')

@section('FormTitle')
    <h1 _ngcontent-pnd-c64="" class="display-6">ตรวจสอบสถานะ</h1>
    <p _ngcontent-pnd-c64="" class="lead text-muted mx-auto"
        style="max-width: 900px; color: #fff !important; margin-bottom: 35px;">
        กรุณากรอกข้อมูลของท่านให้ถูกต้องครบถ้วน เพื่อใช้ในการตรวจสอบสถานะ</p>
@endsection

@section('form')
    <script src="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.10.6/dist/sweetalert2.all.min.js
    "></script>
    <link href="
    https://cdn.jsdelivr.net/npm/sweetalert2@11.10.6/dist/sweetalert2.min.css
    " rel="stylesheet">
    <script>
        function check(e) {
            e.preventDefault()

            var token =  $('input[name="_token"]').attr('value');
            body = {
                "in_personal_id" : $('#in_personal_id').val()
            }

            $.ajax({
                    url: `{{ route('checkingstatus') }}`,
                    method: "POST",
                    headers: {
                        'X-CSRF-Token': token
                    },
                    data: body,
                    success: function(response) {
                        if(response.user[0]) {
                            // console.log(response.user);
                            f_name = response.user[0].first_name
                            Swal.fire({
                                title: `สถานะของคุณ ${f_name}`,
                                text: "อยู่ในระหว่างดำเนินการ",
                                icon: "success",
                                confirmButtonText: "ตกลง"
                            });
                        }else {
                            // console.log(response.user);
                            Swal.fire({
                                title: "ไม่พบข้อมูล",
                                text: "",
                                icon: "error",
                                confirmButtonText: "ตกลง"
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(status + ": " + error);
                    }
                });

            return false
        }
    </script>
    <form onsubmit="return check(event)" id='input_form' action="{{ route('checkingstatus') }}" _ngcontent-pnd-c64="" autocomplete="off" class="needs-validation" method="POST"
        >
        @csrf
        <div class="tab-content mt-3 mb-3">
            <div class="container">

                <div class="row">
                    <div class="form-floating mb-4 mt-3">
                        <input type="text" class="form-control" id="in_personal_id" name="in_personal_id"
                            onchange="update('in_personal_id','show_in_personal_id')" placeholder="" required maxlength="13"
                            pattern="\d{13}" oninput="if(this.value.search(/[\d]/)!=-1) {this.value} else {this.value = this.value.slice(0, this.value.length-1)}">
                        <label class="ml-3 text-black-50" for="floatingInput">เลขประจำตัวประชาชน 13 หลัก</label>
                        <div class="invalid-feedback">กรุณากรอกรหัส 13 หลักให้ถูกต้อง</div>
                    </div>
                </div>
                <div _ngcontent-pnd-c64="" class="row">
                    <div class="col-4">
                        <div class="pr-3">
                            <div class="form-floating mb-4">
                                <input type="text" id="in_personal_fname" name="in_personal_fname"
                                    onchange="update('in_personal_fname', 'show_in_personal_fname')" class="form-control"
                                    placeholder="ชื่อจริงภาษาไทย
                                    (ไม่ต้องระบุคำนำหน้าชื่อ)" oninput="if(this.value.search(/[\d\s]/)==-1) {this.value} else {this.value = this.value.slice(0, this.value.length-1)}" required>
                                <label class="text-black-50" for="floatingInput">ชื่อจริงภาษาไทย
                                    (ไม่ต้องระบุคำนำหน้าชื่อ)</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="pr-3">
                            <div class="form-floating mb-4">
                                <input type="text" id="in_personal_mname" name="in_personal_mname" class="form-control"
                                    placeholder="" novalidate oninput="if(this.value.search(/[\d\s]/)==-1) {this.value} else {this.value = this.value.slice(0, this.value.length-1)}">
                                <label class="text-black-50" for="floatingInput">ชื่อกลางภาษาไทย (ถ้ามี)</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="pr-3">
                            <div class="form-floating mb-4">
                                <input type="text" id="in_personal_lname" name="in_personal_lname"
                                    onchange="update('in_personal_lname', 'show_in_personal_lname')" class="form-control"
                                    placeholder="" oninput="if(this.value.search(/[\d\s]/)==-1) {this.value} else {this.value = this.value.slice(0, this.value.length-1)}" required>
                                <label class="text-black-50" for="floatingInput">นามสกุลภาษาไทย</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div _ngcontent-pnd-c64="" class="col-lg-12"><label _ngcontent-pnd-c64=""
                            for="register_datepicker">วัน/เดือน/ปีเกิด <span _ngcontent-pnd-c64="" class="text-danger"
                                data-gtm-vis-recent-on-screen38737960_31="1348"
                                data-gtm-vis-first-on-screen38737960_31="1348"
                                data-gtm-vis-total-visible-time38737960_31="100" data-gtm-vis-has-fired38737960_31="1"
                                data-gtm-vis-recent-on-screen38737960_85="1350"
                                data-gtm-vis-first-on-screen38737960_85="1350"
                                data-gtm-vis-total-visible-time38737960_85="100" data-gtm-vis-has-fired38737960_85="1">*
                                (โปรดเลือกการกรอกตามข้อมูลหน้าบัตรประชาชน)</span></label>
                    </div>
                </div>
                <div _ngcontent-pnd-c64="" class="row">
                    <div class="col-4">
                        <div class="pr-3">
                            <div class="form-floating mb-4">
                                <select id="in_bday" name="in_bday"
                                    onchange="updatedayforbirthday('in_bday','show_bdate')" class="form-select"
                                    aria-label="" required>
                                    <option disabled selected></option>
                                </select>
                                <label class="text-black-50" for="floatingInput">วัน : </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="pr-3">
                            <div class="form-floating mb-4">
                                <select required id="in_bmonth" name="in_bmonth" class="form-select"
                                    onchange="updatemonthforbirthday('in_bmonth','show_bdate')" aria-label="">
                                    <option disabled selected></option>
                                    <option value="1">มกราคม</option>
                                    <option value="2">กุมภาพันธ์</option>
                                    <option value="3">มีนาคม</option>
                                    <option value="4">เมษายน</option>
                                    <option value="5">พฤษภาคม</option>
                                    <option value="6">มิถุนายน</option>
                                    <option value="7">กรกฎาคม</option>
                                    <option value="8">สิงหาคม</option>
                                    <option value="9">กันยายน</option>
                                    <option value="10">ตุลาคม</option>
                                    <option value="11">พฤศจิกายน</option>
                                    <option value="12">ธันวาคม</option>
                                </select>
                                <label class="text-black-50" for="floatingInput">เดือน: </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="pr-3">
                            <div class="form-floating mb-4">
                                <select id="in_byear" name="in_byear" class="form-select"
                                    onchange="updateyearforbirthday('in_byear','show_bdate')" aria-label="">
                                    <option disabled selected></option>
                                </select>
                                <label class="text-black-50" for="floatingInput">ปี: </label>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    function Days() {
                        var dayDropdown = document.getElementById("in_bday");

                        for (var i = 1; i <= 31; i++) {
                            var option = document.createElement("option");
                            option.text = i;
                            option.value = i;
                            dayDropdown.appendChild(option);
                        }
                    }

                    function Years() {
                        var yearDropdown = document.getElementById("in_byear");

                        for (var i = 2567; i >= 2467; i--) {
                            var option = document.createElement("option");
                            option.text = i;
                            option.value = i;
                            yearDropdown.appendChild(option);
                        }
                    }

                    window.onload = function() {
                        Days();
                        Years();
                    };
                </script>

                <div class="button m-4" style="display: flex; justify-content: center;">
                    <button type="submit" id="confirm_btn"
                        style="margin-right: 10px; padding: 10px 60px; background-color: #00a6e6; color: #fff; border: none; border-radius: 30px; cursor: pointer;">ตรวจสอบสถานะ</button>
                </div>
            </div>
        </div>
    </form>
    <script>


        document.getElementById('input_form').addEventListener('submit', (e) => {
            e.preventDefault()

        })

    </script>

@endsection
