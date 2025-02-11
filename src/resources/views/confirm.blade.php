@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('./css/confirm.css')}}" />
@endsection

@section('header')
<header class="header">
    <div class="header_inner">
        <a class="header_loge" href="/">
            FashionablyLate
        </a>
    </div>
</header>
@endsection

@section('content')
    <div class="confirm__content">
        <div class="confirm__heading">
            <h2 class="confirm_heading-logo">Confirm</h2>
        </div>
        <form class="form" action="/thanks" method="post">
            @csrf
            <div class="confirm-table">
                <table class="confirm-table_inner">
                    <tr class="confirm-table_row">
                        <th class="confirm-table_header">お名前</th>
                        <td class="confirm-table_text">
                            <input class="confirm-table_text_name" type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly />
                            <input class="confirm-table_text_name" type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly />
                        </td>
                    </tr>
                    <tr class="confirm-table_row">
                        <th class="confirm-table_header">性別</th>
                        <td class="confirm-table_text">
                            <input type="hidden" name="gender" value="{{ $contact['gender'] }}" readonly/>
                                <?php if ($contact['gender'] == '1') {echo '男性';} else if ($contact['gender'] == '2') {echo '女性';} else if ($contact['gender'] == '3') {echo 'その他';}?>
                        </td>
                    </tr>
                    <tr class="confirm-table_row">
                        <th class="confirm-table_header">メールアドレス</th>
                        <td class="confirm-table_text">
                            <input class="confirm-table_text_detail" type="text" name="email" value="{{ $contact['email'] }}" readonly />
                        </td>
                    </tr>
                    <tr class="confirm-table_row">
                        <th class="confirm-table_header">電話番号</th>
                        <td class="confirm-table_text">
                            <input class="confirm-table_text_detail" type="text" name="tel" value="{{ $contact['tel'] }}" readonly />
                        </td>
                    </tr>
                    <tr class="confirm-table_row">
                        <th class="confirm-table_header">住所</th>
                        <td class="confirm-table_text">
                            <input class="confirm-table_text_detail" type="text" name="address" value="{{ $contact['address'] }}" readonly />
                        </td>
                    </tr>
                    <tr class="confirm-table_row">
                        <th class="confirm-table_header">建物名</th>
                        <td class="confirm-table_text">
                            <input class="confirm-table_text_detail" type="text" name="building_name" value="{{ $contact['building_name'] }}" readonly />
                        </td>
                    </tr>
                    <tr class="confirm-table_row">
                        <th class="confirm-table_header">お問い合わせの種類</th>
                        <td class="confirm-table_text">
                            <input type="hidden" name="categories" value="{{ $contact['categories'] }}" readonly/>
                            <?php if ($contact['categories'] == '1') {echo '商品のお届けについて';} else if ($contact['categories'] == '2') {echo '商品の交換について';} else if ($contact['categories'] == '3') {echo '商品トラブル';} else if ($contact['categories'] == '4') {echo 'ショップへのお問い合わせ';} else if ($contact['categories'] == '5') {echo 'その他';}?>
                        </td>
                    </tr>
                    <tr class="confirm-table_row-content">
                        <th class="confirm-table_header">お問い合わせ内容</th>
                        <td class="confirm-table_text">
                            <textarea class="confirm-table_text_content" name="content" wrap="soft" readonly>{{ $contact['content'] }}</textarea>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">送信</button>
                <button class="form__button-back" type="button" onClick="history.back()">修正</button>
            </div>
        </form>
    </div>

@endsection