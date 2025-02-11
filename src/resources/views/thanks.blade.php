@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('./css/thanks.css')}}" />
@endsection

@section('content')
<div class="thanks">
    <div class="thanks__content">      
        <div class="thanks__heading">
            <h2>お問い合わせありがとうございました</h2>
        </div>
        <div class="thanks_button">
            <button class="thanks__button-home" type="home">
                <a href="/">HOME</a>
            </button>
        </div>
    </div>
</div>
@endsection