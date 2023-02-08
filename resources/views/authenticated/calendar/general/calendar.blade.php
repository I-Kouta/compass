@extends('layouts.sidebar')
<!-- スクール予約のビュー -->
@section('content')
<div class="vh-100 pt-5" style="background:#ECF1F6;">
  <div class="border w-75 m-auto pt-5 pb-5" style="border-radius:5px; background:#FFF;">
  <!-- ↑backgroundはカレンダー自体の背景 -->
    <div class="w-75 m-auto border" style="border-radius:5px;">

      <p class="text-center">{{ $calendar->getTitle() }}</p>
      <div class="">
        {!! $calendar->render() !!}
      </div>
    </div>
    <div class="text-right w-75 m-auto">
      <input type="submit" class="btn btn-primary" value="予約する" form="reserveParts">
    </div>
  </div>
</div>
<!-- ここにキャンセル時の非同期を表示させる -->
<div class="modal js-modal">
  <div class="modal__bg js-modal-close"></div>
  <div class="modal__content">
    <form action="{{ route('post.edit') }}" method="post">
      <div class="w-100">
        <div class="modal-inner-title w-50 m-auto">
          <input type="text" name="setting_reserve" class="w-100">
        </div>
        <div class="modal-inner-body w-50 m-auto pt-3 pb-3">
          <textarea name="setting_reserve" class="w-100"></textarea>
        </div>
        <div class="w-50 m-auto edit-modal-btn d-flex">
          <a class="js-modal-close btn btn-danger d-inline-block" href="">CLOSE</a>
          <input type="hidden" class="edit-modal-hidden" name="post_id" value="">
          <input type="submit" class="btn btn-primary d-block" onclick="return confirm('予約をキャンセルします。よろしいでしょうか？')" value="OK">
        </div>
      </div>
      {{ csrf_field() }}
    </form>
  </div>
</div>
@endsection
