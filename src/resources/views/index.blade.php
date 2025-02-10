@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('./css/index.css') }}" />
@endsection

@section('header')
<header class="header">
    <div class="header_inner">
        <a class="header_loge" href="/" >
            FashionablyLate
        </a>
    </div>
</header>
@endsection

@section('content')
    <div class="contact__content">
        <div class="contact__heading">
            <h2>Contact</h2>
        </div>
        <form class="form" action="/confirm" method="post">
            @csrf
            <div class="form_frame">
                <div class="form_group">
                    <div class="form_group-title">
                        <span class="form_labele--item">お名前</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form_group-content">
                        <div class="form_group-text">
                            <input type="text" name="first_name"placeholder="例: 山田"/>
                            <input type="text" name="last_name" placeholder="例: 太郎"/>
                        </div>
                        <div class="form_error">
                            @error('first_name')
                            {{ $message }} 
                            @enderror
                            @error('last_name')
                            {{ $message }} 
                            @enderror                        
                        </div>
                    </div>
                </div>
                <div class="form_group">
                    <div class="form_group-title">
                        <span class="form_labele--item">性別</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form_group-content">
                        <div class="form_group-text_gender">
                            <input type="radio" name="gender" value="1" checked="checked">
                            <label for="men" name="gender" value="男性">男性</label>
                            <input type="radio" name="gender" value="2">
                            <label for="women" name="gender" value="女性">女性</label>
                            <input type="radio" name="gender" value="3">
                            <label for="non" name="gender" value="その他">その他</label>      
                        </div>
                        <div class="form_error">
                            @error('gender')
                            {{ $message }} 
                            @enderror                    
                        </div>
                    </div>
                </div>
                <div class="form_group">
                    <div class="form_group-title">
                        <span class="form_labele--item">メールアドレス</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form_group-content">
                        <div class="form_group-text">
                            <input type="email" name="email" placeholder="例: test@example.com"/>
                        </div>
                        <div class="form_error">
                            @error('email')
                            {{ $message }} 
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form_group">
                    <div class="form_group-title">
                        <span class="form_labele--item">電話番号</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form_group-content">
                        <div class="form_group-text">
                            <input type="tel" name="tel" placeholder="080-1234-5678"/>
                        </div>
                        <div class="form_error">
                            @error('tel')
                            {{ $message }} 
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form_group">
                    <div class="form_group-title">
                        <span class="form_labele--item">住所</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form_group-content">
                        <div class="form_group-text">
                            <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3"/>
                        </div>
                        <div class="form_error">
                            @error('address')
                            {{ $message }} 
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form_group">
                    <div class="form_group-title">
                        <span class="form_labele--item">建物名</span>
                    </div>
                    <div class="form_group-content">
                        <div class="form_group-text">
                            <input type="text" name="building_name" placeholder="例: 千駄ヶ谷マンション101"/>
                        </div>
                    </div>
                </div>
                <div class="form_group">
                    <div class="form_group-title">
                        <span class="form_labele--item">お問い合わせの種類</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form_group-content">
                        <div class="form_group-text">
                            <select name="categories">
                                <option value="">--選択してください--</option>
                                <option value="1">
                                <label for="select" value="お届け">商品のお届けについて</label></option>
                                <option value="2">
                                <label for="select" value="交換">商品の交換について</label></option>
                                <option value="3">
                                <label for="select" value="トラブル">商品トラブル</label></option>
                                <option value="4">
                                <label for="select" value="ショップ">ショップへのお問い合わせ</label></option>
                                <option value="5">
                                <label for="select" value="その他">その他</label></option>
                            </select>
                        </div>
                        <div class="form_error">
                            @error('categories')
                            {{ $message }} 
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form_group">
                    <div class="form_group-title">
                        <span class="form_labele--item">お問い合わせ内容</span>
                        <span class="form__label--required">※</span>
                    </div>
                    <div class="form_group-content">
                        <div class="form_group-text">
                        <textarea name="content" placeholder="お問い合わせ内容を記載ください"></textarea>
                        </div>
                        <div class="form_error">
                            @error('content')
                            {{ $message }} 
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">確認画面</button>
            </div>
        </form>
    </div>
@endsection