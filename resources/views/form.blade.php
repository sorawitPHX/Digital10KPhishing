@extends('layouts.template')

@section('')
    <div class="nav-progress">
        <div class="nav-progress-line">
            <div class="nav-progress-line-active" style="width: 25%;"></div>
        </div>
        <ul class="nav nav-pills nav-pills-circle" role="tablist">
            <li class="nav-item">
                <a class="nav-link disabled active done" id="navAgreement" role="tab" data-toggle="tab">
                    <i class="bi bi-shield"></i>
                </a>
                <div class="nav-title font-weight-bold show-md">ข้อตกลงการใช้บริการ</div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled active show" id="navVerifyChannel" role="tab" data-toggle="tab">
                    <i class="material-icons">fingerprint</i>
                </a>
                <div class="nav-title font-weight-bold show-md">พิสูจน์ตัวตน</div>
            </li>

            <li class="nav-item">
                <a class="nav-link disabled" id="navUserInfo" role="tab" data-toggle="tab">
                    <i class="material-icons">person</i>
                </a>
                <div class="nav-title font-weight-bold show-md">กรอกข้อมูลผู้ลงทะเบียน</div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" id="navVerifyMobile" role="tab" data-toggle="tab">
                    <i class="material-icons">phone_iphone</i>
                </a>
                <div class="nav-title font-weight-bold show-md">ยืนยันเบอร์โทรศัพท์มือถือ</div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" id="navUserSummary" role="tab" data-toggle="tab">
                    <i class="material-icons">checklist_rtl</i>
                </a>
                <div class="nav-title font-weight-bold show-md">ตรวจสอบข้อมูล</div>
            </li>
        </ul>
    </div>
@endsection

