@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sell.css') }}">
@endsection

@section('content')
<div class="content">
  <h1 class="sell-ttl">商品の出品</h1>
  <form class="form-sell" action="/sell" method="post">
    @csrf
    <div class="form-sell__content">

      <div class="form-img">
        <label for="image">商品画像</label>
        <div class="form-img__group">
          <label class="form-img__upload" for="image">画像を選択する</label>
          <input class="form-img__input" type="file" name="image" id="image" accept="image/*">
        </div>
      </div>

      <div class="form-detail">
        <h2 class="form-detail__ttl">商品の詳細</h2>
        <div class="form-detail__container">
          <div class="form-detail__group">
            <label for="brand">ブランド</label>
            <select class="form-detail__brand" name="brand_id" id="brand">
              <option selected value="">選択してください【任意】</option>
              @foreach($brands as $brand)
              <option value="{{ $brand['id'] }}" @if(request('brand')==$brand) selected @endif>{{ $brand['name'] }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-detail__group">
            <label for="category">カテゴリー</label>
            <select class="form-detail__category" name="category_id" id="category">
              <option selected value="">選択してください【必須】</option>
              @foreach($categories as $category)
              <option value="{{ $category['id'] }}" @if(request('category')==$category) selected @endif>{{ $category['name'] }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-detail__group">
            <label for="status">商品の状態</label>
            <select class="form-detail__status" name="status_id" id="status">
              <option selected value="">選択してください【必須】</option>
              @foreach($statuses as $status)
              <option value="{{ $status['id'] }}" @if(request('status')==$status) selected @endif>{{ $status['name'] }}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>

      <div class="form-describe">
        <h2 class="form-describe__ttl">商品名と説明</h2>
        <div class="form-describe__container">
          <div class="form-describe__group">
            <label for="name">商品名</label>
            <input class="form-describe__name" type="text" id="name">
          </div>
          <div class="form-describe__group">
            <label for="detail">商品の説明</label>
            <textarea class="form-describe__content" name="detail" id="detail"></textarea>
          </div>
        </div>
      </div>

      <div class="form-price">
        <h2 class="form-price__ttl">販売価格</h2>
        <div class="form-price__group">
          <label for="price">販売価格</label>
          <input class="form-price__input" type="number" id="price" min="0">
        </div>
      </div>

      <button class="form-sell__button">出品する</button>

    </div>
  </form>
  @endsection