<?
  global $nav;
  global $doctors;
  global $index;
  if(isset($_REQUEST['v'])){
      $_SESSION['v'] = $_REQUEST['v'];
  }
  if(strstr($_SERVER['REQUEST_URI'],'doctors'))
    $doctors = true;
  
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title><?php $APPLICATION->ShowTitle();?></title>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="robots" content="noarchive">
    <?php $APPLICATION->ShowHead();?>    
    
    
    <? if($APPLICATION->GetCurPage()=='/' && $_SERVER['SERVER_NAME']=='ochenprosto.ru') {?>
      <?/*    
          <!-- Google Analytics Content Experiment code -->
      <script>function utmx_section(){}function utmx(){}(function(){var
      k='59248007-11',d=document,l=d.location,c=d.cookie;
      if(l.search.indexOf('utm_expid='+k)>0)return;
      function f(n){if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.
      indexOf(';',i);return escape(c.substring(i+n.length+1,j<0?c.
      length:j))}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash;d.write(
      '<sc'+'ript src="'+'http'+(l.protocol=='https:'?'s://ssl':
      '://www')+'.google-analytics.com/ga_exp.js?'+'utmxkey='+k+
      '&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+'&utmxtime='+new Date().
      valueOf()+(h?'&utmxhash='+escape(h.substr(1)):'')+
      '" type="text/javascript" charset="utf-8"><\/sc'+'ript>')})();
      </script><script>utmx('url','A/B');</script>
      <!-- End of Google Analytics Content Experiment code -->
      */?>

    <? }?>
    
    <? if(!$APPLICATION->GetDirProperty("hide_metric")):?>
    <script>
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-31297918-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
    <? endif;?>
  </head>

  <body class="">
  
   <div class="frame <?=(!$doctors?'user':'doctor')?> <?=($index?'index':'')?> <?=$APPLICATION->AddBufferContent("body_class");?>" style="opacity: 0">
     <div id="panel"><?$APPLICATION->ShowPanel();?></div>
     <? global $toolbar ?>
     <div id="toolbar" class="<?=($nav?$nav:'')?>">
        <div class="container">
           <div class="row">
              <div class="col-md-2">
                 <a href="/<?=(isset($_SESSION['v'])?"?v=".$_SESSION['v']:"")?>" id="logo">
                    <img src="/layout/images/logo.png" alt="">
                 </a>
                 <div class="mobile_title">
                   <?=$APPLICATION->AddBufferContent("mobile_title");?>
                 </div>
                 <a href="#" class="trigger"></a>
              </div>
              <? if(!$APPLICATION->GetDirProperty("hide_nav")):?>
              <div class="col-md-8">
                  <?if(in_array($APPLICATION->GetCurDir(),array('/doctors/video/', '/doctors/research/', '/doctors/search/'))):?>
                    <form id="search" action="/doctors/search/">
                      <input type="text" name="q" placeholder="Поиск" value="<?=$_REQUEST['q']?>">
                      <button type="submit">
                        <svg width="15" height="17" viewBox="0 0 15 17" xmlns="http://www.w3.org/2000/svg"><path d="M6.367 12.733c1.273 0 2.46-.377 3.456-1.024l3.731 4.51 1.051-.869-3.723-4.5c1.143-1.152 1.851-2.736 1.851-4.483 0-3.511-2.856-6.367-6.366-6.367-3.511 0-6.367 2.856-6.367 6.367 0 3.51 2.856 6.366 6.367 6.366zm0-11.369c2.758 0 5.002 2.244 5.002 5.003 0 2.758-2.244 5.002-5.002 5.002-2.759 0-5.003-2.244-5.003-5.002 0-2.759 2.244-5.003 5.003-5.003z" fill="#C2272C"/></svg>
                      </button>
                    </form>
                  <?endif;?>
                 <ul class="nav">
                    <li class="hidden">
                      <a class="trigger" href="#">
                        <svg width="10px" height="18px" viewBox="0 0 10 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                           <g id="Portrait" sketch:type="MSArtboardGroup" transform="translate(-318.000000, -451.000000)" fill="#020202">
                               <path d="M324.968048,460.268375 L324.967471,458.945116 L318.318025,466.487624 L319.818264,467.810229 L326.46771,460.26772 L327.051224,459.605836 L326.467133,458.944462 L319.749542,451.338044 L318.250458,452.661956 L324.968048,460.268375 Z" id="Imported-Layers" sketch:type="MSShapeGroup"></path>
                           </g>
                          </g>
                         </svg>
                      </a>
                    </li>
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "top", array(
                    	"ROOT_MENU_TYPE" => "top",
                    	"MENU_CACHE_TYPE" => "A",
                    	"MENU_CACHE_TIME" => "3600",
                    	"MENU_CACHE_USE_GROUPS" => "Y",
                    	"MENU_CACHE_GET_VARS" => array(
                    		0 => "",
                    		1 => "",
                    	),
                    	"MAX_LEVEL" => "2",
                    	"CHILD_MENU_TYPE" => "left",
                    	"USE_EXT" => "Y",
                    	"DELAY" => "Y",
                    	"ALLOW_MULTI_SELECT" => "Y"
                    	),
                    	false
                    );?>
                 </ul>
              </div>
              <? endif;?>
              <div class="col-md-2">
              <?/*
                <div class="lang">
                  <a href="<?=str_replace("/ru/","/",$APPLICATION->GetCurDir())?>" class="lang__item <?=(strstr($APPLICATION->GetCurDir(),'/ru/') ?"":"lang__item--active")?>">KZ</a>
                  <a href="http://ochenprosto.ru" class="lang__item <?=(!strstr($APPLICATION->GetCurDir(),'/ru/') ?"":"lang__item--active")?>">RU</a>
                </div>
                */?>
              </div>
           </div>
        </div>
     </div>
    <?if(!$doctors&&!defined('ERROR_404')):?>
      <? if(!$APPLICATION->GetDirProperty("show_flag")): ?>
        <a href="<?=(!strstr($APPLICATION->GetCurDir(),'/ru/') ?"/test/man_kz/":"/ru/test/man/")?>" class="flag test"><img src="/layout/images/test.png"></a>
      <? else: ?>
        <a href="<?=(!strstr($APPLICATION->GetCurDir(),'/ru/') ?"/test/man_kz/":"/ru/test/man/")?>" class="flag test enter"><img src="/layout/images/flag-test.png"></a>
      <? endif;
    endif;
     ?>