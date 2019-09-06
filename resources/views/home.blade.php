@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Point Of Sale(POS)</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row" style="text-align:center;">
                        <div class="col-sm-6 col-md-4">
                            <a href="{{ route('company') }}">
                                <div class="thumbnail">
                                    <i class="material-icons md-140">home_work</i>
                                    <p>ข้อมูลร้าน</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <a href="{{ route('product') }}">
                                <div class="thumbnail">
                                    <i class="material-icons md-140">business_center</i>
                                    <p>สินค้า</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <a href="{{ route('user') }}">
                                <div class="thumbnail">
                                    <i class="material-icons md-140">people_alt</i>
                                    <p>ผู้ใช้ระบบ</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <a href="{{ route('sell') }}">
                                <div class="thumbnail">
                                    <i class="material-icons md-140">euro</i>
                                    <p>ขาย</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <a href="{{ route('stock') }}">
                                <div class="thumbnail">
                                    <i class="material-icons md-140">pie_chart</i>
                                    <p>Stock</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <a href="{{ route('report') }}">
                                <div class="thumbnail">
                                    <i class="material-icons md-140">assignment</i>
                                    <p>รายงาน</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <a href="{{ route('report_summary') }}">
                                <div class="thumbnail">
                                    <i class="material-icons md-140">library_books</i>
                                    <p>สรุปรายงาน</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <a href="{{ route('personal_information') }}">
                                <div class="thumbnail">
                                    <i class="material-icons md-140">edit</i>
                                    <p>ข้อมูลส่วนตัว</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
