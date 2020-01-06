@extends('layouts.client')

@section('title', 'トレーニング追加')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>トレーニング追加</h2>
                <form action="{{ action('User\ClientController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <!--<input type="datetime-local" name="datetime">-->
                     <div class="form-group row">
                        <label class="col-md-2">日時</label>
                        <div class="col-md-10">
                            <input type="datetime-local" class="form-control" name="datetime" value="{{ old('datetime') }}">
                        </div>
                    </div>
                    <!--<div class="form-group row">-->
                    <!--    <label class="col-md-2">年齢</label>-->
                    <!--    <div class="col-md-10">-->
                    <!--        <select name="age">-->
                    <!--            @for($i=18;$i <= 80;$i++)-->
                    <!--            <option value="{{$i}}">{{$i}}</option>-->
                    <!--            @endfor-->
                    <!--        </select>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <div class="form-group row">
                        <label class="col-md-2">体重</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="weight" value="{{ old('weight') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">体脂肪率</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="bfp" value="{{ old('bfp') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">トレーニングメニュー</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="training_menu" rows="20">{{ old('purpose') }}</textarea>
                        </div>
                    </div>
                     <div class="form-group row">
                        <label class="col-md-2">メモ</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="memo" rows="20">{{ old('purpose') }}</textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="登録">
                </form>

            </div>
        </div>
    </div>
@endsection