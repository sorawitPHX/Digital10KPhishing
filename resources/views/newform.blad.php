<!DOCTYPE html>
<html lang="th">

<head>
    <!-- @fonts.google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Kanit&family=Noto+Serif:wght@500&family=Playfair+Display:wght@400;600&family=Varela+Round&display=swap" rel="stylesheet">
    <!-- @font-awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" />
    {{-- link style --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <link rel="icon" type="image/x-icon" href="https://rights.xn--b3c4a2a6ch6f.com/favicon.ico">
    <link rel="stylesheet" href="./เราชนะ_form_files/fonts.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลงทะเบียน</title>
    <style>


    </style>
</head>

<body>
    <!--<div class="main_bg position-relative"></div>-->
    <app-root _nghost-pnd-c14="" ng-version="9.1.11"><!----><app-header _ngcontent-pnd-c14="" _nghost-pnd-c12="" class="ng-star-inserted">
            <header _ngcontent-pnd-c12="">
                <div _ngcontent-pnd-c12="" class="container-fluid">
                    <div _ngcontent-pnd-c12="" class="row position-relative">
                        <div _ngcontent-pnd-c12="" class="col-xl-12 col-lg-12 col-md-12 col-12 logo text-center"><a _ngcontent-pnd-c12="" routerlink="/" target="_top" href="{{ route('home') }}"><img _ngcontent-pnd-c12="" src="./เราชนะ_form_files/logo-wewin.png"></a></div>
                    </div>
                </div>
            </header>
        </app-header><!----><router-outlet _ngcontent-pnd-c14=""></router-outlet><app-login _nghost-pnd-c64="" class="ng-star-inserted">
            <section _ngcontent-pnd-c64="" id="login">
                <div _ngcontent-pnd-c64="" class="text-center">
                    <h1 _ngcontent-pnd-c64="" class="display-6">ตรวจสอบสถานะ</h1>
                    <p _ngcontent-pnd-c64="" class="lead text-muted mx-auto" style="max-width: 900px; color: #fff !important;"> กรุณากรอกข้อมูลของท่านให้ถูกต้องครบถ้วน
                        เพื่อใช้ในการตรวจสอบสถานะ </p>
                </div>
                <div _ngcontent-pnd-c64="" class="container">
                    <div _ngcontent-pnd-c64="" class="row mb-5">
                        <div _ngcontent-pnd-c64="" class="col-lg-12">
                            <div _ngcontent-pnd-c64="" class="card border-0 shadow">
                                <div _ngcontent-pnd-c64="" class="card-body">
                                    <form _ngcontent-pnd-c64="" novalidate="" autocomplete="off" class="ng-untouched ng-pristine ng-invalid">
                                        <div _ngcontent-pnd-c64="" class="row">
                                            <div _ngcontent-pnd-c64="" class="col-lg-12"><mat-form-field _ngcontent-pnd-c64="" appearance="outline" class="mat-form-field ng-tns-c55-1 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-can-float mat-form-field-has-label mat-form-field-hide-placeholder ng-untouched ng-pristine ng-invalid">
                                                    <div class="mat-form-field-wrapper ng-tns-c55-1">
                                                        <div class="mat-form-field-flex ng-tns-c55-1">
                                                            <div class="mat-form-field-outline ng-tns-c55-1 ng-star-inserted">
                                                                <div class="mat-form-field-outline-start ng-tns-c55-1" style="width: 7px;"></div>
                                                                <div class="mat-form-field-outline-gap ng-tns-c55-1" style="width: 217.75px;"></div>
                                                                <div class="mat-form-field-outline-end ng-tns-c55-1">
                                                                </div>
                                                            </div>
                                                            <div class="mat-form-field-outline mat-form-field-outline-thick ng-tns-c55-1 ng-star-inserted">
                                                                <div class="mat-form-field-outline-start ng-tns-c55-1" style="width: 7px;"></div>
                                                                <div class="mat-form-field-outline-gap ng-tns-c55-1" style="width: 217.75px;"></div>
                                                                <div class="mat-form-field-outline-end ng-tns-c55-1">
                                                                </div>
                                                            </div><!----><!----><!---->
                                                            <div class="mat-form-field-infix ng-tns-c55-1">
                                                                <input _ngcontent-pnd-c64="" matinput="" type="tel" id="register_citizenId" formcontrolname="encryptCitizenId" placeholder="เลขประจำตัวประชาชน 13 หลัก" mask="0-0000-00000-00-0" autocomplete="off" onpaste="return false;" required="" class="mat-input-element mat-form-field-autofill-control ng-tns-c55-1 cdk-text-field-autofill-monitored ng-untouched ng-pristine ng-invalid" aria-invalid="false" aria-required="true">
                                                                <span class="mat-form-field-label-wrapper ng-tns-c55-1">
                                                                    <label class="mat-form-field-label ng-tns-c55-1 mat-empty mat-form-field-empty ng-star-inserted" id="mat-form-field-label-1" for="register_citizenId" aria-owns="register_citizenId"><!----><mat-label _ngcontent-pnd-c64="" for="register_citizenId" class="ng-tns-c55-1 ng-star-inserted">เลขประจำตัวประชาชน 13 หลัก</mat-label><!----><span aria-hidden="true" class="mat-placeholder-required mat-form-field-required-marker ng-tns-c55-1 ng-star-inserted">
                                                                            *</span><!----></label><!----></span>
                                                            </div>
                                                            <!---->
                                                        </div><!---->
                                                        <div class="mat-form-field-subscript-wrapper ng-tns-c55-1">
                                                            <!---->
                                                            <div class="mat-form-field-hint-wrapper ng-tns-c55-1 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);"><!---->
                                                                <div class="mat-form-field-hint-spacer ng-tns-c55-1">
                                                                </div>
                                                            </div><!---->
                                                        </div>
                                                    </div>
                                                </mat-form-field></div>
                                        </div>
                                        <div _ngcontent-pnd-c64="" class="row">
                                            <div _ngcontent-pnd-c64="" class="col-lg-6 col-12"><mat-form-field _ngcontent-pnd-c64="" appearance="outline" class="mat-form-field ng-tns-c55-2 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-can-float mat-form-field-has-label mat-form-field-hide-placeholder ng-untouched ng-pristine ng-invalid">
                                                    <div class="mat-form-field-wrapper ng-tns-c55-2">
                                                        <div class="mat-form-field-flex ng-tns-c55-2">
                                                            <div class="mat-form-field-outline ng-tns-c55-2 ng-star-inserted">
                                                                <div class="mat-form-field-outline-start ng-tns-c55-2" style="width: 7px;"></div>
                                                                <div class="mat-form-field-outline-gap ng-tns-c55-2" style="width: 76px;"></div>
                                                                <div class="mat-form-field-outline-end ng-tns-c55-2">
                                                                </div>
                                                            </div>
                                                            <div class="mat-form-field-outline mat-form-field-outline-thick ng-tns-c55-2 ng-star-inserted">
                                                                <div class="mat-form-field-outline-start ng-tns-c55-2" style="width: 7px;"></div>
                                                                <div class="mat-form-field-outline-gap ng-tns-c55-2" style="width: 76px;"></div>
                                                                <div class="mat-form-field-outline-end ng-tns-c55-2">
                                                                </div>
                                                            </div><!----><!----><!---->
                                                            <div class="mat-form-field-infix ng-tns-c55-2"><input _ngcontent-pnd-c64="" matinput="" type="text" id="register_name" placeholder="ชื่อภาษาไทย" formcontrolname="firstName" autocomplete="off" maxlength="50" required="" class="mat-input-element mat-form-field-autofill-control ng-tns-c55-2 cdk-text-field-autofill-monitored ng-untouched ng-pristine ng-invalid" aria-invalid="false" aria-required="true"><span class="mat-form-field-label-wrapper ng-tns-c55-2"><label class="mat-form-field-label ng-tns-c55-2 mat-empty mat-form-field-empty ng-star-inserted" id="mat-form-field-label-3" for="register_name" aria-owns="register_name"><!----><mat-label _ngcontent-pnd-c64="" class="ng-tns-c55-2 ng-star-inserted">ชื่อภาษาไทย
                                                                        </mat-label><!----><span aria-hidden="true" class="mat-placeholder-required mat-form-field-required-marker ng-tns-c55-2 ng-star-inserted">
                                                                            *</span><!----></label><!----></span></div>
                                                            <!---->
                                                        </div><!---->
                                                        <div class="mat-form-field-subscript-wrapper ng-tns-c55-2">
                                                            <!---->
                                                            <div class="mat-form-field-hint-wrapper ng-tns-c55-2 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);"><!---->
                                                                <div class="mat-form-field-hint-spacer ng-tns-c55-2">
                                                                </div>
                                                            </div><!---->
                                                        </div>
                                                    </div>
                                                </mat-form-field></div>
                                            <div _ngcontent-pnd-c64="" class="col-lg-6 col-12"><mat-form-field _ngcontent-pnd-c64="" appearance="outline" class="mat-form-field ng-tns-c55-3 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-outline mat-form-field-can-float mat-form-field-has-label mat-form-field-hide-placeholder ng-untouched ng-pristine ng-valid">
                                                    <div class="mat-form-field-wrapper ng-tns-c55-3">
                                                        <div class="mat-form-field-flex ng-tns-c55-3">
                                                            <div class="mat-form-field-outline ng-tns-c55-3 ng-star-inserted">
                                                                <div class="mat-form-field-outline-start ng-tns-c55-3" style="width: 7px;"></div>
                                                                <div class="mat-form-field-outline-gap ng-tns-c55-3" style="width: 92.5px;"></div>
                                                                <div class="mat-form-field-outline-end ng-tns-c55-3">
                                                                </div>
                                                            </div>
                                                            <div class="mat-form-field-outline mat-form-field-outline-thick ng-tns-c55-3 ng-star-inserted">
                                                                <div class="mat-form-field-outline-start ng-tns-c55-3" style="width: 7px;"></div>
                                                                <div class="mat-form-field-outline-gap ng-tns-c55-3" style="width: 92.5px;"></div>
                                                                <div class="mat-form-field-outline-end ng-tns-c55-3">
                                                                </div>
                                                            </div><!----><!----><!---->
                                                            <div class="mat-form-field-infix ng-tns-c55-3"><input _ngcontent-pnd-c64="" matinput="" type="text" id="register_surname" placeholder="นามสกุลภาษาไทย" formcontrolname="encryptLastName" autocomplete="off" maxlength="50" class="mat-input-element mat-form-field-autofill-control ng-tns-c55-3 cdk-text-field-autofill-monitored ng-untouched ng-pristine ng-valid" aria-invalid="false" aria-required="false"><span class="mat-form-field-label-wrapper ng-tns-c55-3"><label class="mat-form-field-label ng-tns-c55-3 mat-empty mat-form-field-empty ng-star-inserted" id="mat-form-field-label-5" for="register_surname" aria-owns="register_surname"><!----><mat-label _ngcontent-pnd-c64="" for="register_surname" class="ng-tns-c55-3 ng-star-inserted">นามสกุลภาษาไทย</mat-label><!----><!----></label><!----></span>
                                                            </div><!---->
                                                        </div><!---->
                                                        <div class="mat-form-field-subscript-wrapper ng-tns-c55-3">
                                                            <!---->
                                                            <div class="mat-form-field-hint-wrapper ng-tns-c55-3 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);"><!---->
                                                                <div class="mat-form-field-hint-spacer ng-tns-c55-3">
                                                                </div>
                                                            </div><!---->
                                                        </div>
                                                    </div>
                                                </mat-form-field></div>
                                        </div>
                                        <div _ngcontent-pnd-c64="" class="row">
                                            <div _ngcontent-pnd-c64="" class="col-lg-12"><label _ngcontent-pnd-c64="" for="register_datepicker">วัน/เดือน/ปีเกิด <span _ngcontent-pnd-c64="" class="text-danger" data-gtm-vis-recent-on-screen38737960_31="1348" data-gtm-vis-first-on-screen38737960_31="1348" data-gtm-vis-total-visible-time38737960_31="100" data-gtm-vis-has-fired38737960_31="1" data-gtm-vis-recent-on-screen38737960_85="1350" data-gtm-vis-first-on-screen38737960_85="1350" data-gtm-vis-total-visible-time38737960_85="100" data-gtm-vis-has-fired38737960_85="1">*
                                                        (โปรดเลือกการกรอกตามข้อมูลหน้าบัตรประชาชน)</span></label></div>
                                        </div>
                                        <div _ngcontent-pnd-c64="" class="row">
                                            <div _ngcontent-pnd-c64="" class="col-lg-12"><app-dopa-date-selector _ngcontent-pnd-c64="" formcontrolname="dateOfBirth" id="register_datepicker" _nghost-pnd-c63="" class="ng-untouched ng-pristine ng-invalid">
                                                    <div _ngcontent-pnd-c63="" class="row">
                                                        <div _ngcontent-pnd-c63="" class="col-lg-12">
                                                            <div _ngcontent-pnd-c63="" class="form-group">
                                                                <div _ngcontent-pnd-c63="" class="custom-control custom-radio custom-control">
                                                                    <input _ngcontent-pnd-c63="" type="radio" value="all" name="dopa_mode" class="custom-control-input ng-untouched ng-pristine ng-valid" id="register_datepicker_dopa_mode_all"><label _ngcontent-pnd-c63="" class="custom-control-label" for="register_datepicker_dopa_mode_all">มีวัน/เดือน/ปีเกิด</label>
                                                                </div>
                                                                <div _ngcontent-pnd-c63="" class="custom-control custom-radio custom-control">
                                                                    <input _ngcontent-pnd-c63="" type="radio" value="onlyDayYear" name="dopa_mode" class="custom-control-input ng-untouched ng-pristine ng-valid" id="register_datepicker_dopa_mode_onlyDayYear"><label _ngcontent-pnd-c63="" class="custom-control-label" for="register_datepicker_dopa_mode_onlyDayYear">มีเฉพาะวันและปีเกิด</label>
                                                                </div>
                                                                <div _ngcontent-pnd-c63="" class="custom-control custom-radio custom-control">
                                                                    <input _ngcontent-pnd-c63="" type="radio" value="onlyMonthYear" name="dopa_mode" class="custom-control-input ng-untouched ng-pristine ng-valid" id="register_datepicker_dopa_mode_onlyMonthYear"><label _ngcontent-pnd-c63="" class="custom-control-label" for="register_datepicker_dopa_mode_onlyMonthYear">มีเฉพาะเดือนและปีเกิด</label>
                                                                </div>
                                                                <div _ngcontent-pnd-c63="" class="custom-control custom-radio custom-control">
                                                                    <input _ngcontent-pnd-c63="" type="radio" value="onlyYear" name="dopa_mode" class="custom-control-input ng-untouched ng-pristine ng-valid" id="register_datepicker_dopa_mode_onlyYear"><label _ngcontent-pnd-c63="" class="custom-control-label" for="register_datepicker_dopa_mode_onlyYear">มีเฉพาะปีเกิด</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-pnd-c63="" class="row">
                                                        <div _ngcontent-pnd-c63="" class="col-lg-4 col-md-12">
                                                            <mat-form-field _ngcontent-pnd-c63="" appearance="outline" class="mat-form-field ng-tns-c55-4 mat-primary mat-form-field-type-mat-select mat-form-field-appearance-outline mat-form-field-can-float mat-form-field-has-label mat-form-field-hide-placeholder ng-untouched ng-pristine ng-invalid">
                                                                <div class="mat-form-field-wrapper ng-tns-c55-4">
                                                                    <div class="mat-form-field-flex ng-tns-c55-4">
                                                                        <div class="mat-form-field-outline ng-tns-c55-4 ng-star-inserted">
                                                                            <div class="mat-form-field-outline-start ng-tns-c55-4" style="width: 7px;"></div>
                                                                            <div class="mat-form-field-outline-gap ng-tns-c55-4" style="width: 30.25px;"></div>
                                                                            <div class="mat-form-field-outline-end ng-tns-c55-4">
                                                                            </div>
                                                                        </div>
                                                                        <div class="mat-form-field-outline mat-form-field-outline-thick ng-tns-c55-4 ng-star-inserted">
                                                                            <div class="mat-form-field-outline-start ng-tns-c55-4" style="width: 7px;"></div>
                                                                            <div class="mat-form-field-outline-gap ng-tns-c55-4" style="width: 30.25px;"></div>
                                                                            <div class="mat-form-field-outline-end ng-tns-c55-4">
                                                                            </div>
                                                                        </div><!----><!----><!---->
                                                                        <div class="mat-form-field-infix ng-tns-c55-4">
                                                                            <mat-select _ngcontent-pnd-c63="" role="listbox" required="" class="mat-select ng-tns-c62-5 ng-tns-c55-4 mat-select-required mat-select-empty ng-untouched ng-pristine ng-invalid ng-star-inserted" id="register_datepicker_dopa_selector_year" tabindex="0" aria-labelledby="mat-form-field-label-7" aria-required="true" aria-disabled="false" aria-invalid="false" aria-multiselectable="false">
                                                                                <div cdk-overlay-origin="" aria-hidden="true" class="mat-select-trigger ng-tns-c62-5">
                                                                                    <div class="mat-select-value ng-tns-c62-5">
                                                                                        <span class="mat-select-placeholder ng-tns-c62-5 ng-star-inserted">&nbsp;</span><!----><!---->
                                                                                    </div>
                                                                                    <div class="mat-select-arrow-wrapper ng-tns-c62-5">
                                                                                        <div class="mat-select-arrow ng-tns-c62-5">
                                                                                        </div>
                                                                                    </div>
                                                                                </div><!---->
                                                                            </mat-select><span class="mat-form-field-label-wrapper ng-tns-c55-4"><label class="mat-form-field-label ng-tns-c55-4 mat-empty mat-form-field-empty ng-star-inserted" id="mat-form-field-label-7" for="register_datepicker_dopa_selector_year" aria-owns="register_datepicker_dopa_selector_year"><!----><mat-label _ngcontent-pnd-c63="" class="ng-tns-c55-4 ng-star-inserted">ปี:</mat-label><!----><span aria-hidden="true" class="mat-placeholder-required mat-form-field-required-marker ng-tns-c55-4 ng-star-inserted">
                                                                                        *</span><!----></label><!----></span>
                                                                        </div><!---->
                                                                    </div><!---->
                                                                    <div class="mat-form-field-subscript-wrapper ng-tns-c55-4">
                                                                        <!---->
                                                                        <div class="mat-form-field-hint-wrapper ng-tns-c55-4 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                                                            <!---->
                                                                            <div class="mat-form-field-hint-spacer ng-tns-c55-4">
                                                                            </div>
                                                                        </div><!---->
                                                                    </div>
                                                                </div>
                                                            </mat-form-field>
                                                        </div>
                                                        <div _ngcontent-pnd-c63="" class="col-lg-4 col-md-12 ng-star-inserted"><mat-form-field _ngcontent-pnd-c63="" appearance="outline" class="mat-form-field ng-tns-c55-6 mat-primary mat-form-field-type-mat-select mat-form-field-appearance-outline mat-form-field-can-float mat-form-field-has-label mat-form-field-hide-placeholder ng-untouched ng-pristine ng-invalid">
                                                                <div class="mat-form-field-wrapper ng-tns-c55-6">
                                                                    <div class="mat-form-field-flex ng-tns-c55-6">
                                                                        <div class="mat-form-field-outline ng-tns-c55-6 ng-star-inserted">
                                                                            <div class="mat-form-field-outline-start ng-tns-c55-6" style="width: 7px;"></div>
                                                                            <div class="mat-form-field-outline-gap ng-tns-c55-6" style="width: 47.5px;"></div>
                                                                            <div class="mat-form-field-outline-end ng-tns-c55-6">
                                                                            </div>
                                                                        </div>
                                                                        <div class="mat-form-field-outline mat-form-field-outline-thick ng-tns-c55-6 ng-star-inserted">
                                                                            <div class="mat-form-field-outline-start ng-tns-c55-6" style="width: 7px;"></div>
                                                                            <div class="mat-form-field-outline-gap ng-tns-c55-6" style="width: 47.5px;"></div>
                                                                            <div class="mat-form-field-outline-end ng-tns-c55-6">
                                                                            </div>
                                                                        </div><!----><!----><!---->
                                                                        <div class="mat-form-field-infix ng-tns-c55-6">
                                                                            <mat-select _ngcontent-pnd-c63="" role="listbox" required="" class="mat-select ng-tns-c62-7 ng-tns-c55-6 mat-select-required mat-select-empty ng-untouched ng-pristine ng-invalid ng-star-inserted" id="register_datepicker_dopa_selector_month" tabindex="0" aria-labelledby="mat-form-field-label-9" aria-required="true" aria-disabled="false" aria-invalid="false" aria-multiselectable="false">
                                                                                <div cdk-overlay-origin="" aria-hidden="true" class="mat-select-trigger ng-tns-c62-7">
                                                                                    <div class="mat-select-value ng-tns-c62-7">
                                                                                        <span class="mat-select-placeholder ng-tns-c62-7 ng-star-inserted">&nbsp;</span><!----><!---->
                                                                                    </div>
                                                                                    <div class="mat-select-arrow-wrapper ng-tns-c62-7">
                                                                                        <div class="mat-select-arrow ng-tns-c62-7">
                                                                                        </div>
                                                                                    </div>
                                                                                </div><!---->
                                                                            </mat-select><span class="mat-form-field-label-wrapper ng-tns-c55-6"><label class="mat-form-field-label ng-tns-c55-6 mat-empty mat-form-field-empty ng-star-inserted" id="mat-form-field-label-9" for="register_datepicker_dopa_selector_month" aria-owns="register_datepicker_dopa_selector_month"><!----><mat-label _ngcontent-pnd-c63="" class="ng-tns-c55-6 ng-star-inserted">เดือน:</mat-label><!----><span aria-hidden="true" class="mat-placeholder-required mat-form-field-required-marker ng-tns-c55-6 ng-star-inserted">
                                                                                        *</span><!----></label><!----></span>
                                                                        </div><!---->
                                                                    </div><!---->
                                                                    <div class="mat-form-field-subscript-wrapper ng-tns-c55-6">
                                                                        <!---->
                                                                        <div class="mat-form-field-hint-wrapper ng-tns-c55-6 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                                                            <!---->
                                                                            <div class="mat-form-field-hint-spacer ng-tns-c55-6">
                                                                            </div>
                                                                        </div><!---->
                                                                    </div>
                                                                </div>
                                                            </mat-form-field></div><!---->
                                                        <div _ngcontent-pnd-c63="" class="col-lg-4 col-md-12 ng-star-inserted"><mat-form-field _ngcontent-pnd-c63="" appearance="outline" class="mat-form-field ng-tns-c55-8 mat-primary mat-form-field-type-mat-select mat-form-field-appearance-outline mat-form-field-can-float mat-form-field-has-label mat-form-field-hide-placeholder ng-untouched ng-pristine ng-invalid">
                                                                <div class="mat-form-field-wrapper ng-tns-c55-8">
                                                                    <div class="mat-form-field-flex ng-tns-c55-8">
                                                                        <div class="mat-form-field-outline ng-tns-c55-8 ng-star-inserted">
                                                                            <div class="mat-form-field-outline-start ng-tns-c55-8" style="width: 7px;"></div>
                                                                            <div class="mat-form-field-outline-gap ng-tns-c55-8" style="width: 35.5px;"></div>
                                                                            <div class="mat-form-field-outline-end ng-tns-c55-8">
                                                                            </div>
                                                                        </div>
                                                                        <div class="mat-form-field-outline mat-form-field-outline-thick ng-tns-c55-8 ng-star-inserted">
                                                                            <div class="mat-form-field-outline-start ng-tns-c55-8" style="width: 7px;"></div>
                                                                            <div class="mat-form-field-outline-gap ng-tns-c55-8" style="width: 35.5px;"></div>
                                                                            <div class="mat-form-field-outline-end ng-tns-c55-8">
                                                                            </div>
                                                                        </div><!----><!----><!---->
                                                                        <div class="mat-form-field-infix ng-tns-c55-8">
                                                                            <mat-select _ngcontent-pnd-c63="" role="listbox" required="" class="mat-select ng-tns-c62-9 ng-tns-c55-8 mat-select-required mat-select-empty ng-untouched ng-pristine ng-invalid ng-star-inserted" id="register_datepicker_dopa_selector_day" tabindex="0" aria-labelledby="mat-form-field-label-11" aria-required="true" aria-disabled="false" aria-invalid="false" aria-multiselectable="false">
                                                                                <div cdk-overlay-origin="" aria-hidden="true" class="mat-select-trigger ng-tns-c62-9">
                                                                                    <div class="mat-select-value ng-tns-c62-9">
                                                                                        <span class="mat-select-placeholder ng-tns-c62-9 ng-star-inserted">&nbsp;</span><!----><!---->
                                                                                    </div>
                                                                                    <div class="mat-select-arrow-wrapper ng-tns-c62-9">
                                                                                        <div class="mat-select-arrow ng-tns-c62-9">
                                                                                        </div>
                                                                                    </div>
                                                                                </div><!---->
                                                                            </mat-select><span class="mat-form-field-label-wrapper ng-tns-c55-8"><label class="mat-form-field-label ng-tns-c55-8 mat-empty mat-form-field-empty ng-star-inserted" id="mat-form-field-label-11" for="register_datepicker_dopa_selector_day" aria-owns="register_datepicker_dopa_selector_day"><!----><mat-label _ngcontent-pnd-c63="" class="ng-tns-c55-8 ng-star-inserted">วัน:</mat-label><!----><span aria-hidden="true" class="mat-placeholder-required mat-form-field-required-marker ng-tns-c55-8 ng-star-inserted">
                                                                                        *</span><!----></label><!----></span>
                                                                        </div><!---->
                                                                    </div><!---->
                                                                    <div class="mat-form-field-subscript-wrapper ng-tns-c55-8">
                                                                        <!---->
                                                                        <div class="mat-form-field-hint-wrapper ng-tns-c55-8 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);">
                                                                            <!---->
                                                                            <div class="mat-form-field-hint-spacer ng-tns-c55-8">
                                                                            </div>
                                                                        </div><!---->
                                                                    </div>
                                                                </div>
                                                            </mat-form-field></div><!---->
                                                    </div>
                                                </app-dopa-date-selector></div>
                                        </div>
                                        <div _ngcontent-pnd-c64="" class="card-footer text-center bg-white"><button _ngcontent-pnd-c64="" type="submit" id="register_submit" class="btn btn-primary mx-2">ตรวจสอบสถานะ</button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </app-login><!----><app-footer _ngcontent-pnd-c14="" _nghost-pnd-c13="" class="ng-star-inserted">
            <div _ngcontent-pnd-c13="" class="partner">
                <div _ngcontent-pnd-c13="" class="container">
                    <div _ngcontent-pnd-c13="" class="row">
                        <div _ngcontent-pnd-c13="" class="col text-center"><a _ngcontent-pnd-c13="" href="http://www.fpo.go.th/" target="_blank"><img _ngcontent-pnd-c13="" src="./เราชนะ_form_files/logo-FPO.png"></a></div>
                        <div _ngcontent-pnd-c13="" class="col text-center"><a _ngcontent-pnd-c13="" href="https://www.mof.go.th/th/home" target="_blank"><img _ngcontent-pnd-c13="" src="./เราชนะ_form_files/logo-MOF.png"></a></div>
                        <div _ngcontent-pnd-c13="" class="col text-center"><a _ngcontent-pnd-c13=""><img _ngcontent-pnd-c13="" src="./เราชนะ_form_files/logo-krungthai.png"></a></div>
                    </div>
                </div>
            </div>
            <footer _ngcontent-pnd-c13="">
                <div _ngcontent-pnd-c13="" class="container">
                    <div _ngcontent-pnd-c13="" class="copy_right-footer d-flex justify-content-between align-items-center">
                        <div _ngcontent-pnd-c13="">Copyright © 2021</div>
                        <div _ngcontent-pnd-c13=""><a _ngcontent-pnd-c13="" href="tel:021111122"><svg _ngcontent-pnd-c13="" viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="phone">
                                    <path _ngcontent-pnd-c13="" d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                    </path>
                                </svg> 02-111-1122 </a></div>
                    </div>
                </div>
            </footer>
        </app-footer><!----><ngx-spinner _ngcontent-pnd-c14="" bdopacity="0.9" bdcolor="rgba(51,51,51,0.8)" size="medium" color="#fff" type="ball-clip-rotate-multiple" _nghost-pnd-c11="" class="ng-tns-c11-0"><!----></ngx-spinner></app-root>
    <script src="./เราชนะ_form_files/runtime-es2015.8a60c1bb1c9f84c5ab54.js.download" type="module"></script>
    <script src="./เราชนะ_form_files/runtime-es5.8a60c1bb1c9f84c5ab54.js.download" nomodule="" defer=""></script>
    <script src="./เราชนะ_form_files/polyfills-es5.925172c1abfb6433840a.js.download" nomodule="" defer=""></script>
    <script src="./เราชนะ_form_files/polyfills-es2015.70cb33c34fffe5191657.js.download" type="module"></script>
    <script src="./เราชนะ_form_files/scripts.a55bb64091fab5cb8c29.js.download" defer=""></script>
    <script src="./เราชนะ_form_files/main-es2015.86814b80675926d41e35.js.download" type="module"></script>
    <script src="./เราชนะ_form_files/main-es5.86814b80675926d41e35.js.download" nomodule="" defer=""></script>


    <div class="cdk-live-announcer-element cdk-visually-hidden" aria-atomic="true" aria-live="polite"></div>



</body>

</html>