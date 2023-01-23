<div class="study-frame-wrap-right study-frame-wrap flag-send-box">
    <div class="study-frame-top">
        <i class="fa-regular fa-flag icon-img icon-img-2"></i>
        <p>回答提出</p>
    </div>
    <div class="check-ajax-wrap" style="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <div class="flex check-ajax">
            <input class="flag-form" id="flag-input" type="text" placeholder="Flag">
            <div class="button008">
                <button type="button" class="submit-btn" id="flag-submit-btn">送信</button>
            </div>
        </div>
        <script src="/js/flag-send.js"></script>
    </div>
</div>
