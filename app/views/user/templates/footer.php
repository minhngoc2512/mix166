<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <div class="footer-logo">
                    <div class="row">
                        <div class="col-sm-12 col-xs-6">
                            <div class="mix166">
                                <a href="/"><img src="http://st.mix166.com/html/images/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xs-6">
                            <div class="app-store">
                                <a href="https://itunes.apple.com/us/app/id1049233270?mt=8" target="_blank"><img src="http://st.mix166.com/html/images/app-store.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="footer-menu">
                    <div class="row">
                        <div class="col-sm-3 col-xs-6">
                            <h4 class="title">about</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Company</a></li>
                                <li><a href="#">Terms and Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Feedback</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <h4 class="title">Menu</h4>
                            <ul class="list-unstyled">


                                <li><a href="/tracks/">Track</a></li>
                                <li><a href="/mixsets/">Mixset</a></li>
                                <li><a href="/videos/">Video</a></li>
                                <li><a href="/charts/">Chart</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <h4 class="title">Social network</h4>
                            <ul class="list-inline social">
                                <li class="facebook"><a target="_blank" href="https://www.facebook.com/appmix166/"><i class="glyph-icon flaticon-social-network"></i></a></li>
                                <li class="twitter"><a target="_blank" href="https://twitter.com/Appmix166"><i class="glyph-icon flaticon-social-media"></i></a></li>
                                <li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UC26cKvVE9UryMvtFBHTr8ew"><i class="glyph-icon flaticon-social"></i></a></li>
                                <li class="instagram"><a target="_blank" href="https://instagram.com/mix166/"><i class="glyph-icon flaticon-social-media-1"></i></a></li>
                                <li class="google"><a target="_blank" href="https://plus.google.com/u/1/103042902420628455208/posts?hl=vi"><i class="glyph-icon flaticon-circle"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div id="search_block" class="search-block">
    <div class="container">
        <div class="search">
            <div class="search-title">
                Search results for
                <a href="#" class="exit"><i class="flaticon-delete"></i></a>
            </div>
            <div class="search-results">
                <h1>kevin</h1>
                <div class="row"></div>
            </div>
        </div>
    </div>
</div>

<div id="login" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form role="form" id="frmLogin" action="/auth/login" method="post" novalidate="novalidate">
                <div class="login">
                    <div class="modal-header modal-header-login">
                        <button type="button" class="close" data-dismiss="modal"><i class="flaticon-delete"></i>
                        </button>
                    </div>
                    <div class="header-login">
                        <ul class="list-logo">
                            <li><a href="/" title=""><img src="http://st.mix166.com/html/images/logo.png"></a></li>
                        </ul>
                    </div>
                    <div class="login-content">
                        <div class="form-group text-info">
                            <span class="success" style="display: none;" id="logNoti">
                                Registration successful
                            </span>
                        </div>
                        <div class="form-group text-info">
                            <input type="email" class="form-control text" id="email" name="email"
                                   placeholder="EMAIL">
                        </div>
                        <div class="form-group text-info">
                            <input type="password" class="form-control text" id="password" name="password"
                                   placeholder="PASSWORD">
                        </div>
                        <div class="form-group">
                            <ul class="notes">
                                <li class="note-1">
                                    <a href="#" data-toggle="modal" data-dismiss="modal"
                                       data-target="#forgot_password">Forgot password ?</a>
                                </li>
                                <li class="note-2">
                                    <a href="#" data-toggle="modal" data-dismiss="modal" data-target="#register">Create
                                        new account</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-login">
                        <div class="form-group">
                            <button type="submit" class="btn btn-login">Login</button>
                        </div>
                        <div class="form-group">
                            <button type="button" onclick="fb_login();" class="btn btn-login-fb"><i
                                        class="fa fa-facebook"></i>Login by Facebook
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script async="" src="//www.googletagmanager.com/gtm.js?id=GTM-WK2Z3D"></script>
<script id="facebook-jssdk" src="//connect.facebook.net/en_US/sdk.js"></script>
<script async="" src="//www.google-analytics.com/analytics.js"></script>
<script>
    //Here we run a very simple test of the Graph API after login is
    //successful.  See statusChangeCallback() for when this call is made.
    // This is called with the results from from FB.getLoginStatus().
    function statusChangeCallback(response) {
        // The response object is returned with a status field that lets the
        // app know the current login status of the person.
        // Full docs on the response object can be found in the documentation
        // for FB.getLoginStatus().
        if (response.status === 'connected') {
//                console.log(response.authResponse);
            // Logged into your app and Facebook.
            $.ajax({
                method: "POST",
                url: "/auth/loginFacebookv2",
                data: response.authResponse,
                dataType: "json"
            })
                .done(function (data) {
                    if (data.status == 1) {
                        location.reload();
                    } else {
                        alert(data.error);
                    }
                });
        } else if (response.status === 'not_authorized') {
            // The person is logged into Facebook, but not your app.
            document.getElementById('status').innerHTML = 'Please log into this app.';
        } else {
            // The person is not logged into Facebook, so we're not sure if
            // they are logged into this app or not.
            document.getElementById('status').innerHTML = 'Please log into Facebook.';
        }
    }

    // This function is called when someone finishes with the Login
    // Button.  See the onlogin handler attached to it in the sample
    // code below.
    function checkLoginState() {
        FB.getLoginStatus(function (response) {
            statusChangeCallback(response);
        });
    }
    function fb_login() {
        FB.login(function (response) {
            statusChangeCallback(response);
        }, {
            scope: 'public_profile, email'
        });
    }
