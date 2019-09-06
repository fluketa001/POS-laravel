@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><a href="{{ route('home') }}">หน้าแรก</a> <i class="material-icons md-24" style="vertical-align:middle;">label_important</i> ผู้ใช้ระบบ</div>
    
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