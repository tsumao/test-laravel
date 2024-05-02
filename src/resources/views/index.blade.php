<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FationablyLate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo" href="/">
        FationablyLate
      </a>
    </div>
  </header>

  <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
      <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--nametext">
              <input type="text" name="first_name" placeholder="例:山田" value="{{ old('first_name') }}"/>
              <input type="text" name="last_name" placeholder="例:太郎" value="{{ old('last_name') }}" />
            </div>
            <div class="form__error">
              @error('first_name')
               {{ $message }}
              @enderror
              @error('last_name')
               {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
              <input type="radio" name="gender" value=1 id="male"checked>
              <label for="male">男性</label>
              <input type="radio" name="gender" value=2 id="female">
              <label for="female">女性</label>
              <input type="radio" name="gender" value=3 id="other">
              <label for="other">その他</label>
            <div class="form__error">
              @error('gender')
               {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}"/>
            </div>
            <div class="form__error">
              @error('email')
               {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--teltext">
              <input type="tel" name="tel_pre" placeholder="080" value="{{ old('tel1') }}"/>
              <span>-</span>
              <input type="tel" name="tel_mid" placeholder="1234" value="{{ old('tel2') }}"/>
              <span>-</span>
              <input type="tel" name="tel_pos" placeholder="5678" value="{{ old('tel3') }}"/>
            </div>
            <div class="form__error">
              @error('tel')
               {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="address" name="address" placeholder="" value="{{ old('address') }}"/>
            </div>
            <div class="form__error">
              @error('address')
               {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="address" name="building" placeholder="" value="{{ old('building') }}"/>
            </div>
            <div class="form__error">
              <!--バリデーション機能を実装したら記述します。-->
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
            <select name="category_id">
              <option value="">選択してください</option>
              @foreach($table as $id=>$content)
              <option value="{{ $id }}">{{ $content }}</option>
              @endforeach
            </select>
            </div>
            <div class="form__error">
              @error('category_id')
               {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="detail" placeholder="資料をいただきたいです" value="{{ old('detail') }}" ></textarea>
            </div>
            <div class="form__error">
              @error('detail')
               {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認画面</button>
        </div>
      </form>
    </div>
  </main>
</body>

</html>