@extends('layouts.app')

@section('content')
<div class="container">
        <a href="{{ route('home') }}" class="back-home">
            <div class="col-md-1" style="position:absolute;text-align:center;">
                <i class="material-icons md-48">reply</i>
                <p>ย้อนกลับ</p>
            </div>
        </a>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><a href="{{ route('home') }}">หน้าแรก</a> <i class="material-icons md-24" style="vertical-align:middle;">label_important</i> ข้อมูลร้าน</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <label for="basic-url">ชื่อองค์กร</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="material-icons">home</i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <label for="basic-url">เบอร์โทรศัพท์</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="material-icons">phone</i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Phone" aria-label="Phone" aria-describedby="basic-addon1">
                        </div>
                        <label for="basic-url">เลขที่ผู้เสียภาษี</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="material-icons">local_offer</i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Tax-number" aria-label="Tax-number" aria-describedby="basic-addon1">
                        </div>
                        <label for="basic-url">ที่อยู่</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1" style="display:block;"><i class="material-icons">hotel</i></span>
                            </div>
                            <textarea class="form-control" rows="4" placeholder="Address" aria-label="Address" aria-describedby="basic-addon1"></textarea>
                        </div>
                        <label for="basic-url">โลโก้</label>
                        <div align="center" class="mb-3">
                            <div class="image_box">
                                <img src="{{asset('img/mo.jpg')}}" alt="350*350">
                            </div>
                            <p style="font-weight:bold;">ขนาด 200 * 200px</p>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="material-icons">perm_media</i></span>
                            </div>
                            <input type="file" class="form-control" placeholder="Logo" aria-label="Logo" aria-describedby="basic-addon1">
                        </div>
                    </div>
                        <button type="button" class="btn btn-success">บันทึกข้อมูล</button>
                </div>
            </div>
        </div>
    </div>
@endsection
