<div class="study-frame-wrap-right study-frame-wrap">
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



<style>
    .flag-form {
        width: 300px;
        position: relative;
        display: block;
        padding: 0.8em !important;
        border-radius: 0;
        background: #f5f5f5;
        color: #000;
        font-weight: 400;
        font-family: Avenir Next, Helvetica Neue, Helvetica, Arial, sans-serif;
        height: auto !important;
        border: 1px solid #ced4da;
    }

    .check-ajax-wrap {
        background-color: #fff;
        padding: 16px;
    }

    .check-ajax {
        margin-left: 50px;
    }

    .button008 {
        margin-left: 50px;
        margin-top: 2px;
    }

    .button008 button {
        cursor: pointer;
        background: #eee;
        position: relative;
        display: flex;
        justify-content: space-around;
        align-items: center;
        margin: 0 auto;
        max-width: 240px;
        padding: 10px 25px;
        color: #313131;
        transition: 0.3s ease-in-out;
        font-weight: 500;
        z-index: 0;
    }

    .button008 button:before {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        width: 0;
        display: block;
        background: #6bb6ff;
        transition: .3s;
        left: 0;
    }

    .button008 button:hover {
        color: #FFF;
    }

    .button008 button:hover:before {
        width: 100%;
        z-index: -1;
    }
</style>
