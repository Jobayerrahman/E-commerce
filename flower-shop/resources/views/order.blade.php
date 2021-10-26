@extends('layout.app')
@section('content')

<div class="row mt">
    <div class="col-lg-12">
    <div class="content-panel">
        <table class="table table-striped table-advance table-hover">
            <h4><i class="fa fa-angle-right"></i> Order Table</h4>
            <hr>
            <thead>
                <tr>
                <th>Order Id</th>
                <th>Order Name</th>
                <th>Customer Name</th>
                <th>Customer Number</th>
                <th>Email Address</th>
                <th>Bkash Number</th>
                <th>Bkash Trx</th>
                <th>Status</th>
                <th>Action</th>
                <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($selectKey as $item)
                <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->order_name}}</td>
                <td>{{$item->customer_name}}</td>
                <td>{{$item->mobile_number}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->bkash_number}}</td>
                <td>{{$item->trx_ID}}</td>
                <td><span class="label label-info label-mini">Due</span></td>
                <td>
                    <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
</div>
@endsection