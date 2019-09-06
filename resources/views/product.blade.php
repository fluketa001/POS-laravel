@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-left">
        <a href="{{ route('home') }}" class="back-home">
            <div class="col-md-1" style="position:absolute;text-align:center;left:5%;">
                <i class="material-icons md-48">reply</i>
                <p>ย้อนกลับ</p>
            </div>
        </a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('home') }}">หน้าแรก</a> <i class="material-icons md-24" style="vertical-align:middle;">label_important</i> สินค้า
                        <div style="float: right;position:absolute;right:5px;top:0px;z-index:999;text-align:center;"><a href="#" data-toggle="modal" data-target="#addProduct"><i class="material-icons md-48" style="vertical-align:middle;;">add_circle</i><p>เพิ่มสินค้า</p></a></div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="addProductTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addProductTitle">เพิ่มสินค้า</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- Text input-->
                                    <label for="basic-url">ชื่อสินค้า</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="material-icons">card_giftcard</i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Product_name" aria-label="Product_name" aria-describedby="basic-addon1">
                                    </div>
                                    <label for="basic-url">ราคาสินค้า</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="material-icons">euro_symbol</i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Price" aria-label="Price" aria-describedby="basic-addon1">
                                    </div>
                                    <label for="basic-url">ประเภทสินค้า</label>
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
                                    <label for="basic-url">รูปภาพสินค้า<font style="color:red;font-size:12px;"> (แนะนำ ขนาด 200 * 200px)</font></label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="material-icons">perm_media</i></span>
                                        </div>
                                        <input type="file" class="form-control" placeholder="Logo" aria-label="Logo" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
                                    <button type="button" class="btn btn-primary">บันทึก</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <nav class="navbar navbar-light bg-light">
                            <a class="navbar-brand">รายการสินค้า</a>
                            <form class="form-inline">
                                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                            </form>
                        </nav>

                        <table class="table table-bordered table-striped" id="laravel_datatable">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>S. No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                        </table>
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
