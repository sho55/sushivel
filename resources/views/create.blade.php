@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Order Sushi</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <order-alert user_id="{{ auth()->user()->id }}"></order-alert>

                    <div class="row">
                        <div class="col-lg-12">
                            <form method="post" action="{{ route('user.orders.store') }}" class="form-horizontal">
                                {{ csrf_field() }}

                                <div class="form-group"><label class="col-sm-2 control-label">住所</label>
                                    <div class="col-sm-10"><input type="text" name="address" placeholder="ご住所" class="form-control"></div>
                                </div>

                                <div class="form-group"><label class="col-sm-2 control-label">大きさ</label>

                                    <div class="col-sm-10">
                                        <div><label> <input type="radio" checked="" value="盛合せ" id="medium" name="size"> 盛合せ(2~3人前) </label></div>
                                        <div><label> <input type="radio" value="上" id="large" name="size"> 上 (3~4人前)</label></div>
                                        <div><label> <input type="radio" value="特上" id="extra-large" name="size"> 特上 (5~7人前)</label></div>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">追加注文</label>
                                    <div class="col-sm-10">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="toppings[]" value="ビール" id="pepperoni"> ビール
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="toppings[]" value="オレンジジュース" id="extra-cheese"> オレンジジュース
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="toppings[]" value="お茶" id="mushrooms"> お茶
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="toppings[]" value="お吸い物" id="ground-beef"> お吸い物
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="toppings[]" value="茶碗蒸し" id="inlineCheckbox3"> 茶碗蒸し
                                        </label>
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="hr-line-dashed"></div>
                                <div class="form-group"><label class="col-sm-2 control-label">備考欄</label>

                                    <div class="col-sm-10"><input type="text" name="instructions" placeholder="ご要望等ございましたらご記入ください" class="form-control"></div>
                                </div>

                                <div class="hr-line-dashed"></div>
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-success" type="submit">注文する</button>
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
