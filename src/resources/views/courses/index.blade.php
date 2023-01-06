@extends('layouts.layout')

@section('title', 'コース一覧')

@section('content')
<div class="main">
    <div class="course-left-content-wrap">
        <div class="course_container">
            <div class="course-wrap flex">
                <img src="/img/icon.png" alt="">
                <p>データベースに侵入せよ！入門SQLインジェクション</p>
            </div>
        </div>
        <div class="course_container">
            <div class="course-wrap flex">
                <img src="/img/icon.png" alt="">
                <p>ぺねらぼについて</p>
            </div>
        </div>


        <div class="accordion">
            <div class="accordion-container">
                <div class="accordion-item course_container">
                    <div class="accordion-title bo-bo js-accordion-title">
                        <div class="course-wrap flex">
                            <img src="/img/icon.png" alt="">
                            <p>ぺねらぼについて</p>
                        </div>
                    </div>
                    <!--/.accordion-title-->
                    <div class="accordion-content bo-bo">
                        <div class="bo-bo flex justify-between">
                            <p>コンテンツが入ります。</p>
                            <div class="rocked-message">チュートリアルをクリアで開放</div>
                        </div>
                        <div class="bo-bo"><p>コンテンツが入ります。</p></div>
                        <div class="bo-bo"><p>コンテンツが入ります。</p></div>
                        <div class="bo-bo"><p>コンテンツが入ります。</p></div>  
                    </div>
                    <div class="accordion-content">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="course-right-content-wrap">
        <div class="course-right-content">hello</div>
    </div>
</div>
@endsection

