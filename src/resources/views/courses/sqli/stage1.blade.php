@extends('layouts.study-layout')

@section('title', 'SQL')

@section('mission', 'SQLに侵入だ')

@section('left-content')


<p>あああああ</p>
<p>あああああ</p>
<p>あああああ</p>
<div class="code-toolbar">
    <pre class="line-numbers language-scss" tabindex="0"><code class="language-PHP">&lt;?php echo echo echo echo echo &quot;Hello World&quot; ?&gt;</code></pre>
</div>
<div class="mybox">
    <p>Username : admin</p>
    <p>Password : password</p>
</div>

<p>あああああ</p>
<p>あああああ</p>
<p>あああああ</p>
<!--吹き出しはじまり-->
<div class="balloon5">
    <div class="faceicon">  
    <img src="/img/target.png" alt="">
    </div>
    <div class="chatting">
    <div class="says">
        <p>★文章を入れる★</p>
    </div>
    </div>
</div>
<div class="balloon-right">
    <div class="chatting">
        <div class="says2">
            <p>★文章を入れるるるるるるるるるるるるうるるるるるるるるるるるるうるるるるるるるるるるるるうるるるるる★</p>
        </div>
    </div>
    <div class="faceicon">  
        <img src="/img/target.png" alt="">
    </div>
</div>
<!--吹き出し終わり-->
<p>あああああ</p>
<p>あああああ</p>
<p>あああああ</p>
<p>あああああ</p>
<p>あああああ</p>
<p>あああああ</p>
<p>あああああ</p>
<p>あああああ</p>
<p>あああああ</p>
<p>あああああ</p>
<p>あああああ</p>
<p>あああああ</p>
<p>あああああ</p>
<p>あああああ</p>
<p>あああああ</p>
<p>あああああ</p>
<p>あああああ</p>
<p>あああああ</p>
<p>あああああ</p>
<p>あああああ</p>
<p>あああああ</p>
<p>あああああ</p>
<p>あああああ</p>
<p>あああああ</p>
<p>あああああ</p>
<p>あああああ</p>
<p>あああああ</p>
<p>あああああ</p>
<p>あああああ</p>
<p>あああああ</p>
<p>あああああ</p>

@endsection

@section('right-content')
    @include('courses.sqli.iframe',['url'=>'http://127.0.0.1:20001'])
    @include('parts.ajax')
@endsection