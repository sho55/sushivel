@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin Dashboard</div>

                <div class="panel-body">
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                @if ($orders->count() == 0)
                    <p>No orders yet.</p>
                    <a class="btn btn-success" href="{{ route('user.orders.create') }}">Order Sushi</a>

                @else

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>お客様</th>
                                    <th>住所</th>
                                    <th>大きさ</th>
                                    <th>追加注文</th>
                                    <th>備考欄</th>
                                    <th>リアルタイム</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->customer->name }}</td>
                                        <td>{{ $order->address }}</td>
                                        <td>{{ $order->size }}</td>
                                        <td>{{ $order->toppings }}</td>
                                        <td>{{ $order->instructions }}</td>
                                        <td><a href="{{ route('admin.orders.edit', $order) }}">{{ $order->status->name }}</a></td>
                                        <td><form action="./orders/delete/{{$order->id}}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="submit" value="削除" class="btn btn-danger btn-sm btn-dell">
                                            </form></td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div> <!-- end table-responsive -->

                @endif




                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
        $(function(){
        $(".btn-dell").click(function(){
        if(confirm("本当に削除しますか？")){
        //そのままsubmit（削除）
        }else{
        //cancel
        return false;
        }
        });
        });
  </script>
@endsection