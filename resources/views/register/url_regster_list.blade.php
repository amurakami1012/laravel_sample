{{--  @extends('admin.layouts.app')  --}}
@extends('adminlte::page')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-md-4" style="padding-right: 10;">
                            <div class="form-group">
                                <label>名前検索</label>
                                <input id="name_search" name="name_search" type="text" class="form-control" value="{{$request->name_search}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary">検索</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 search-result-count">
                        検索結果（{{$url_masters->count()}}件）
                    </div>
                </div>
                <div class="">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>タイトル</th>
                            <th>備考</th>
                            <th>登録日</th>
                        </thead>
                        <tbody>
                            @foreach ($url_masters as $url_master)
                                <tr>
                                    {{--  タイトル  --}}
                                    <td><a href="{{$url_master->url}}" target="_blank">{{$url_master->title}}</a></td>
                                    {{--  備考  --}}
                                    <td>{{$url_master->remarks}}</td>
                                    {{--  登録日  --}}
                                    <td>{{$url_master->created_dt}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
