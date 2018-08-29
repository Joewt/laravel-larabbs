@extends('layouts.app')

@section('title')
    搜索结果
@stop

@section('content')
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">

                <div class="panel-body">

                    <h3 class="text-center">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span> 关于"<i style="color: #9b1418;">{{ $q }}</i>"的搜索结果, 共{{ $count }}条
                    </h3>
                    <hr>


                        <div class="empty-block">没有搜索通知！</div>


                </div>
            </div>
        </div>
    </div>
@stop