</script>

<div id="register" class="modal fade" role="dialog" login="">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form role="form" id="frmRegister" action="/auth/register" method="post" novalidate="novalidate">
                <div class="header-login">
                    <ul class="list-logo">
                        <li><a href="#" title=""><img src="http://st.mix166.com/html/images/logo.png"></a></li>
                    </ul>
                </div>
                <div class="login-content">
                    <div class="form-group text-info">
                            <span class="success" style="display: none;" id="regNoti">
                                Registration successful
                            </span>
                    </div>
                    <div class="form-group text-info">
                        <input type="email" class="form-control text" id="reg_email" name="email"
                               placeholder="EMAIL">
                    </div>
                    <div class="form-group text-info">
                        <input type="text" class="form-control text" id="name" name="name" placeholder="FULL NAME">
                    </div>
                    <div class="form-group text-info">
                        <input type="password" class="form-control text" id="reg_password" name="password"
                               placeholder="PASSWORD">
                    </div>
                    <div class="form-group text-info">
                        <input type="password" class="form-control text" id="reg_re_password" name="re_password"
                               placeholder="RETYPE NEW PASSWORD">
                    </div>

                    <div class="form-group check-box">
                        <input type="checkbox" id="agree"> Terms of Service and User Agreement
                    </div>
                </div>
                <div class="footer-login">
                    <div class="form-group">
                        <button type="submit" class="btn btn-register">Create an account</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="forgot_password" class="modal fade" role="dialog" login="">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form role="form" id="frmForget" novalidate="novalidate">
                <div class="header-login">
                    <ul class="list-logo">
                        <li><a href="#" title=""><img src="http://st.mix166.com/html/images/logo.png"></a></li>
                    </ul>
                </div>
                <div class="form-group text-info">
                        <span class="success" style="display: none;" id="forgetNoti">

                        </span>
                </div>
                <div class="login-content">
                    <div class="form-group text-info">
                        <input type="email" class="form-control text" id="email" name="email"
                               placeholder="YOUR EMAIL">
                    </div>
                </div>
                <div class="footer-login">
                    <div class="form-group">
                        <button type="submit" class="btn btn-register">Get your password</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="song_share" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-share-music">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                <h4 class="modal-title">Share</h4>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-sm-4">
                        <ul class="list-inline">
                            <li>
                                <a href="#" id="facebookShare" class="ftg facebook popup"></a>
                            </li>
                            <li>
                                <a href="#" id="twitterShare" class="ftg twitter popup"></a>
                            </li>
                            <li>
                                <a href="#" id="googleShare" class="ftg google popup"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-8">
                        <div class="link-share">
                            <input type="text" id="link-share" class="form-control input-sm" value="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="massenger" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-share-music">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                <h4 class="modal-title">Massenger</h4>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <p>Complet</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="modal_music_buy">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                <h4 class="modal-title">BUY MIXSET</h4>
            </div>
            <div class="modal-body">
                <div class="media">
                    <div class="media-left" id="poup-image">
                        <!--<span class="bgi" style="background-image: url()"></span> -->
                    </div>
                    <div class="media-body">
                        <h3 class="price"><strong>price: <span>100.000 vnđ</span></strong></h3>
                        <ul>
                            <li>Listenning full version of this mixset</li>
                            <li>Download Mixset in MP3 and LossLess format</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="text-center">
                    <button type="button" class="btn btn-default btn-addd-cart">ADDD TO CART</button>
                    <button type="button" class="btn btn-danger btn-addd-buy">BUY MIXSET NOW</button>
                </div>
            </div>
            <div>
                <div>
                    <input type="hidden" id="data-object">
                    <input type="hidden" id="data-user">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end #footer -->