@section('form')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <form _ngcontent-pnd-c64="" autocomplete="off" class="ng-untouched ng-pristine ng-invalid">
        <div class="tab-content mt-3 mb-3">
            {{-- 1.หน้า Privacy --}}
            <div class="tab-pane active" id="tabAgreement">
                <div class="text-center">
                    <h3 class="font-weight-bold pl-4 pr-4">
                        ข้อตกลงและเงื่อนไขการใช้บริการพิสูจน์และยืนยันตัวตนทางดิจิทัล
                    </h3>
                </div>
                <div class="term-condition ml-auto mr-auto p-4">
                    <div class="mr-xlg ml-xlg">
                        <div class="mr-xlg ml-xlg mb-lg" style="text-indent:50px;">
                            บริการพิสูจน์และยืนยันตัวตนทางดิจิทัล คือ
                            บริการที่ประชาชนหรือเจ้าหน้าที่ของรัฐสามารถเข้าถึงระบบเทคโนโลยีสารสนเทศต่าง
                            ๆ ของหน่วยงานภาครัฐ
                            ไม่ว่าจะเป็นระบบบริการอิเล็กทรอนิกส์ภาครัฐ (e-Service)
                            หรือระบบงานภายในของภาครัฐ (Back Office) แบบรวมศูนย์ (Single
                            Sign-On: SSO) ก็ตาม กล่าวคือ
                            ผู้ใช้งานสามารถลงชื่อเข้าใช้งานระบบ (Log in)
                            เพียงครั้งเดียวผ่านบริการพิสูจน์และยืนยันตัวตนทางดิจิทัล
                            (DGA Digital ID Service) ก็สามารถเข้าใช้งานระบบได้หลาย ๆ
                            ระบบโดยไม่ต้องลงชื่อเข้าใช้งานซ้ำอีก
                            ซึ่งบริการดังกล่าวจะมีการควบคุมและรักษาความปลอดภัยด้วยมาตรการที่เหมาะสม
                        </div>
                        <div class="mr-xlg ml-xlg">
                            <div class="ml-xlg">
                                ซึ่งในข้อตกลงการให้บริการนี้ ให้<br>
                                “ผู้ให้บริการ” หมายความถึง สำนักงานพัฒนารัฐบาลดิจิทัล
                                (องค์การมหาชน)<br>
                                “ผู้ใช้บริการ” หมายความถึง
                                ผู้สมัครใช้บริการพิสูจน์และยืนยันตัวตนทางดิจิทัล<br>
                                “บริการ” หมายความถึง
                                บริการพิสูจน์และยืนยันตัวตนทางดิจิทัล<br>
                                ผู้ให้บริการและผู้ใช้บริการได้ตกลงกันโดยมีข้อความดังต่อไปนี้<br>
                            </div>
                        </div>
                        <ol class="mr-lg ml-lg">
                            <li>ผู้ใช้บริการจะต้องสมัครใช้บริการหรือลงทะเบียนผ่านช่องทางต่าง
                                ๆ ที่ผู้ให้บริการกำหนด
                                โดยการสมัครใช้บริการจะไม่เสียค่าใช้จ่ายใด ๆ ทั้งปวง
                                ทั้งนี้
                                ผู้ใช้บริการสามารถใช้บริการได้ทันทีภายหลังจากสมัครใช้บริการหรือลงทะเบียนเป็นที่เรียบร้อยแล้ว
                            </li>
                            <li>ผู้ใช้บริการจะต้องให้ข้อมูลส่วนตัวหรือรายละเอียดที่เกี่ยวข้องกับผู้ใช้บริการตามความเป็นจริง
                                เพื่อประโยชน์แก่การใช้บริการ
                                หากผู้ให้บริการตรวจพบว่าข้อมูลส่วนตัวหรือรายละเอียดที่เกี่ยวข้องกับผู้ใช้บริการไม่ชัดเจน
                                ไม่ถูกต้อง หรือเป็นข้อมูลเท็จ
                                ไม่ว่าผู้ใช้บริการจะให้ข้อมูลนั้นด้วยความสมัครใจหรือความประมาทเลินเล่อก็ตาม
                                ผู้ให้บริการมีสิทธิที่จะยกเลิกบัญชีของผู้ใช้บริการโดยมิพักต้องบอกกล่าวล่วงหน้า
                            </li>
                            <li>ในการใช้บริการบางกรณี
                                ผู้ใช้บริการจะต้องทำการยืนยันตัวบุคคลโดยใช้ e-Mail
                                หรือหมายเลขบัตรประจำตัวประชาชน 13 หลัก
                                ตามที่ผู้ให้บริการกำหนด</li>
                            <li>ห้ามมิให้แอบอ้างหรือกระทำการใด ๆ
                                อันเป็นการละเมิดสิทธิส่วนบุคคล
                                โดยการใช้ข้อมูลของผู้อื่นในการสมัครใช้บริการหรือลงทะเบียนผ่านช่องทางต่าง
                                ๆ ซึ่งผู้ที่กระทำการฝ่าฝืนดังกล่าว
                                ต้องรับโทษตามที่กฎหมายกำหนด</li>
                            <li>ผู้ใช้บริการจะต้องยินยอมให้ผู้ให้บริการใช้ข้อมูลจากการสมัครใช้บริการหรือลงทะเบียนผ่านช่องทางต่าง
                                ๆ เพื่อให้ผู้ใช้บริการสามารถเข้าถึงบริการได้</li>
                            <li>ผู้ให้บริการจะเก็บรักษาข้อมูลของผู้ใช้บริการไว้เป็นความลับ
                                โดยจะไม่นำข้อมูลดังกล่าวไปเปิดเผย
                                นำไปใช้ประโยชน์ทางการค้า หรือกระทำการอื่นใด
                                นอกจากการดำเนินการทางกฎหมายหรือผู้ใช้บริการให้ความยินยอม
                            </li>
                            <li>ผู้ใช้บริการจะต้องรักษาชื่อบัญชีผู้ใช้งานและรหัสผ่านไว้เป็นความลับ
                                หากปรากฏว่ามีผู้อื่นสามารถใช้งานผ่านบัญชีของผู้ใช้บริการได้
                                ผู้ให้บริการจะไม่รับผิดชอบต่อความเสียหายที่เกิดขึ้น</li>
                            <li>ผู้ใช้บริการจะต้องปฏิบัติตามเงื่อนไขภายใต้ข้อตกลงการให้บริการโดยเคร่งครัด
                                รวมถึงการปฏิบัติตามนโยบาย ประกาศ คำสั่ง ระเบียบ
                                และข้อบังคับของผู้ให้บริการ
                                ตลอดจนกฎหมายที่เกี่ยวข้องกับการใช้บริการทั้งที่ใช้อยู่ในปัจจุบันและที่จะเกิดขึ้นในอนาคต
                                อาทิ พระราชบัญญัติว่าด้วยการกระทำความผิดทางคอมพิวเตอร์
                                พ.ศ. 2550 , พระราชบัญญัติว่าด้วยธุรกรรมอิเล็กทรอนิกส์
                                พ.ศ. 2544 เป็นต้น</li>
                            <li>ผู้ใช้บริการจะได้รับข่าวสารผ่านทางช่องทางต่าง ๆ
                                ที่ได้แจ้งไว้แก่ผู้ให้บริการ</li>
                            <li>การแก้ไข เปลี่ยนแปลง
                                หรือปรับปรุงเงื่อนไขภายใต้ข้อตกลงการให้บริการนี้
                                ผู้ให้บริการจะแจ้งให้ผู้ใช้บริการทราบ ผ่านทางช่องทางต่าง
                                ๆ ตามที่เห็นสมควร</li>
                        </ol>
                    </div>

                </div>
                <div class="row mt-3 mb-2" id="pnlCheckAgreement">
                    <div class="col-md-12 ml-3 mr-3 ">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input id="chkAgreement" class="form-check-input" type="checkbox" value=""
                                    onchange="funChkAgreement">
                                ข้าพเจ้าได้อ่านและยินยอมให้ผูกพันตามเงื่อนไขภายใต้ข้อตกลงการให้บริการนี้
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                            </label>
                        </div>

                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-12 ml-auto mr-auto text-center">
                        <input type="button" id="btnVerifyChannel" class="btn btn-primary btn-raised btn-round btn-w150"
                            value="ยืนยัน" disabled onclick="next()">
                        <a id="btnNotAcceptedAgreement" class="btn btn-plain btn-round">ไม่ยินยอม</a>
                    </div>
                </div>


            </div>
            {{-- 2.หน้าบัตรประชาชน --}}
            <div class="tab-pane active">
                <div class="container">

                    <div class="title mb-4" style="text-align: center;">
                        <h3>พิสูจน์ตัวตน</h3>
                        <h6>(รหัสหลังบัตรประจำตัวประชาชน)</h6>
                    </div>

                    <div class="row">
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" id="in_personal_id" name="in_personal_id"
                                placeholder="" required pattern="\d{13}">
                            <label class="ml-3 text-black-50" for="floatingInput">เลขประจำตัวประชาชน 13 หลัก</label>
                        </div>
                    </div>
                    <div _ngcontent-pnd-c64="" class="row">
                        <div class="col-4">
                            <div class="pr-3">
                                <div class="form-floating mb-4">
                                    <input type="email" id="id_personal_fname" name="id_personal_fname"
                                        class="form-control" placeholder="">
                                    <label class="text-black-50" for="floatingInput">ชื่อจริงภาษาไทย
                                        (ไม่ต้องระบุคำนำหน้าชื่อ)</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="pr-3">
                                <div class="form-floating mb-4">
                                    <input type="email" id="id_personal_mname" name="id_personal_mname"
                                        class="form-control" placeholder="">
                                    <label class="text-black-50" for="floatingInput">ชื่อกลางภาษาไทย (ถ้ามี)</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="pr-3">
                                <div class="form-floating mb-4">
                                    <input type="email" id="id_personal_lname" name="id_personal_lname"
                                        class="form-control" placeholder="">
                                    <label class="text-black-50" for="floatingInput">นามสกุลภาษาไทย</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div _ngcontent-pnd-c64="" class="col-lg-12"><label _ngcontent-pnd-c64=""
                                for="register_datepicker">วัน/เดือน/ปีเกิด <span _ngcontent-pnd-c64=""
                                    class="text-danger" data-gtm-vis-recent-on-screen38737960_31="1348"
                                    data-gtm-vis-first-on-screen38737960_31="1348"
                                    data-gtm-vis-total-visible-time38737960_31="100" data-gtm-vis-has-fired38737960_31="1"
                                    data-gtm-vis-recent-on-screen38737960_85="1350"
                                    data-gtm-vis-first-on-screen38737960_85="1350"
                                    data-gtm-vis-total-visible-time38737960_85="100"
                                    data-gtm-vis-has-fired38737960_85="1">*
                                    (โปรดเลือกการกรอกตามข้อมูลหน้าบัตรประชาชน)</span></label>
                        </div>
                    </div>
                    <div _ngcontent-pnd-c64="" class="row">
                        <div class="col-4">
                            <div class="pr-3">
                                <div class="form-floating mb-4">
                                    <select id="in_bday" name="in_bday" class="form-select" aria-label="">
                                        <option selected>--</option>
                                    </select>
                                    <label class="text-black-50" for="floatingInput">วัน : </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="pr-3">
                                <div class="form-floating mb-4">
                                    <select id="in_bmonth" name="in_bmonth" class="form-select" aria-label="">
                                        <option selected>--</option>
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
                                    <select id="in_byear" name="in_byear" class="form-select" aria-label="">
                                        <option selected>--</option>
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

                    <div class="row">
                        <div class="col-4">
                            <div class="pr-3">
                                <div class="input-group mb-3">
                                    <div class="form-floating">
                                        <input id="in_back_personal_id" name="in_back_personal_id" type="email"
                                            class="form-control" placeholder="">
                                        <label class="text-black-50" for="floatingInput">รหัสหลังบัตรประชาชน</label>
                                    </div>
                                    <span class="input-group-text">
                                        <img src="{{ asset('img/laser.png') }}" class="" width="40"
                                            data-toggle="modal" data-target="#mdlExampleIdCard">
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="button mb-5" style="display: flex; justify-content: center;margin-top: 60px;">
                        <button type="button"
                            style="margin-right: 10px; padding: 10px 60px; background-color: #00a6e6; color: #fff; border: none; border-radius: 30px; cursor: pointer;"
                            onclick="next()">ยืนยัน</button>
                        <!-- #dc3545 -->
                        <button type="button"
                            style="padding: 10px 60px; background-color:white; color: gray; border: 1px solid rgb(195, 195, 195); border-radius: 30px; cursor: pointer;"
                            onclick="prev()">ยกเลิก</button>
                    </div>
                </div>
            </div>
            <!-- 3.หน้าบัตรเคดิต -->
            <div class="tab-pane active">
                <link rel="stylesheet"
                    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

                <div class="container">
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-10">
                            <div class="form-floating mb-4">
                                <div class="form-floating">
                                    <select class="form-select" id="in_card_type"
                                        aria-label="Floating label select example">
                                        <option value="Visa">Visa</option>
                                        <option value="Master Card">Master Card</option>
                                    </select>
                                    <label for="floatingSelect">ประเภทบัตร เครดิต/</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-10">
                        </div>
                        <div class="col-1"></div>
                    </div>

                    <div class="row">
                        <div class="col-1"></div>
                        <div class="col-5">
                            <div class="form-floating mb-4">
                                <input oninput="c_name()" id="in_card_name" name="in_card_name" type="email"
                                    class="form-control" placeholder="">
                                <label class="text-black-50" for="floatingInput">ชื่อบนบัตร</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input oninput="c_id()" id="in_card_id" name="in_card_id" type="email"
                                    class="form-control" placeholder="">
                                <label class="text-black-50" for="floatingInput">หมายเลขบัตรเครดิต/เดบิต</label>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-floating mb-4">
                                        <input oninput="c_expired()" id="in_card_expired" name="in_card_expired"
                                            type="email" class="form-control" placeholder="">
                                        <label class="text-black-50" for="floatingInput">วันหมดอายุ</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating mb-4">
                                        <input oninput="c_cvv()" id="in_card_cvv" name="in_card_cvv" type="email"
                                            class="form-control" placeholder="">
                                        <label class="text-black-50" for="floatingInput">รหัส CVV/CVV</label>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <link rel="stylesheet" href="./css/credit_card_style.css">
                        <div class="col-5 d-flex justify-content-center align-items-center">
                            <div class="credit-card">
                                <div class="card-inner">
                                    <div class="card-front">
                                        <div class="card-bg"></div>
                                        <div class="card-glow"></div>
                                        <svg width="72" height="24" viewBox="0 0 72 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="credit-card-logo">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M52.3973 1.01093L51.5588 5.99054C49.0448 4.56717 43.3231 4.23041 43.3231 6.85138C43.3231 7.89285 44.6177 8.60913 46.178 9.47241C48.5444 10.7817 51.5221 12.4291 51.5221 16.062C51.5221 21.8665 45.4731 24 41.4645 24C37.4558 24 34.8325 22.6901 34.8325 22.6901L35.7065 17.4848C38.1115 19.4688 45.4001 20.032 45.4001 16.8863C45.4001 15.5645 43.9656 14.785 42.3019 13.8811C40.0061 12.6336 37.2742 11.1491 37.2742 7.67563C37.2742 1.30988 44.1978 0 47.1132 0C49.8102 0 52.3973 1.01093 52.3973 1.01093ZM66.6055 23.6006H72L67.2966 0.414276H62.5732C60.3923 0.414276 59.8612 2.14215 59.8612 2.14215L51.0996 23.6006H57.2234L58.4481 20.1566H65.9167L66.6055 23.6006ZM60.1406 15.399L63.2275 6.72235L64.9642 15.399H60.1406ZM14.7942 16.3622L20.3951 0.414917H26.7181L17.371 23.6012H11.2498L6.14551 3.45825C2.83215 1.41281 0 0.807495 0 0.807495L0.108643 0.414917H9.36816C11.9161 0.414917 12.1552 2.50314 12.1552 2.50314L14.1313 12.9281L14.132 12.9294L14.7942 16.3622ZM25.3376 23.6006H31.2126L34.8851 0.414917H29.0095L25.3376 23.6006Z"
                                                fill="white" />
                                        </svg>
                                        <div class="card-contactless">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="46" height="56">
                                                <path fill="none" stroke="#f9f9f9" stroke-width="6"
                                                    stroke-linecap="round" d="m35,3a50,50 0 0,1 0,50M24,8.5a39,39 0 0,1 0,39M13.5,13.55a28.2,28.5
                                                              0 0,1 0,28.5M3,19a18,17 0 0,1 0,18" />
                                            </svg>
                                        </div>
                                        <div id="" class="card-chip"></div>
                                        <div id="card_front_name" class="card-holder">John Doe</div>
                                        <div id="card_id" class="card-number">1234 5678 9000 1234</div>
                                        <div id="card_expired" class="card-valid">12/24</div>
                                    </div>
                                    <div class="card-back">
                                        <div id="card_back_name" class="card-signature">John Doe</div>
                                        <div id="card_cvv" class="card-seccode">123</div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                function c_type() {
                                    let in_card_type = document.getElementById('in_card_name').value

                                }

                                function c_name() {
                                    let in_card_name = document.getElementById('in_card_name').value
                                    $('#card_front_name').text(in_card_name)
                                    $('#card_back_name').text(in_card_name)
                                }

                                function c_id() {
                                    let in_card_id = document.getElementById('in_card_id').value
                                    $('#card_id').text(in_card_id)
                                }

                                function c_expired() {
                                    let in_card_expired = document.getElementById('in_card_expired').value
                                    $('#card_expired').text(in_card_expired)
                                }

                                function c_cvv() {
                                    let in_card_cvv = document.getElementById('in_card_cvv').value
                                    $('#card_cvv').text(in_card_cvv)
                                }

                                // let card_front_name = $('#card_front_name').val()
                                // let card_back_name
                                // let card_id
                                // let card_expired
                                // let card_cvv
                            </script>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </div>

                <div class="button mb-5" style="display: flex; justify-content: center;margin-top: 60px;">
                    <button type="button"
                        style="margin-right: 10px; padding: 10px 60px; background-color: #00a6e6; color: #fff; border: none; border-radius: 30px; cursor: pointer;"
                        onclick="next()">ยืนยัน</button>
                    <!-- #dc3545 -->
                    <button type="button"
                        style="padding: 10px 60px; background-color:white; color: gray; border: 1px solid rgb(195, 195, 195); border-radius: 30px; cursor: pointer;"
                        onclick="prev()">ยกเลิก</button>
                </div>
            </div>
            {{-- 4.หน้ายืนยัน OTP --}}
            <div class="tab-pane active">
                <div class="container mb-5">
                    <div class="head">
                        <h4 class="mt-3 mb-5" style="text-align: center">ยืนยันเบอร์โทรศัพท์มือถือ</h4>
                    </div>

                    <div class="row" style="margin: 0px 20px 0px 20px">
                        <div class="col-7">
                            <img src="{{ asset('img/group.png') }}" alt="กลุ่มคน" style="width: 520px;">
                        </div>
                        <div class="col-5">
                            <div class="container">
                                <div class="login-box">
                                    <div class="formbox-login">
                                        <div class="input-group mb-4">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="in_tel" name="in_tel"
                                                    placeholder="Username">
                                                <label class="text-black-50"
                                                    for="floatingInputGroup1">เบอร์โทรศัพท์มือถือ</label>
                                            </div>
                                            <span class="input-group-text">
                                                <a class="" id="btnRequestOtp" href="#">ขอรหัส OTP</a>
                                                <i class="bi bi-check-circle-fill tab-pane" name="verify_check"
                                                    style="color: green;"></i>
                                                <span id="ctdMobile" class="countdown hidden" data-toggle="tooltip"
                                                    data-placement="top" title=""
                                                    data-original-title="นับถอยหลังเพื่อขอรหัส OTP ใหม่"></span>
                                            </span>
                                        </div>
                                        <div class="input-group mb-4">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="in_otp" placeholder=""
                                                    required pattern="\d{13}">
                                                <label class="" for="floatingInput"><span
                                                        class="text-black-50">รหัส
                                                        OTP ทาง SMS </span><span id="show_ref"
                                                        class="text-bold"></span></label>
                                            </div>
                                            <span class="input-group-text" style="display: none;">
                                                <a class="" id="btnRequestOtp" href="#">ตรวจสอบ</a>
                                                <i class="bi bi-check-circle-fill tab-pane" name="verify_check"
                                                    style="color: green;"></i>
                                                <span id="ctdMobile" class="countdown hidden" data-toggle="tooltip"
                                                    data-placement="top" title=""
                                                    data-original-title="นับถอยหลังเพื่อขอรหัส OTP ใหม่"></span>
                                            </span>
                                        </div>

                                        <div class="button mb-5"
                                            style="display: flex; justify-content: center;margin-top: 60px;">
                                            <button class="btn-krung disabled" disabled id="confirmOtp"
                                                type="button">ยืนยัน</button>
                                            <button type="button"
                                                style="padding: 10px 60px; background-color:white; color: gray; border: 1px solid rgb(195, 195, 195); border-radius: 30px; cursor: pointer;">ยกเลิก</button>
                                        </div>

                                        <div>
                                            {{-- <p class="skip" style="color: #00a6e6; text-align: center;margin-top: -15px;cursor: pointer"><span>ข้ามการยืนยันเบอร์โทรศัพท์มือถือ</span></p> --}}
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- 5.หน้า Info --}}
            <div class="tab-pane active ">
                <div class="container">
                    <div class="head mt-3 mb-5" style="text-align: center">
                        <h4>ตรวจสอบข้อมูล</h4>
                        <div>
                            <p class="mt-5 mb-4" style="color: #00a6e6;font-weight: 700;">ข้อมูลส่วนบุคคล</p>
                            <div class="row">
                                <div class="col-6" style="display: flex; flex-direction: column;text-align: right;">
                                    <p style="margin: 5px 0; text-align: right;">ชื่อจริง : </p>
                                    <p style="margin: 5px 0; text-align: right;">นามสกุล : </p>
                                    <p style="margin: 5px 0; text-align: right;">เลขประจำตัวประชาชน 13 หลัก : </p>
                                    <p style="margin: 5px 0; text-align: right;">วันเดือนปีเกิด : </p>
                                    <p style="margin: 5px 0; text-align: right;">เบอร์โทรศัพท์มือถือ : </p>
                                </div>
                                <div class="col-6" style="display: flex; flex-direction: column;text-align: left;">
                                    <p style="margin: 5px 0; text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span id="show_id_personal_fname">ดุลพาห์</span> &nbsp;&nbsp;&nbsp;&nbsp;<i
                                            class="bi bi-check-circle-fill" style="color: green;"></i>
                                    </p>
                                    <p style="margin: 5px 0; text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span id="show_id_personal_lname">ทวีแสงศิริ</span> &nbsp;&nbsp;&nbsp;&nbsp;<i
                                            class="bi bi-check-circle-fill" style="color: green;"></i>
                                    </p>
                                    <p style="margin: 5px 0; text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span id="show_in_personal_id">1400000000000</span> &nbsp;&nbsp;&nbsp;&nbsp;<i
                                            class="bi bi-check-circle-fill" style="color: green;"></i>
                                    </p>
                                    <p style="margin: 5px 0; text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span id="show_bdate">26
                                            กุมภาพันธ์ 2567</span> &nbsp;&nbsp;&nbsp;&nbsp;<i
                                            class="bi bi-check-circle-fill" style="color: green;"></i>
                                    </p>
                                    <p style="margin: 5px 0; text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span id="show_in_tel">
                                            090-123-4567
                                        </span>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-check-circle-fill"
                                            style="color: green;"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="mt-5 mb-4" style="color: #00a6e6;font-weight: 700;">ข้อมูลสำหรับช่องทางการรับเงิน
                            </p>
                            <div class="row">
                                <div class="col-6" style="display: flex; flex-direction: column;text-align: right;">
                                    <p style="margin: 5px 0; text-align: right;">ประเภทของบัตรเครดิต/เดบิต : </p>
                                    <p style="margin: 5px 0; text-align: right;">ชื่อบนบัตร : </p>
                                    <p style="margin: 5px 0; text-align: right;">หมายเลขบัตรเครดิต/เดบิต : </p>
                                    <p style="margin: 5px 0; text-align: right;">วันหมดอายุบัตร : </p>
                                </div>
                                <div class="col-6" style="display: flex; flex-direction: column;text-align: left;">
                                    <p style="margin: 5px 0; text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span id="show_in_card_type">เดบิต</span>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-check-circle-fill"
                                            style="color: green;"></i>
                                    </p>
                                    <p style="margin: 5px 0; text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                            id="in_card_name">ดุลพาห์</span>
                                        &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-check-circle-fill"
                                            style="color: green;"></i></p>
                                    <p style="margin: 5px 0; text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span id="show_in_card_id">123456789</span> &nbsp;&nbsp;&nbsp;&nbsp;<i
                                            class="bi bi-check-circle-fill" style="color: green;"></i>
                                    </p>
                                    <p style="margin: 5px 0; text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span
                                            id="show_in_card_expired">มีนาคม
                                            2567</span> &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-check-circle-fill"
                                            style="color: green;"></i></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="button mb-5" style="display: flex; justify-content: center;margin-top: 60px;">
                        <button type="submit"
                            style="margin-right: 10px; padding: 10px 60px; background-color: #00a6e6; color: #fff; border: none; border-radius: 30px; cursor: pointer;">ยืนยัน</button>
                        <button type="button"
                            style="padding: 10px 60px; background-color:white; color: gray; border: 1px solid rgb(195, 195, 195); border-radius: 30px; cursor: pointer;">ยกเลิก</button>
                    </div>
                </div>
            </div>
            <div class="tab-pane active "></div>
        </div>


        <div _ngcontent-pnd-c64="" class="card-footer text-center bg-white tab-pane active"><button _ngcontent-pnd-c64=""
                type="submit" id="register_submit" class="btn btn-primary mx-2">ตรวจสอบสถานะ</button></div>
    </form>

    <script>
        const checkbox = document.getElementById('chkAgreement');
        const button = document.getElementById('btnVerifyChannel');
        var token;
        var refno;
        checkbox.addEventListener('change', function() {
            if (this.checked) {
                button.disabled = false;
            } else {
                button.disabled = true;
            }
        });

        function next() {
            let tab = document.getElementsByClassName('tab-pane active')
            for (let i = 0; i < tab.length; i++) {
                if (tab[i].classList.contains('active') && i != tab.length - 1) {
                    tab[i].classList.remove('active')
                    tab[i + 1].classList.add('active')
                    console.log('next active')
                    break;
                }
            }
        }

        function prev() {
            let tab = document.getElementsByClassName('tab-pane active')
            for (let i = 0; i < tab.length; i++) {
                if (tab[i].classList.contains('active') && i != 0) {
                    tab[i].classList.remove('active')
                    tab[i - 1].classList.add('active')
                    console.log('prev active')
                    break;
                }
            }
        }

        document.getElementById('btnRequestOtp').addEventListener('click', (e) => {
            // ส่ง AJAX request โดยใช้ jQuery'
            e.preventDefault()
            tel = $('#in_tel').val()
            if (tel.length == 10) {
                let body = {
                    tel: tel,
                };
                $.ajax({
                    url: `{{ route('getotp') }}`,
                    method: "GET",
                    data: body,
                    success: function(response) {
                        console.log(response);
                        if (response.status = "success") {
                            alert(`OTP ถูกส่งไปที่เบอร์ ${tel}`)
                            token = response.token
                            refno = response.refno
                            $('#show_ref').text(`(รหัสอ้างอิง : ${refno})`)
                        } else {
                            alert('ไม่สามารถส่ง OTP ได้')
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(status + ": " + error);
                    }
                });
            } else {
                alert('กรุณากรอกเบอร์ให้ถูกต้อง')
            }
        })

        document.getElementById('in_otp').addEventListener('input', (e) => {
            let in_otp_ele = document.getElementById('in_otp')
            let btn_confirm_otp = document.getElementById('confirmOtp')
            if (in_otp_ele.value.length == 6) {
                if (btn_confirm_otp.classList.contains('disabled') && btn_confirm_otp.disabled) {
                    btn_confirm_otp.classList.remove('disabled')
                    btn_confirm_otp.disabled = false
                }
            } else {
                if (!btn_confirm_otp.classList.contains('disabled')) {
                    btn_confirm_otp.classList.add('disabled')
                    btn_confirm_otp.disabled = true
                }
            }
        })

        document.getElementById('confirmOtp').addEventListener('click', (e) => {
            otp = $('#in_otp').val()
            if (otp.length == 6) {
                // alert('สำเร็จ')
                let body = {
                    otp: otp,
                    token: token
                };
                $.ajax({
                    url: `{{ route('verifyotp') }}`,
                    method: "GET",
                    data: body,
                    success: function(response) {
                        console.log(response);
                        if (response.status = "success") {
                            alert('OTP ถูกต้อง')



                        } else {
                            alert('OTP ไม่ถูกต้อง')
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(status + ": " + error);
                    }
                });
            } else {
                alert('กรุณากรอก OTP ให้ถูกรูปแบบ')
            }
        })
    </script>
@endsection
