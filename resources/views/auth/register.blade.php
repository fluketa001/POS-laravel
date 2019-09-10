@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('home') }}">หน้าแรก</a> <i class="material-icons md-24" style="vertical-align:middle;">label_important</i> ผู้ใช้ระบบ
                        <div style="float: right;position:absolute;right:5px;top:0px;z-index:999;text-align:center;"><a href="#" data-toggle="modal" data-target="#addUser"><i class="material-icons md-48" style="vertical-align:middle;;">add_circle</i><p>เพิ่มผู้ใช้งาน</p></a></div>
                    </div>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="addUserTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addUserTitle">เพิ่มผู้ใช้งาน</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                
                                <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="modal-body">
                                    {{-- Text input--}}
                                    <label for="name">{{ __('Username') }}</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="material-icons">card_giftcard</i></span>
                                        </div>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label for="email">{{ __('E-Mail Address') }}</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="material-icons">euro_symbol</i></span>
                                        </div>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label for="phone">{{ __('เบอร์โทรศัพท์') }}</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="material-icons">toc</i></span>
                                        </div>
                                        <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ $phone ?? old('phone') }}" required autofocus>

                                        @if ($errors->has('phone'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <label for="basic-url">สถานะ</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="material-icons">toc</i></span>
                                        </div>
                                        <select class="custom-select" id="inputGroupSelect01">
                                            <option selected disabled>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>

                                    <label for="password">{{ __('Password') }}</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="material-icons">perm_media</i></span>
                                        </div>
                                        <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password" value="{{str_random(15)}}" required readonly>

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
                                    <button type="submit" class="btn btn-primary">{{ __('บันทึก') }}</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection