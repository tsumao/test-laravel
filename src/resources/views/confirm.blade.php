@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
@endsection


  
@section('content')
    <div class="confirm__content">
      <div class="confirm__heading">
        <h2>Confirm</h2>
      </div>
      <form class="form" action="/thanks" method="post">
        @csrf
        <div class="confirm-table">
          <table class="confirm-table__inner">
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お名前</th>
              <td class="confirm-table__text">
                  <input type="text" name="first_name" value="{{ $contact['first_name']}}"  style="display: none;"readonly/>
                  <input type="text" name="last_name" value="{{$contact['last_name'] }}" style="display: none;"readonly/>
                  {{ $contact['first_name']}}　{{$contact['last_name'] }}
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">性別</th>
              <td class="confirm-table__text">
                <input type="text" name="category_id"  value="{{$contact['category_id']}}" style="display: none;"readonly/>
                @if($contact['category_id']==1)
                <span>男性</span>
                @elseif($contact['category_id']==2)
                <span>女性</span>
                @elseif($contact['category_id']==3)
                <span>その他</span>
                @endif   
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">メールアドレス</th>
              <td class="confirm-table__text">
                <input type="email" name="email" value="{{ $contact['email'] }}"readonly/>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">電話番号</th>
              <td class="confirm-table__text">
                <input type="tel" name="tel" value="{{ $contact['tel_pre']}}{{$contact['tel_mid']}}{{$contact['tel_pos'] }}"readonly/>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">住所</th>
              <td class="confirm-table__text">
                <input type="text" name="address" value="{{ $contact['address'] }}"readonly/>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">建物名</th>
              <td class="confirm-table__text">
                <input type="text" name="building" value="{{ $contact['building'] }}"readonly/>
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせの種類</th>
              <td class="confirm-table__text">
                <input type="text" name="category_id"  value="{{$contact['category_id']}}" style="display: none;"readonly/>
                @if($contact['category_id']==="1")
                <p>商品のお届けについて</p>
                @elseif($contact['category_id']==="2")
                <p>商品の交換について</p>
                @elseif($contact['category_id']==="3")
                <p>商品トラブル</p>
                @elseif($contact['category_id']==="4")
                <p>ショップへのお問い合わせ</p>
                @elseif($contact['category_id']==="5")
                <p>その他</p>
                @endif                
              </td>
            </tr>
            <tr class="confirm-table__row">
              <th class="confirm-table__header">お問い合わせ内容</th>
              <td class="confirm-table__text">
                <input type="text" name="detail" value="{{ $contact['detail'] }}"readonly/>
              </td>
            </tr>
          </table>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">送信</button>
          <a class="header__logo" href="/" >
        修正
      </a>
        </div>
      </form>
    </div>
@endsection