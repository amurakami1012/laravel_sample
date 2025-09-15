@extends('adminlte::page')

@section('title', 'URL登録')

@section('content_header')
    <h1>URL登録</h1>
@stop

@section('content')
<form action="{{route('register.url.register.store')}}" method="post" class="form-beforeunload"  enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="col-md-1">タイトル</label>
            <input id="title" name="title" type="text" class="form-control col-md-3" value="">
        </div><!--/.form-group-->
        <div class="form-group">
            <label>URL</label>
            <input id="url" name="url" type="text" class="form-control col-md-5" value="">
        </div><!--/.form-group-->
        <div class="form-group">
            <label>備考</label>
            <textarea id="remarks" name="remarks" rows="10" class="form-control col-md-5"></textarea>
        </div><!--/.form-group-->
        <p class="text-left">
            <button type="submit" class="btn btn-primary">登録</button>
        </p>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop