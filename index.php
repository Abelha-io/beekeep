<?php
$ini = parse_ini_file('config.ini');

?>
<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <title>@<?php echo $ini['name']; ?> | Abelha.io</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="static/favicon.ico">
    <link rel="icon" type="image/png" href="static/favicon.png">
    <link rel="icon" type="image/png" href="static/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="static/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="static/favicon-16x16.png" sizes="16x16">
    <link rel="apple-touch-icon" sizes="180x180" href="static/apple-icon-180x180.png">
    <link rel="apple-touch-icon" sizes="152x152" href="static/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="144x144" href="static/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="120x120" href="static/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="114x114" href="static/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="static/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="static/apple-icon-76x76.png">

    <meta name="viewport" content="width=device-width">

    <meta name="description" content="Abelha.io! Bees pollination linking the world.">
    <meta property="og:title" content="@<?php echo $ini['name']; ?> | Abelha.io">
    <meta property="og:description" content="Abelha.io! Bees pollination linking the world.">
    <meta property="og:url" content="https://bio.abelha.io/<?php echo $ini['name']; ?>">
    <!--    
    <meta property="og:image" content="https://d1fdloi71mui9q.cloudfront.net/vETztvHHRx69hEc05U5l_afb3bb86d471c1911567551690567c41">
    <meta property="og:image:secure_url" content="https://bio.abelha.io/beekeep/beekeep.jpg">
        https://d1fdloi71mui9q.cloudfront.net/vETztvHHRx69hEc05U5l_afb3bb86d471c1911567551690567c41">
    -->
    <meta property="og:updated_time" content="1625073463000">
    <meta property="profile:username" content="<?php echo $ini['name']; ?>">

    <link rel="canonical" href="https://bio.abelha.io/<?php echo $ini['name']; ?>">
    <meta name="twitter:title" content="@<?php echo $ini['name']; ?> | Abelha.io">
    <meta name="twitter:description" content="Abelha.io! Bees pollination linking the world.">
    <meta name="twitter:image" content="https://d1fdloi71mui9q.cloudfront.net/vETztvHHRx69hEc05U5l_afb3bb86d471c1911567551690567c41">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:domain" content="Abelhaio">

    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta property="og:image:height" content="90">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="90">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:site_name" content="Abelha.io">
    <meta property="og:type" content="profile">
    <meta content="2419200">
    <meta name="theme-color" content="#ffffff">
