@extends('layouts.newclient')


@section('title', '新規クライアントの作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>新規クライアント作成</h2>
                <form action="{{ action('User\NewClientController@create') }}" method="post" enctype="multipart/form-data">

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
                    <div class="form-group row">
                        <label class="col-md-2">名前</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">メールアドレス</label>
                        <div class="col-md-10">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">性別</label>
                        <div class="col-md-10">
                            <input type="radio" class="radio" name="gender" value="male">男性
                            <input type="radio" class="radio" name="gender" value="female">女性
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">年齢</label>
                        <div class="col-md-10">
                            <select name="age">
                                @for($i=18;$i <= 80;$i++)
                                <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">身長</label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="height" value="{{ old('height') }}">
                        </div>
                    </div>
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
                        <label class="col-md-2">トレーニングの目的</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="goal" rows="20">{{ old('purpose') }}</textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="登録">
                </form>
            </div>
        </div>
    </div>
@endsection