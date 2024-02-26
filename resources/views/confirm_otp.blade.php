@extends('layouts.template')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
    .container{
        height: auto;
    }
    .container .content{
        position: absolute;
        top: 0%;
        left: 0%;
        width: 58%;
        height: 100%;
        background: transparent;
        padding: 80px;
        color: white;
        display: flex;
        justify-content: space-between;
        flex-direction: column;
    }
    .container .login-box{
        position: absolute;
        top: 0%;
        right: 0%;
        width: calc(50%); /* width: calc(100% - 50%); */
        height: 100%;
    }
    .content .logo{
        font-size: 40px;
    }
    .text h2{
        font-size: 50px;
        line-height: 1;
    }
    .text h2 span{
        font-size: 25px;
    }
    .text p{
        font-size: 16px;
        margin: 20px 0;
    }
    .login-box .formbox-login{
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
        background: transparent;
        color: black;
    }
    .formbox-login h2{
        font-size: 40px;
        text-align: center;
    }
    .formbox-login .input-box{
        position: relative;
        width: 340px;
        height: 50px;
        border-bottom: 2px solid gray; /* #00a6e6 */
        margin: 30px 0;
        margin-top: 50px;
    }
    .input-box input{
        width: 100%;
        height: 100%;
        background: transparent;
        border: none;
        outline: none;
        font-size: 16px;
        color: black;
        font-weight: 500;
        padding-right: 28px;
    }
    .input-box label{
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        font-size: 16px;
        font-weight: 500;
        pointer-events: none;
        transition: 0.5s ease;
        margin-top: -30px;
    }
    .input-box .icon{
        position: absolute;
        top: 13px;
        right: 0;
        font-size: 19px;
    }
    .btn{
        width: 100%;
        height: 40px;
        margin-top: 20px;
        background-color: pink;
        border: none;
        outline: none;
        border-radius: 5px;
        color: white;
        cursor: pointer;
        font-size: 16px;
        font-weight: 700;
        box-shadow: 2px 2px 2px 2px gray;
    }
    .btn:hover{
        transform: scale(1.02);
        transition: 0.2s;
    }
    .formbox-login .login-register{
        font-size: 15px;
        font-weight: 500;
        text-align: center;
        margin-top: 25px;
    }
    .login-register p a{
        color: purple;
        font-weight: 600;
        text-decoration: none;
        margin-left: 10px;
    }
    .login-register p a:hover{
        text-decoration: underline;
    }
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
    .skip span:hover{
        border-bottom: 2px solid #00a6e6;
    }
</style>
@section('form')
    <div class="container mb-5">
        <div class="head">
            <h4 class="mt-3 mb-5" style="text-align: center">ยืนยันเบอร์โทรศัพท์มือถือ</h4>
        </div>

        <div class="row" style="margin: 0px 20px 0px 20px">
            <div class="col-6" style="">
                <img src="{{ asset('img/group.png') }}" alt="กลุ่มคน" style="width: 520px;height: 380px;">
            </div>
            <div class="col-6">
                <div class="container">
                    <div class="login-box">
                        <div class="formbox-login">
                            <form action="" method="POST">
                                <div class="input-box">
                                    <span class="icon"><i class='bx bxs-envelope' ></i></span>
                                    <input type="text" name="tel" placeholder="" required>
                                    <label>เบอร์โทรศัพท์มือถือ</label>
                                </div>

                                <div class="input-box">
                                    <span class="icon"><i class='bx bxs-lock' ></i></span>
                                    <input type="password" name="password" placeholder="" required>
                                    <label>รหัส OTP ทาง SMS</label>
                                </div>

                                <div class="button mb-5" style="display: flex; justify-content: center;margin-top: 60px;" >
                                    <button type="submit" style="margin-right: 10px; padding: 10px 60px; background-color: #00a6e6; color: #fff; border: none; border-radius: 30px; cursor: pointer;">ยืนยัน</button>  <!-- #dc3545 -->
                                    <button type="button" style="padding: 10px 60px; background-color:white; color: gray; border: 1px solid rgb(195, 195, 195); border-radius: 30px; cursor: pointer;">ยกเลิก</button>

                                </div>

                                <div>
                                    <p class="skip" style="color: #00a6e6; text-align: center;margin-top: -15px;cursor: pointer"><span>ข้ามการยืนยันเบอร์โทรศัพท์มือถือ</span></p>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

