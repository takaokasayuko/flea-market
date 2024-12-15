@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('header')
<div class="header-nav">
  <nav class="nav">
    <ul class="nav__group">
      <li class="nav__item">
        <form class="form-logout" action="/logout" method="post">
          @csrf
          <button class="header-nav__button">ログアウト</button>
        </form>
      </li>
    </ul>

  </nav>
</div>
@endsection

@section('content')
<div class="content">

</div>
@endsection