<script type="text/javascript" src="http://st.mix166.com/html/js/lib.js"></script>
<script type="text/javascript" src="http://st.mix166.com/html/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://st.mix166.com/html/plugins/slick/slick.min.js"></script>
<script type="text/javascript" src="http://st.mix166.com/html/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="http://st.mix166.com/html/js/start.js?v=1494145966"></script>
<script type="text/javascript" src="http://st.mix166.com/html/js/function.js?v=1494145966"></script>
<script>
    $(document).ready(function () {
        $("body").append(jQuery("<div><dt/><dd/></div>").attr("id", "progress"));
        $("#progress").width(100 + "%");
        $("#progress").width("101%").delay(800).fadeOut(400, function () {
            $(this).remove();
        });
    });
</script>

<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-74510293-1', 'auto');
    ga('send', 'pageview');

</script>

<div id="fb-root" class=" fb_reset">
    <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
        <div></div>
    </div>
    <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
        <div>
            <iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" allowfullscreen="true"
                    scrolling="no" id="fb_xdm_frame_http" aria-hidden="true"
                    title="Facebook Cross Domain Communication Frame" tabindex="-1"
                    src="http://staticxx.facebook.com/connect/xd_arbiter/r/87XNE1PC38r.js?version=42#channel=f1c251582d12c&amp;origin=http%3A%2F%2Fmix166.com"
                    style="border: none;"></iframe>
            <iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true"
                    scrolling="no" id="fb_xdm_frame_https" aria-hidden="true"
                    title="Facebook Cross Domain Communication Frame" tabindex="-1"
                    src="https://staticxx.facebook.com/connect/xd_arbiter/r/87XNE1PC38r.js?version=42#channel=f1c251582d12c&amp;origin=http%3A%2F%2Fmix166.com"
                    style="border: none;"></iframe>
        </div>
    </div>
</div>
<script>

    window.fbAsyncInit = function () {
        FB.init({
            appId: '1037661906285329',
            xfbml: true,
            version: 'v2.5'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

</script>

<script>
    $(document).ready(function () {
        $("#link_search_tl").click(function () {
            $("#navbar > ul").css({
                "opacity": "0",
            });
            $("#search_tl").fadeIn();
        });

        $("#close_search_tl").click(function () {
            $("#navbar > ul").css({
                "opacity": "1",
            });
            $("#search_tl").fadeOut();
        });

        var isMobile = {
            Android: function () {
                return navigator.userAgent.match(/Android/i);
            },
            iOS: function () {
                return navigator.userAgent.match(/iPhone|iPad|iPod/i);
            }
        };

        if (!sessionStorage.getItem('app_mobile')) {
            if (isMobile.Android()) {
                var a = '<div class="app-mobile"><div id="android" class="app-mobile-block"><a onclick="clickCounter()" href="#" class="link-close">x</a><span class="a-icon"></span><div class="a-info"><strong>Mix166 - Listen to EDM &amp; Mixset</strong><span>FPT Telecom</span><span>Top Free in Music &amp; Audio</span></div><a target="_blank" href="https://play.google.com/store/apps/details?id=com.bda.mix166" class="link-view">view</a></div></div>';
                $('body').prepend(a);
            } else if (isMobile.iOS()) {
                var i = '<div class="app-mobile"><div id="ios" class="app-mobile-block"><a href="#" class="link-close">x</a><span class="a-icon"></span><div class="a-info"><strong>Mix166 - Listen to EDM &amp; Mixset</strong><span>FPT Telecom</span><span>Top Free in Music &amp; Audio</span></div><a target="_blank" href="https://itunes.apple.com/us/app/id1049233270?mt=8" class="link-view">view</a></div></div>';
                $('body').prepend(i);
            }
            $('.link-close, .link-view').click(function () {
                $('.app-mobile').remove();
                sessionStorage.setItem('app_mobile', '1');
            });
        }

    });
</script>

<!-- Google Tag Manager -->
<noscript>&lt;iframe src="//www.googletagmanager.com/ns.html?id=GTM-WK2Z3D"
    height="0" width="0" style="display:none;visibility:hidden"&gt;&lt;/iframe&gt;
</noscript>
<script>(function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(), event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            '//www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-WK2Z3D');</script>
<!-- End Google Tag Manager -->

</div>
</body>
</html>