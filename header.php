<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)die();?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
	<title><?$APPLICATION->ShowTitle()?></title>
    <link rel="icon" type="image/png" href="/favicon.png" />
    <!--<meta name="viewport" content="width=device-width">-->
	<meta name="yandex-verification" content="6b9395637025d6f3" />
    <?
        global $APPLICATION;
        $APPLICATION->AddHeadScript(STATIC_PATH.'js/jquery-1.12.4.min.js');
        $APPLICATION->AddHeadScript(STATIC_PATH.'js/jquery.form.min.js');
        $APPLICATION->AddHeadScript(STATIC_PATH.'js/owl2/owl.carousel.min.js');
        $APPLICATION->AddHeadScript(STATIC_PATH.'js/fancybox/jquery.fancybox.js');
        $APPLICATION->AddHeadScript(STATIC_PATH.'js/jquery.zoom.min.js');
        $APPLICATION->AddHeadScript(STATIC_PATH.'js/sweetalert/sweetalert2.min.js');
        $APPLICATION->AddHeadScript(STATIC_PATH.'js/scripts.js');

        $APPLICATION->SetAdditionalCSS(STATIC_PATH.'css/normalize.css');
        $APPLICATION->SetAdditionalCSS(STATIC_PATH.'js/owl2/owl.carousel.css');
        $APPLICATION->SetAdditionalCSS(STATIC_PATH.'js/sweetalert/sweetalert2.min.css');
        $APPLICATION->SetAdditionalCSS(STATIC_PATH.'js/fancybox/jquery.fancybox.css');
        $APPLICATION->SetAdditionalCSS(STATIC_PATH.'css/style.css');

        $isIndex = ($APPLICATION->GetCurPage(false) == '/');
    ?>
    <?
        CJSCore::Init(array("fx"));
    ?>
    <?$APPLICATION->ShowHead()?>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KW7P67C');</script>
<!-- End Google Tag Manager -->

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KW7P67C"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?$APPLICATION->ShowPanel()?>
<header class="main">
    <div class="wrapper clear">
        <div class="header-col-1">
            <a href="/" rel="nofollow" class="logo"></a>
        </div>
        <div class="header-col-2">
            <span class="shop-name"><a href="/" rel="nofollow">Магазин детской одежды</a></span>
            <div id="title-search" class="bx-searchtitle">
                <div class="form-title">Поиск по сайту</div>
                <form action="/catalog/">
                    <div class="bx-input-group">
                        <input id="title-search-input" type="text" name="q" value="" autocomplete="off" class="bx-form-control">
                        <span class="bx-input-group-btn">
				            <button class="btn btn-default" type="submit"></button>
                        </span>
                    </div>
                </form>
            </div>
            <?$APPLICATION->IncludeComponent("bitrix:menu","topmenu",
                array(
                    "ROOT_MENU_TYPE" => "top",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_TIME" => "36000",
                    "MENU_CACHE_USE_GROUPS" => "N",
                    "MENU_CACHE_GET_VARS" => array(),
                    "MAX_LEVEL" => "1",
                    "USE_EXT" => "N",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "N",
                    "COMPONENT_TEMPLATE" => "topmenu"
                ),
                false
            );?>
        </div>
        <div class="header-col-3">
            <div class="header-phone">
                <div class="phone-number"><span>8(800)</span>234 61 64</div>
                <span class="callback open-modal" data-form="callback">Заказать обратный звонок</span>
            </div>
            <div class="clear">
                <div class="personal-link"><a href="/personal/">Личный кабинет</a></div>
                <div id="user-cart">
                    <?$APPLICATION->IncludeComponent("bitrix:sale.basket.basket.line",
	                    "",
                        array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "PATH_TO_BASKET" => "/personal/cart/",
                            "PATH_TO_ORDER" => "/personal/order/make/",
                            "SHOW_DELAY" => "N",
                            "SHOW_NOTAVAIL" => "N",
                            "SHOW_SUBSCRIBE" => "N",
                            "SHOW_NUM_PRODUCTS" => "Y",
                            "SHOW_TOTAL_PRICE" => "Y",
                            "SHOW_EMPTY_VALUES" => "Y",
                            "SHOW_PERSONAL_LINK" => "N",
                            "PATH_TO_PERSONAL" => SITE_DIR."personal/",
                            "SHOW_AUTHOR" => "N",
                            "PATH_TO_REGISTER" => SITE_DIR."login/",
                            "PATH_TO_PROFILE" => SITE_DIR."personal/",
                            "SHOW_PRODUCTS" => "N",
                            "POSITION_FIXED" => "N",
                            "HIDE_ON_BASKET_PAGES" => "N"
                        ),
                        false
                    );?>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper">
    <?$APPLICATION->IncludeComponent("bitrix:menu","catalog",
        array(
            "ROOT_MENU_TYPE" => "catalog",
            "MENU_CACHE_TYPE" => "Y",
            "MENU_CACHE_TIME" => "36000",
            "MENU_CACHE_USE_GROUPS" => "N",
            "MENU_CACHE_GET_VARS" => array(),
            "MAX_LEVEL" => "1",
            "USE_EXT" => "Y",
            "DELAY" => "N",
            "ALLOW_MULTI_SELECT" => "N",
            "COMPONENT_TEMPLATE" => "catalog"
        ),
        false
    );?>
    </div>
