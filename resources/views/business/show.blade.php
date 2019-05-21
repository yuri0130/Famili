@extends('layouts.app') @extends('layouts.nav') @section('content')

<h2>詳細</h2>

<h4>ビジネス名</h4>
<p>
    {{ $business->name }}
</p>
<h4>都道府県</h4>
<p>
    {{ $business->prefecture }}
</p>
<h4>住所</h4>
<p>
    {{ $business->address }}
</p>
<h4>電話番号</h4>
<p>
    {{ $business->contact }}
</p>
<h4>ウェブサイト</h4>
<p>
    {{ $business->url }}
</p>
<h4>ビジネスの説明</h4>
<p>
    {{ $business->description }}
</p>
<h4>ビジネス画像</h4>
<p>
    {{ $business->image }}
</p>
@endsection
