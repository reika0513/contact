@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('./css/register.css')}}" />
@endsection

@section('header')
<header class="header">
    <div class="header_inner">
        <a class="header_loge" href="/">
            FashionablyLate
        </a>
        <a class="header_logo-login" href="/login">login</a>
    </div>
</header>
@endsection

@section('content')
<div class="register__content">
    <div class="register__heading">
        <h2 class="register_heading-logo">Register</h2>
    </div>
    <form class="form" action="/register" method="post">
        @csrf
        <div class="form_frame">
            <div class="form_group">
                <div class="form_group-title">
                    <span class="form_label">お名前</span>
                </div>
                <div class="form_group-content">
                    <div class="form_group-text">
                        <input class="form_group-text-detail" type="text" name="name" value="{{ old ('name') }}" placeholder="例: 山田 太郎"/>
                    </div>
                    <div class="form_error">
                        @error('name')
                        {{ $message }} 
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form_group">
                <div class="form_group-title">
                    <span class="form_label">メールアドレス</span>
                </div>
                <div class="form_group-content">
                    <div class="form_group-text">
                        <input class="form_group-text-detail" type="email" name="email" value="{{ old ('email') }}" placeholder="例: test@example.com"/>
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
                    <span class="form_label">パスワード</span>
                </div>
                <div class="form_group-content">
                    <div class="form_group-text">
                        <input class="form_group-text-detail" type="password" name="password"  value="{{ old ('password') }}" placeholder="例: coachtech1106"/>
                    </div>
                    <div class="form_error">
                        @error('password')
                        {{ $message }} 
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">登録</button>
        </div>
    </form>
</div>
@endsection