<!--
    <meta name="next-head-count" content="3">
    <meta content="d9fd170e8cf31c89537e" name="wot-verification">
    <meta content="211011856296014" property="fb:app_id">
    <meta name="viewport" content="width=device-width">
    <style data-tippy-stylesheet="">
        .tippy-box[data-animation=fade][data-state=hidden]{opacity:0}[data-tippy-root]{max-width:calc(100vw - 10px)}
        .tippy-box{position:relative;background-color:#333;color:#fff;border-radius:4px;font-size:14px;line-height:1.4;outline:0;transition-property:transform,visibility,opacity}
        .tippy-box[data-placement^=top]>
        .tippy-arrow{bottom:0}
        .tippy-box[data-placement^=top]>
        .tippy-arrow:before{bottom:-7px;left:0;border-width:8px 8px 0;border-top-color:initial;transform-origin:center top}
        .tippy-box[data-placement^=bottom]>
        .tippy-arrow{top:0}
        .tippy-box[data-placement^=bottom]>
        .tippy-arrow:before{top:-7px;left:0;border-width:0 8px 8px;border-bottom-color:initial;transform-origin:center bottom}
        .tippy-box[data-placement^=left]>
        .tippy-arrow{right:0}
        .tippy-box[data-placement^=left]>
        .tippy-arrow:before{border-width:8px 0 8px 8px;border-left-color:initial;right:-7px;transform-origin:center left}
        .tippy-box[data-placement^=right]>.tippy-arrow{left:0}.tippy-box[data-placement^=right]>.tippy-arrow:before{left:-7px;border-width:8px 8px 8px 0;border-right-color:initial;transform-origin:center right}.tippy-box[data-inertia][data-state=visible]{transition-timing-function:cubic-bezier(.54,1.5,.38,1.11)}.tippy-arrow{width:16px;height:16px;color:#333}.tippy-arrow:before{content:"";position:absolute;border-color:transparent;border-style:solid}.tippy-content{position:relative;padding:5px 9px;z-index:1}
    </style>
    <script>
        window.__lter=window.__lter||{q:window.__lter && _lter.q||[],trackEvent:function(){__lter.q.push(Array.prototype.slice.call(arguments))}}</script>
    <script id="__ltcep" data-version="2" data-url="linktr.ee/events.ssergni//:sptth" src="https://assets.production.linktr.ee/cep/cep.min.js?v2"></script>
    <script type="text/javascript" async="" src="//www.googleadservices.com/pagead/conversion_async.js" nonce="3e886c473e92eda601a5200c599334a5"></script>
    <script type="application/ld+json">{"@context":"https://schema.org/","@type":"WebPage","name":"@beekeep | Linktree","url":"https://linktr.ee/beekeep","sameAs":[],"description":"Linktree. Make your link do more.","image":"https://d1fdloi71mui9q.cloudfront.net/vETztvHHRx69hEc05U5l_afb3bb86d471c1911567551690567c41","identifier":"beekeep","alternateName":"@beekeep Linktree Profile","significantLink":"https://uspdigital.usp.br/apolo/inscricaoPublicaFormTurmaListar?codund=86&codcurceu=860400242&codedicurceu=21003&numseqofeedi=1&oriins=W","dateCreated":1575269281000,"dateModified":1625073463000,"isPartOf":"https://linktr.ee","thumbnailUrl":"https://d1fdloi71mui9q.cloudfront.net/vETztvHHRx69hEc05U5l_afb3bb86d471c1911567551690567c41"}</script>
    <link rel="preload" href="/_next/static/css/commons.6899ea84.chunk.css" as="style" crossorigin="anonymous">
    <link rel="stylesheet" href="/_next/static/css/commons.6899ea84.chunk.css" crossorigin="anonymous">
    <link rel="preload" href="/_next/static/css/styles.0dbcdade.chunk.css" as="style" crossorigin="anonymous">
    <link rel="stylesheet" href="/_next/static/css/styles.0dbcdade.chunk.css" crossorigin="anonymous">
    <link rel="preload" href="/_next/static/hTD63uvQXn8MvTuUalrpI/pages/_app.js" as="script" crossorigin="anonymous">
    <link rel="preload" href="/_next/static/hTD63uvQXn8MvTuUalrpI/pages/%5Bprofile%5D.js" as="script" crossorigin="anonymous">
    <link rel="preload" href="/_next/static/runtime/webpack-6ef28db84b4c42ad34e9.js" as="script" crossorigin="anonymous">
    <link rel="preload" href="/_next/static/chunks/framework.eb23ff06184ceee71586.js" as="script" crossorigin="anonymous">
    <link rel="preload" href="/_next/static/chunks/4674618e.696d40e374d7814f6985.js" as="script" crossorigin="anonymous">
    <link rel="preload" href="/_next/static/chunks/commons.35f58f85dad0a7d379d1.js" as="script" crossorigin="anonymous">
    <link rel="preload" href="/_next/static/chunks/6f4f8e39866ca702fbc957aa042e0c58541a4f17.0fb1247133ca8c7fd8d1.js" as="script" crossorigin="anonymous">
    <link rel="preload" href="/_next/static/chunks/7798d43eba9a5584369aa059e568068003b83458.cc80cfd5283f0916f033.js" as="script" crossorigin="anonymous">
    <link rel="preload" href="/_next/static/runtime/main-f6192d1c0cf5473ef00f.js" as="script" crossorigin="anonymous">
    <link rel="preload" href="/_next/static/chunks/37aee9ee.b84b8fd13811fc4f4892.js" as="script" crossorigin="anonymous">
    <link rel="preload" href="/_next/static/chunks/2edb282b.cc772d4c539c5a40fb08.js" as="script" crossorigin="anonymous">
    <link rel="preload" href="/_next/static/chunks/styles.b4d9b51f36211354b42b.js" as="script" crossorigin="anonymous">
    <style data-styled="active" data-styled-version="5.2.1"></style>
-->
</head>


<body>
    <img 
        id="userPhoto" 
        src="beekeep.jpg"
        alt="@beekeep Profile Image | Linktree"
        data-testid="ProfileImage"
        filter="none"
        class="sc-dIUggk iqTbIW">    
    <a href="https://www.instagram.com/beekeep.life" id="userName">@beekeep</a>
    <div id="links">
        <a class="link" href="<?php echo $ini['link1']; ?>" target="_blank"><?php echo $ini['text1']; ?></a>
        <a class="link" href="<?php echo $ini['link2']; ?>" target="_blank"><?php echo $ini['text2']; ?></a>
        <a class="link" href="<?php echo $ini['link3']; ?>" target="_blank"><?php echo $ini['text3']; ?></a>
        <a class="link" href="<?php echo $ini['link4']; ?>" target="_blank"><?php echo $ini['text4']; ?></a>
        <a class="link" href="<?php echo $ini['link5']; ?>" target="_blank"><?php echo $ini['text5']; ?></a>
    </div>

    <!-- Javascript
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script  src="index.js"></script>
    <script>
        .cAbzNH {
            width: 100%;
            -webkit-box-pack: center;
            justify-content: center;
            height: 20px;
            }
    </script>
    -->

    <center><div class="sc-bqyKva fMmOYz">
        <div class="sc-bqyKva sc-kstrdz cAbzNH btjemE">
            <a href="/?utm_source=bio.abelha.io&amp;utm_medium=profile&amp;utm_content=<?php echo $ini['name']; ?>" class="sc-fFubgz dcJtyW">
                <img src="https://abelha.io/frontend/assets/svg/abelha.io.svg" width="15%" height="15%">
            </a>
        </div>
    </div>
    </center>
</body>
</html>
