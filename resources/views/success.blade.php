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
@section('success')
    <div class="container">
        <div class="head mt-3 mb-5" style="text-align: center">
            <h1>ลงทะเบียนเสร็จสิ้น</h1>
            <div class="col-6" style="display: flex; flex-direction: column; align-items: center;">
            <i class="bi bi-check-circle-fill" style="color: green; font-size: 64px;"></i>
        
        <div class="button mb-5" style="display: flex; justify-content: center;margin-top: 60px;" >
            <button type="submit" style="margin-right: 10px; padding: 10px 60px; background-color: #00a6e6; color: #fff; border: none; border-radius: 30px; cursor: pointer;">กลับสู่หน้าหลัก</button>
            <button type="button" style="padding: 10px 60px; background-color:white; color: gray; border: 1px solid rgb(195, 195, 195); border-radius: 30px; cursor: pointer;">ยกเลิก</button>
        </div>
    </div>

@endsection
