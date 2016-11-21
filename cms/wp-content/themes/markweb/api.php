<?php

$version = '0.1.14';

?><!DOCTYPE html>
<html class="no-js">

<!--

    No copyright here. Steal and re-use anything at markweb.ch for whatever you like.
    Interested in working with me? Email hi@markweb.ch.

    Mark Howells-Mead | Since October 2016

-->

<head>
    <script>
    /**
     * De-registers Service Worker for anyone who loaded the site when
     * it was being tested. It is currently not in use.
     */
    if ('serviceWorker' in navigator) {
      navigator.serviceWorker.register('/serviceworker.min.js', {
        scope: '/'
      }).then(function(registration) {
        registration.unregister().then(function(boolean) {
          console && console.log('serviceworker.min.js unregistered');
        });
      }).catch(function(error) {
        // registration failed
        console && console.log('serviceworker.min.js: registration failed with ' + error);
      });
    };
    </script>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex, follow" />
    <title>Mark Howells-Mead, Web developer</title>
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="I’m a British web developer, designer and photographer living in Switzerland. markweb.ch is a personal website dedicated to internet techologies like WordPress." />
    <link rel="apple-touch-icon" sizes="180x180" href="/cms/wp-content/themes/markweb/Resources/Public/Icons/apple-touch-icon.png?<?=$version?>">
    <link rel="icon" type="image/png" href="/cms/wp-content/themes/markweb/Resources/Public/Icons/favicon-32x32.png?<?=$version?>" sizes="32x32">
    <link rel="icon" type="image/png" href="/cms/wp-content/themes/markweb/Resources/Public/Icons/favicon-16x16.png?<?=$version?>" sizes="16x16">
    <link rel="manifest" href="/cms/wp-content/themes/markweb/Resources/Public/Icons/manifest.json">
    <link rel="mask-icon" href="/cms/wp-content/themes/markweb/Resources/Public/Icons/safari-pinned-tab.svg?<?=$version?>" color="#444444">
    <link rel="stylesheet" href="/cms/wp-content/themes/markweb/Resources/Public/Css/css-reset.css?<?=$version?>">
    <link rel="stylesheet" href="/cms/wp-content/themes/markweb/Resources/Public/Css/style.css?<?=$version?>">
    <link rel="stylesheet" href="/cms/wp-content/themes/markweb/Resources/Public/Css/list.css?<?=$version?>">
    <link rel="https://api.w.org/" href="/cms/wp-json/" />
    <script>
        // Google Analytics
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-817333-14', 'auto');
        ga('send', 'pageview');

        // Own scripts
        (function(i,s,o,g,r,a,m,x){i['jQueryLoader']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();x=s.createElement(o),
        m=s.getElementsByTagName(o)[0];x.async=1;x.src=g;m.parentNode.insertBefore(x,m);x.onload=a
        })(window,document,'script','/cms/wp-content/themes/markweb/Resources/Public/JavaScript/jquery.min.js','jQuery', function(){
            $.ajaxSetup({cache: true});
            $.getScript('/cms/wp-content/themes/markweb/Resources/Public/JavaScript/requirejs.min.js', function(){
                requirejs([
                    '/cms/wp-content/themes/markweb/Resources/Public/JavaScript/ui.min.js?<?=$version?>',
                    '/cms/wp-content/plugins/mhm-rest-simple/Resources/Public/JavaScript/ui.js?<?=$version?>'
                ]);
            });
        });
    </script>
</head>
<body>
<div class="container">

<header class="mod page-header">

    <header class="mod page-toolbar">

        <a href="/"><img class="profile-image" src="/gravatar.php?size=60" alt="Mark Howells-Mead" srcset="/gravatar.php?size=128 128w, /gravatar.php?size=192 192w, /gravatar.php?size=256 256w, /gravatar.php?size=360 360w, /gravatar.php?size=480 480w" sizes="16vw" /></a>

        <div class="profile-content">
            <header class="profile-header">
                <p class="page-subtitle">Web development by</p>
                <h1 class="page-title">Mark Howells-Mead</h1>
            </header>
        </div>

        <a class="is-icon burger show-for-small-only" data-toggle=".nav.social" data-htmlclass="burger-open"><span>Social media</span></a>

    </header>

    <nav class="mod nav social hide-for-small-only" data-toggleclass="hide-for-small-only">
        <ul class="inline">
            <li class="menu-item"><a href="mailto:hi@markweb.ch" class="is-icon envelope">Get in touch</a></li>
            <li class="menu-item"><a href="https://profiles.wordpress.org/markhowellsmead" class="is-icon wordpress">WordPress</a></li>
            <li class="menu-item"><a href="https://twitter.com/mhmli" class="is-icon twitter">Twitter</a></li>
            <li class="menu-item"><a href="https://www.facebook.com/mhowellsmead" class="is-icon facebook">Facebook</a></li>
            <li class="menu-item"><a href="https://wpch.slack.com/" class="is-icon slack">Slack</a></li>
        </ul>
    </nav>

</header>


<section class="mod page-content">

    <main class="mod main list">
        <div class="posts">
            <article class="post sticky">
                <div class="inner">
                    <header class="post-header">
                        <h2 class="post-title">
                            <a rel="bookmark" href="https://slides.com/markweb/modular-functionality" target="_blank">Modular functionality – organizing your code to make WordPress development easier</a>
                        </h2>
                        <time class="post-date" datetime="2016-11-18T16:05">18th November 2016, 16:05</time>
                    </header>
                    <div class="excerpt">
                        <p>I was a speaker at <a href="https://2016.geneva.wordcamp.org/">WordCamp Geneva</a> on 18th November. Touching on front-end techniques most commonly known from programmers like Brad Frost, I explained how to plan a development project for both front end and backend environments, using recent real-world examples of developing for blogs and larger multisite installations.</p>
                        <p>My talk provided a summarized insight into maintaining individual features through the use of your own WordPress plugins, why it’s important to decide whether to add features to a theme or via a plugin, and the flexibility and organisation which modular coding brings.</p>
                    </div>
                    <footer class="post-footer">
                        <p><a class="button" rel="bookmark" href="https://slides.com/markweb/modular-functionality" target="_blank">View slides</a></p>
                    </footer>
                </div>
            </article>
        </div>
        <div class="posts api" data-holder="articles"></div>
    </main>

    <aside class="mod aside"></aside>

</section>

</div>
</body>
</html>
