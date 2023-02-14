@extends('layouts.sidebar')
<!-- ルーティング名：'calendar.admin.detail' -->
@section('content')
<div class="vh-100 d-flex" style="align-items:center; justify-content:center;">
  <div class="w-50 m-auto h-75">
    <p><span>{{$date}}日</span><span class="ml-3">{{$part}}部</span></p>
    <div class="h-75 border">
      <table class="">
        <tr class="text-center">
          <th class="w-25">ID</th>
          <th class="w-25">名前</th>
        </tr>
        @foreach($reservePersons as $persons)
        <tr class="text-center">
          <td class="w-25">{{$date}}</td>
          <td class="w-25">{{$part}}</td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</div>
@endsection
