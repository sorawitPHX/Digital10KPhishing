@extends('layouts.template')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
@section('form')
    <form action="" method="POST">
        <div class="container">
            <div class="creditcard mt-5" style="display: flex; justify-content: center;">
                <select name="creditcard" id="" style="width:700px;height:50px;border: 2px solid rgb(123, 123, 123);border-radius: 5px;">
                    <option value="placeholder" disabled selected hidden><i class="bi bi-credit-card-2-front"></i> Visa/MasterCard</option>
                    <option value="visa">Visa</option>
                    <option value="mastercard">MasterCard</option>
                </select>
            </div>

            <div class="text" style="margin-left: 170px; margin-top: 5px; color: rgb(5, 144, 5);width:350px;height: 40px;background: rgb(232, 255, 232);padding-left: 90px;padding-top: 8px;">
                <p>กรอกข้อมูลบัตรเครดิต</p>
            </div>
        </div>

        <div class="container" style="height: auto;display: flex;" >
            <div class="aside" style="margin-right: 500px;">
                <div class="info mt-3" style="margin-left: 170px;">
                    <label for="name">ชื่อบนบัตร<span style="color: red"> *</span></label><br>
                    <input style="border: 2px solid rgb(162, 162, 162);border-radius: 3px; width:330px;height: 40px;padding-left: 8px;"
                        type="text" name="card_name" id="card_name" required>
                    <br>
                    <label class="mt-2" for="number">หมายเลขบัตรเครดิต/เดบิต<span style="color: red"> *</span></label><br>
                    <input style="border: 2px solid rgb(162, 162, 162);border-radius: 3px; width:330px;height: 40px;padding-left: 8px;"
                        type="text" name="num_credit" id="num_credit" required><i class="bi bi-lock-fill lock-icon2"></i>
                    <br>

                    <div class="mt-2" style="display: flex; flex-direction: row;">
                        <div style="margin-right: 20px;">
                            <label class="mt-2" for="date">วันหมดอายุ<span style="color: red"> *</span></label><br>
                            <input style="border: 2px solid rgb(162, 162, 162);border-radius: 5px; width:120px;height: 40px;padding-left: 8px;"
                                type="text" name="expiration_date" id="expiration_date" placeholder="ดด/ปป" required>
                        </div>
                        <div style="margin-left: 20px;">
                            <label class="mt-2" for="cvv">รหัส CVC/CVV<span style="color: red"> *</span></label><br>
                            <input style="border: 2px solid rgb(162, 162, 162);border-radius: 5px; width:120px;height: 40px;padding-left: 8px;"
                                type="text" name="cvv" id="cvv" required ><i class="bi bi-lock-fill lock-icon"></i>
                        </div>
                    </div>
                </div>

            </div>

            <div class="main" style="width: 500px;position: absolute;top: 130;right: 0;">
                    <img src="{{ asset('img/credit.svg') }}" alt="credit_card" style="width: 330px;height: auto;">
            </div>

        </div>

        <div class="button mb-5" style="display: flex; justify-content: center;margin-top: 60px;" >
            <button type="submit" style="margin-right: 10px; padding: 10px 60px; background-color: #00a6e6; color: #fff; border: none; border-radius: 30px; cursor: pointer;">ยืนยัน</button>  <!-- #dc3545 -->
            <button type="button" style="padding: 10px 60px; background-color:white; color: gray; border: 1px solid rgb(195, 195, 195); border-radius: 30px; cursor: pointer;">ยกเลิก</button>
        </div>
    </form>
@endsection

