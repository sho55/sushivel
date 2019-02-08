@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Order Tracker</div>

                <div class="panel-body">
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                    
                    <order-progress status="{{ $order->status->name}}" initial=" {{ $order->status->percent }}" order_id="{{ $order->id }}"></order-progress>

                    <order-alert user_id="{{ auth()->user()->id }}"></order-alert>



                    <hr>

                    <div class="order-details">
                        <div><strong>オーダー ID:</strong> {{ $order->id }} </div>
                        <div><strong>大きさ:</strong> {{ $order->size }} </div>
                        <div><strong>追加注文:</strong> {{ $order->toppings }} </div>

                        @if ($order->instructions != '')
                            <div><strong>備考欄:</strong> {{ $order->instructions }}</div>
                        @endif

                    </div>

                    <a class="btn btn-primary" href="{{ route('user.orders') }}">リストへ戻る</a>

                </div> <!-- end panel-body -->
            </div> <!-- end panel -->
        </div>
    </div>
</div>
@endsection
