<header>
    <div class="flex justify-between">
        <div class="flex">
            <a href="/"><img class="main-icon" src="/img/icon.png" alt=""></a>
            <div class="global-menu gnavi flex">
                <li><a href="">コース一覧</a></li>
                <li><a href="">ぺねらぼについて</a></li>
                <li><a href="">お問い合わせ</a></li>
            </div>
        </div>
        <div class="flex ">
            <div class="global-menu gnavi flex">
                @guest <!--ログインしていなかったら表示-->
                <li><a href="{{ url('/login') }}">ログイン</a></li>
                <li><a href="{{ url('/register') }}">新規登録</a></li>
                @endguest
                @auth <!--ログインしていたら表示-->
                <li><form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('ログアウト') }}
                    </x-dropdown-link>
                </form></li>
                @endauth
            </div>
        </div>
    </div>
</header>