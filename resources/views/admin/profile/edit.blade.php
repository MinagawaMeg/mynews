@extends('layouts.admin')
@section('title', 'ニュースの新規作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィール投稿</h2>
                <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">

                  @if (count($errors) > 0)
                      <ul>
                          @foreach($errors->all() as $e)
                              <li>{{ $e }}</li>
                          @endforeach
                      </ul>
                  @endif
                    <div class="form-group row">
                        <!-- <label class="col-md-2" for="title">プロフィール</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div> -->
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">氏名</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="2">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">性別</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="2">{{ old('body') }}</textarea>
                            <p>
                            <input type="radio" name="hyouka" value="good" checked="checked">女性
                            <input type="radio" name="hyouka" value="bad">男性
                        </p>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">趣味</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="5">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">自己紹介</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="5">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection
