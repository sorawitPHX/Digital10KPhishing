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
    <form _ngcontent-pnd-c64="" novalidate="" autocomplete="off" class="ng-untouched ng-pristine ng-invalid">
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
                        <a id="btnNotAcceptedAgreement" class="btn btn-plain btn-round"
                            >ไม่ยินยอม</a>
                    </div>
                </div>


            </div>
            {{-- 2.หน้าบัตรประชาชน --}}
            <div class="tab-pane">
                <div class="container">

                    <div class="title mb-4" style="text-align: center;">
                        <h3>พิสูจน์ตัวตน</h3>
                    </div>
                    <div class="row">
                        <div class="form-floating mb-4">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label class="ml-3 text-black-50" for="floatingInput">เลขประจำตัวประชาชน 13 หลัก</label>
                        </div>
                    </div>

                    <div _ngcontent-pnd-c64="" class="row">
                        <div class="col-4">
                            <div class="pr-3">
                                <div class="form-floating mb-4">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label class="text-black-50" for="floatingInput">ชื่อจริงภาษาไทย
                                        (ไม่ต้องระบุคำนำหน้าชื่อ)</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="pr-3">
                                <div class="form-floating mb-4">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label class="text-black-50" for="floatingInput">ชื่อกลางภาษาไทย (ถ้ามี)</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="pr-3">
                                <div class="form-floating mb-4">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
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
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>--</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <label class="text-black-50" for="floatingInput">วัน : </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="pr-3">
                                <div class="form-floating mb-4">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>--</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <label class="text-black-50" for="floatingInput">เดือน: </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="pr-3">
                                <div class="form-floating mb-4">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>--</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                    <label class="text-black-50" for="floatingInput">ปี: </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <div class="pr-3">
                                <div class="input-group mb-3">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="floatingInput"
                                            placeholder="name@example.com">
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
                            style="margin-right: 10px; padding: 10px 60px; background-color: #00a6e6; color: #fff; border: none; border-radius: 30px; cursor: pointer;" onclick="next()">ยืนยัน</button>
                        <!-- #dc3545 -->
                        <button type="button"
                            style="padding: 10px 60px; background-color:white; color: gray; border: 1px solid rgb(195, 195, 195); border-radius: 30px; cursor: pointer;" onclick="prev()">ยกเลิก</button>
                    </div>
                </div>
            </div>
            <!-- 3.หน้าบัตรเคดิต -->
            <div class="tab-pane">
                <link rel="stylesheet"
                    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
                <style>
                    .button {
                        display: flex;
                        justify-content: center;
                        margin-top: 60px;
                    }

                    .button button {
                        padding: 10px 60px;
                        border-radius: 30px;
                        cursor: pointer;
                        transition: box-shadow 0.3s;
                    }

                    .button button:hover {
                        box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.3);
                    }

                    .button button.confirm {
                        background-color: #dc3545;
                        color: #fff;
                        border: none;
                    }

                    .button button.cancel {
                        background-color: white;
                        color: gray;
                        border: 1px solid rgb(195, 195, 195);
                    }

                    .lock-icon {
                        position: absolute;
                        margin-top: 10px;
                        right: 632;
                    }

                    .lock-icon2 {
                        position: absolute;
                        margin-top: 10px;
                        right: 583;
                    }
                </style>
                <div class="container">
                    <div class="creditcard mt-5" style="display: flex; justify-content: center;">
                        <select name="creditcard" id=""
                            style="width:700px;height:50px;border: 2px solid rgb(123, 123, 123);border-radius: 5px;">
                            <option value="placeholder" disabled selected hidden><i class="bi bi-credit-card-2-front"></i>
                                Visa/MasterCard</option>
                            <option value="visa">Visa</option>
                            <option value="mastercard">MasterCard</option>
                        </select>
                    </div>

                    <div class="text"
                        style="margin-left: 170px; margin-top: 5px; color: rgb(5, 144, 5);width:350px;height: 40px;background: rgb(232, 255, 232);padding-left: 90px;padding-top: 8px;">
                        <p>กรอกข้อมูลบัตรเครดิต</p>
                    </div>
                </div>

                <div class="container" style="height: auto;display: flex;">
                    <div class="aside" style="margin-right: 500px;">
                        <div class="info mt-3" style="margin-left: 170px;">
                            <label for="name">ชื่อบนบัตร<span style="color: red"> *</span></label><br>
                            <input
                                style="border: 2px solid rgb(162, 162, 162);border-radius: 3px; width:330px;height: 40px;padding-left: 8px;"
                                type="text" name="card_name" id="card_name" required>
                            <br>
                            <label class="mt-2" for="number">หมายเลขบัตรเครดิต/เดบิต<span style="color: red">
                                    *</span></label><br>
                            <input
                                style="border: 2px solid rgb(162, 162, 162);border-radius: 3px; width:330px;height: 40px;padding-left: 8px;"
                                type="text" name="num_credit" id="num_credit" required><i
                                class="bi bi-lock-fill lock-icon2"></i>
                            <br>

                            <div class="mt-2" style="display: flex; flex-direction: row;">
                                <div style="margin-right: 20px;">
                                    <label class="mt-2" for="date">วันหมดอายุ<span style="color: red">
                                            *</span></label><br>
                                    <input
                                        style="border: 2px solid rgb(162, 162, 162);border-radius: 5px; width:120px;height: 40px;padding-left: 8px;"
                                        type="text" name="expiration_date" id="expiration_date" placeholder="ดด/ปป"
                                        required>
                                </div>
                                <div style="margin-left: 20px;">
                                    <label class="mt-2" for="cvv">รหัส CVC/CVV<span style="color: red">
                                            *</span></label><br>
                                    <input
                                        style="border: 2px solid rgb(162, 162, 162);border-radius: 5px; width:120px;height: 40px;padding-left: 8px;"
                                        type="text" name="cvv" id="cvv" required><i
                                        class="bi bi-lock-fill lock-icon"></i>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="main" style="width: 500px;position: absolute;top: 130;right: 0;">
                        <img src="{{ asset('img/credit.svg') }}" alt="credit_card" style="width: 330px;height: auto;">
                    </div>

                </div>

                <div class="button mb-5" style="display: flex; justify-content: center;margin-top: 60px;">
                    <button type="button"
                        style="margin-right: 10px; padding: 10px 60px; background-color: #00a6e6; color: #fff; border: none; border-radius: 30px; cursor: pointer;" onclick="next()">ยืนยัน</button>
                    <!-- #dc3545 -->
                    <button type="button"
                        style="padding: 10px 60px; background-color:white; color: gray; border: 1px solid rgb(195, 195, 195); border-radius: 30px; cursor: pointer;" onclick="prev()">ยกเลิก</button>
                </div>
            </div>
            <div class="tab-pane">

            </div>
            <div class="tab-pane "></div>
            <div class="tab-pane "></div>
        </div>


        <div _ngcontent-pnd-c64="" class="card-footer text-center bg-white tab-pane"><button _ngcontent-pnd-c64=""
                type="submit" id="register_submit" class="btn btn-primary mx-2">ตรวจสอบสถานะ</button></div>
    </form>

    <script>
        const checkbox = document.getElementById('chkAgreement');
        const button = document.getElementById('btnVerifyChannel');

        checkbox.addEventListener('change', function() {
            if (this.checked) {
                button.disabled = false;
            } else {
                button.disabled = true;
            }
        });

        function next() {
            let tab = document.getElementsByClassName('tab-pane')
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
            let tab = document.getElementsByClassName('tab-pane')
            for (let i = 0; i < tab.length; i++) {
                if (tab[i].classList.contains('active') && i != 0) {
                    tab[i].classList.remove('active')
                    tab[i - 1].classList.add('active')
                    console.log('prev active')
                    break;
                }
            }
        }
    </script>
@endsection
