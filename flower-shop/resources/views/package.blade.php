@extends('layout.app')
@section('content')

<div class="row mt">
    <div class="col-lg-12">
    <div class="content-panel">
        <table class="table table-striped table-advance table-hover">
            <h4><i class="fa fa-angle-right"></i> Package</h4>
            <hr>
            <thead>
                <tr>
                <th>Title</th>
                <th>Descrition</th>
                <th>Price</th>
                <th>Photo</th>
                <th><i class=" fa fa-edit"></i> Action</th>
                <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>
                    White Flower
                </td>
                <td style="width:1000px; height:auto;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</td>
                <td>$12.12</td>
                <td><img class="rounded img-fluid" style="width:100px; height:80px;" src="{{asset('img/white.jpg')}}" alt="" srcset=""> </td>
                <td>
                    <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                </td>
                </tr>
                <tr>
                <td>
                    White Flower
                </td>
                <td style="width:1000px; height:auto;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</td>
                <td>$12.12</td>
                <td><img class="rounded img-fluid" style="width:100px; height:80px;" src="{{asset('img/white.jpg')}}" alt="" srcset=""> </td>
                <td>
                    <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                </td>
                </tr>
                <tr>
                <td>
                    White Flower
                </td>
                <td style="width:1000px; height:auto;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</td>
                <td>$12.12</td>
                <td><img class="rounded img-fluid" style="width:100px; height:80px;" src="{{asset('img/white.jpg')}}" alt="" srcset=""> </td>
                <td>
                    <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                </td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
</div>
<div class="row mt">
    <div class="col-lg-12">
    <h4><i class="fa fa-angle-right"></i> Package Information</h4>
    <div class="form-panel">
        <form role="form" class="form-horizontal style-form">
        <div class="form-group">
            <label class="col-lg-2 control-label">Service Title</label>
            <div class="col-lg-10">
            <input type="text" placeholder=""  class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-2 control-label">Description</label>
            <div class="col-lg-10">
            <input type="text" placeholder=""  class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-2 control-label">Price</label>
            <div class="col-lg-10">
            <input type="text" placeholder=""  class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-lg-2 control-label">Photo</label>
            <div class="col-lg-10">
            <input type="file">
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
            <button class="btn btn-theme" type="submit">Submit</button>
            </div>
        </div>
        </form>
    </div>
    <!-- /form-panel -->
    </div>
    <!-- /col-lg-12 -->
</div>
@endsection