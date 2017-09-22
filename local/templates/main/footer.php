<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<footer class="footer">
    <div class="wrapper">
        <div class="footer-left">
            <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                ".default",
                array(
                    "AREA_FILE_SHOW" => "file",
                    "AREA_FILE_SUFFIX" => "inc",
                    "AREA_FILE_RECURSIVE" => "",
                    "EDIT_TEMPLATE" => "",
                    "COMPONENT_TEMPLATE" => ".default",
                    "PATH" => SITE_TEMPLATE_PATH . "/inc/footer-copyright.php"
                ),
                false
            ); ?>
        </div>
        <div class="footer-right"><img src="<?=SITE_TEMPLATE_PATH?>/images/counter.png"></div>

        <? $APPLICATION->IncludeComponent(
            "bitrix:main.include",
            ".default",
            array(
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "inc",
                "AREA_FILE_RECURSIVE" => "",
                "EDIT_TEMPLATE" => "",
                "COMPONENT_TEMPLATE" => ".default",
                "PATH" => SITE_TEMPLATE_PATH . "/inc/footer_dev.php"
            ),
            false
        ); ?>
    </div>
</footer>
<button class="arrow js-arrow" type="button"></button>
</main>
</div>
</body>
</html>