</header>

<div class="additional-sections">
    <div class="wrapper">
        <ul class="clear">
            <li><a href="/catalog/new/">Новинки</a></li>
            <li><a href="/catalog/sale/">Sale</a></li>
            <li><a href="/catalog/brands/">Бренды</a></li>
            <li><a href="/catalog/special/">Спецпредложения</a></li>
        </ul>
    </div>
</div>
<?if($isIndex):?>
    <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"index-slider", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "index-slider",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "index_page",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "10",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "DESC",
		"FILTER_NAME" => "",
		"PROPERTY_CODE" => array(
			0 => "LINK",
			1 => "",
		),
		"STRICT_SECTION_CHECK" => "N"
	),
	false
);?>

  <? 
/* $APPLICATION->IncludeComponent(
        "bitrix:catalog.section.list",
        "index-sections",
        Array(
            "ADD_SECTIONS_CHAIN" => "N",
            "CACHE_GROUPS" => "N",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "COUNT_ELEMENTS" => "N",
            "IBLOCK_ID" => "4",
            "IBLOCK_TYPE" => "catalog",
            "SECTION_CODE" => "",
            "SECTION_FIELDS" => array("", ""),
            "SECTION_ID" => "",
            "SECTION_URL" => "",
            "SECTION_USER_FIELDS" => array("UF_INDEX_DESCRIPTION", ""),
            "SHOW_PARENT_NAME" => "Y",
            "TOP_DEPTH" => "1",
            "VIEW_MODE" => "LINE"
        )
    );*/
?>

<div class="grid">
	<figure class="effect-goliath" id="catalog-section-32">
		<img src="/upload/iblock/507/507e6f4e49c38daf48c79525e4e4d10e.jpg" alt="Малыши">
		<figcaption>
			<h2>Малыши</h2>
			<p>Брендовая одежда для малышей</p>
			<a href="/catalog/malyshi/">Подробнее</a>
		</figcaption>
	</figure>
	
	<figure class="effect-goliath" id="catalog-section-33">
		<img src="/upload/iblock/d15/d15f8923ccea19e03d733daab4274644.jpg" alt="Малышки">
		<figcaption>
			<h2>Малышки</h2>
			<p>Брендовая одежда для малышек</p>
			<a href="/catalog/malyshki/">Подробнее</a>
		</figcaption>
	</figure>
	<figure class="effect-goliath" id="catalog-section-31">
		<img src="/upload/iblock/543/5431291facb00277cce091c3606d883c.jpg" alt="Девочки">
		<figcaption>
			<h2>Девочки</h2>
			<p>Брендовая одежда для девочек</p>
			<a href="/catalog/devochki_1/">Подробнее</a>
		</figcaption>
	</figure>
	<figure class="effect-goliath" id="catalog-section-34">
		<img src="/upload/iblock/f1c/f1c1062fccfdf42cea76031800b79338.jpg" alt="Мальчики">
		<figcaption>
			<h2>Мальчики</h2>
			<p>Брендовая одежда для мальчиков</p>
			<a href="/catalog/malchiki_1/">Подробнее</a>
		</figcaption>
	</figure>
	<figure class="effect-goliath" id="catalog-section-28">
		<img src="/upload/iblock/5b7/5b7c137e76145df7a6f4e6bf009fb80a.jpg" alt="Аксессуары">
		<figcaption>
			<h2>Аксессуары</h2>
			<p>Брендовые аксессуары</p>
			<a href="/catalog/aksessuary/">Подробнее</a>
		</figcaption>
	</figure>
	<figure class="effect-goliath" id="catalog-section-35">
		<img src="/upload/iblock/3c1/3c147a9274a808fa98b8fe49cf964048.JPG" alt="Обувь">
		<figcaption>
			<h2>Обувь</h2>
			<p>Брендовая обувь для мальчиков и девочек</p>
			<a href="/catalog/obuv/">Подробнее</a>
		</figcaption>
	</figure>
	<figure class="effect-goliath" id="catalog-section-38">
		<img src="/upload/iblock/e7c/e7cab460f98d7fd84634d62bdfa109f7.jpg" alt="Пеленки">
		<figcaption>
			<h2>Пеленки</h2>
			<p></p>
			<a href="/catalog/pelenki/">Подробнее</a>
		</figcaption>
	</figure>
	</div>
    <div class="wrapper">
    
<?else:?>
    <div class="wrapper workarea">
        <?$APPLICATION->IncludeComponent("bitrix:breadcrumb","",
            Array(
                "PATH" => "",
                "SITE_ID" => "s1",
                "START_FROM" => "0"
            )
        );?>
        <?if(!preg_match('/^\/catalog\//',$APPLICATION->GetCurPage(false))):?>
        <h1 class="page-title"><?$APPLICATION->ShowTitle(false)?></h1>
        <?endif;?>
<?endif;?>
