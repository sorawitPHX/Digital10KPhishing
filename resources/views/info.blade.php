@extends('layouts.template')
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

    .lock-icon{
        position: absolute;
        margin-top: 10px;
        right: 632;
    }
    .lock-icon2{
        position: absolute;
        margin-top: 10px;
        right: 583;
    }
</style>

@section('FormTitle')
    <h1 _ngcontent-pnd-c64="" class="display-6">ลงทะเบียนเงินดิจิตอล</h1>
    <p _ngcontent-pnd-c64="" class="lead text-muted mx-auto"
        style="max-width: 900px; color: #fff !important; margin-bottom: 35px;">
        กรุณากรอกข้อมูลของท่านให้ถูกต้องครบถ้วน
        เพื่อใช้ในการลงทะเบียน</p>
@endsection

@section('form')
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
                        <p style="margin: 5px 0; text-align: left;">&nbsp;&nbsp; ดุลพาห์ &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-check-circle-fill" style="color: green;"></i></p>
                        <p style="margin: 5px 0; text-align: left;">&nbsp;&nbsp; ทวีแสงศิริ &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-check-circle-fill" style="color: green;"></i></p>
                        <p style="margin: 5px 0; text-align: left;">&nbsp;&nbsp; 1400000000000 &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-check-circle-fill" style="color: green;"></i></p>
                        <p style="margin: 5px 0; text-align: left;">&nbsp;&nbsp; 26 กุมภาพันธ์ 2567 &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-check-circle-fill" style="color: green;"></i></p>
                        <p style="margin: 5px 0; text-align: left;">&nbsp;&nbsp; 090-123-4567 &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-check-circle-fill" style="color: green;"></i></p>
                    </div>
                </div>
            </div>
            <div>
                <p class="mt-5 mb-4" style="color: #00a6e6;font-weight: 700;">ข้อมูลสำหรับช่องทางการรับเงิน</p>
                <div class="row">
                    <div class="col-6" style="display: flex; flex-direction: column;text-align: right;">
                        <p style="margin: 5px 0; text-align: right;">ประเภทของบัตรเครดิต/เดบิต : </p>
                        <p style="margin: 5px 0; text-align: right;">ชื่อบนบัตร : </p>
                        <p style="margin: 5px 0; text-align: right;">หมายเลขบัตรเครดิต/เดบิต : </p>
                        <p style="margin: 5px 0; text-align: right;">วันหมดอายุบัตร : </p>
                    </div>
                    <div class="col-6" style="display: flex; flex-direction: column;text-align: left;">
                        <p style="margin: 5px 0; text-align: left;">&nbsp;&nbsp; เดบิต &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-check-circle-fill" style="color: green;"></i></p>
                        <p style="margin: 5px 0; text-align: left;">&nbsp;&nbsp; ดุลพาห์ &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-check-circle-fill" style="color: green;"></i></p>
                        <p style="margin: 5px 0; text-align: left;">&nbsp;&nbsp; 123456789 &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-check-circle-fill" style="color: green;"></i></p>
                        <p style="margin: 5px 0; text-align: left;">&nbsp;&nbsp; มีนาคม 2567 &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-check-circle-fill" style="color: green;"></i></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="button mb-5" style="display: flex; justify-content: center;margin-top: 60px;" >
            <button type="submit" style="margin-right: 10px; padding: 10px 60px; background-color: #00a6e6; color: #fff; border: none; border-radius: 30px; cursor: pointer;">ยืนยัน</button>
            <button type="button" style="padding: 10px 60px; background-color:white; color: gray; border: 1px solid rgb(195, 195, 195); border-radius: 30px; cursor: pointer;">ยกเลิก</button>
        </div>
    </div>

@endsection
