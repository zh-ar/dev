<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)die();?>
<?if(!$isIndex):?>
    </div> <?// .workarea?>
<?else:?>
    </div>
    <?$APPLICATION->IncludeComponent(
        "bitrix:news.list","advantages",
        Array(
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
            "FIELD_CODE" => array(),
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "IBLOCK_ID" => "7",
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
            "SORT_ORDER2" => "DESC"
        )
    );?>
<?endif;?>
<footer class="main">
    <div class="wrapper clear">
        <div class="footer-logo"></div>
        <div class="footer-menu">
            <?$APPLICATION->IncludeComponent("bitrix:menu","ul",
                array(
                    "ROOT_MENU_TYPE" => "bottom",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_TIME" => "36000",
                    "MENU_CACHE_USE_GROUPS" => "N",
                    "MENU_CACHE_GET_VARS" => array(),
                    "MAX_LEVEL" => "1",
                    "USE_EXT" => "N",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "N",
                    "COMPONENT_TEMPLATE" => "ul"
                ),
                false
            );?>
        </div>
        <div class="subscribe-block">
            <div class="subscribe-block__title">
                Будьте в курсе событий
            </div>
            Подпишитесь на бесплатную email-рассылку
            <div class="subscribe-block__form">
                <form class="ajax-form">
                    <input type="text" placeholder="Ваш email"/>
                    <input type="submit" value="Подписаться"/>
                </form>
            </div>
            <div class="clear floatted-childs">
                <div class="whatsapp"><span></span><span>+79872305998</span></div>
                <a href="https://www.instagram.com/royal_kids/" target="_blank" class="instagram"><span></span><span>Royal_kids</span></a>
            </div>
        </div>
    </div>
</footer>
<div class="b-layout"></div>
<div class="mw-block" id="buy1click">
    <h3>Покупка в 1 клик</h3>
    <form class="ajax-form" method="post">
        <div class="product-row clear">
            <div class="product-row__image">
                <img src="/local/static/images/no_photo.png" alt="">
            </div>
            <div class="product-row_info">
                <div ID="product-name"></div>
            </div>
        </div>
        <input type="text" name="name" placeholder="Ваше ФИО *" required/>
        <input type="text" name="phone" placeholder="Ваш телефон *" required/>
        <input type="submit" value="Купить"/>
        <input type="hidden" name="product" class="product-name" value=""/>
        <input type="hidden" name="subject" value="buy1click"/>
    </form>
    <span class="form-close">x</span>
</div>
<div class="mw-block" id="callback">
    <h3>Обратный звонок</h3>
    <form class="ajax-form" method="post">
        <input type="text" name="name" placeholder="Ваше ФИО *" required/>
        <input type="text" name="phone" placeholder="Ваш телефон *" required/>
        <input type="submit" onclick="yaCounter45832611.reachGoal('perezvonite')" value="Перезвоните мне"/>
        <input type="hidden" name="subject" value="callback"/>
    </form>
    <span class="form-close">x</span>
</div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter45832611 = new Ya.Metrika({
                    id:45832611,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/45832611" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>