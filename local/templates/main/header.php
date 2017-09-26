<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
global $APPLICATION;
$asset = Bitrix\Main\Page\Asset::getInstance();

$page = [
    'addString' => [
        '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">',
        '<meta name="apple-mobile-web-app-capable" content="yes">',
        '<meta name="apple-mobile-web-app-status-bar-style" content="black">'
    ],
    'addCss' => [
        'https://fonts.googleapis.com/css?family=Oranienbaum|PT+Serif:400,400i,700,700i',
        SITE_TEMPLATE_PATH . '/js/vendor/swiper/swiper.min.css',
        SITE_TEMPLATE_PATH . '/css/main.css',
    ],
    'addJs' => [
        SITE_TEMPLATE_PATH.'/js/vendor/jquery/jquery-3.2.1.min.js',
        SITE_TEMPLATE_PATH.'/js/vendor/swiper/swiper.jquery.min.js',
        SITE_TEMPLATE_PATH.'/js/app/main.js'
    ]
];

foreach ($page as $method => $params) {
    array_map([$asset, $method], $params);
}
?>

<!DOCTYPE html>
<html lang="<? echo LANGUAGE_ID ?>">
<head>
    <title><?$APPLICATION->ShowTitle()?></title>
    <? $APPLICATION->ShowHead() ?>
</head>
<body>
<div class="page">
    <? $APPLICATION->ShowPanel() ?>
    <header class="header">
        <div class="header-top wrapper">
            <div class="header-left">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "AREA_FILE_RECURSIVE" => "",
                        "EDIT_TEMPLATE" => "",
                        "COMPONENT_TEMPLATE" => ".default",
                        "PATH" => SITE_TEMPLATE_PATH . "/inc/contacts-address.php"
                    ),
                    false
                ); ?>
            </div>
            <div class="header-logo"><i class="icon"></i><span>Академия свадебных стилистов</span></div>
            <div class="header-right">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    ".default",
                    array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "AREA_FILE_RECURSIVE" => "",
                        "EDIT_TEMPLATE" => "",
                        "COMPONENT_TEMPLATE" => ".default",
                        "PATH" => SITE_TEMPLATE_PATH . "/inc/contacts.php"
                    ),
                    false
                ); ?>
                <div class="header-item">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        ".default",
                        array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "AREA_FILE_RECURSIVE" => "",
                            "EDIT_TEMPLATE" => "",
                            "COMPONENT_TEMPLATE" => ".default",
                            "PATH" => SITE_TEMPLATE_PATH . "/inc/contacts-social.php"
                        ),
                        false
                    ); ?>
                </div>

            </div>
            <button type="button" value=".mobile" id="menu-icon"><span></span><span></span><span></span><span></span></button>
        </div>
        <?$APPLICATION->IncludeComponent(
            "bitrix:menu",
            "top_menu",
            Array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "left",
                "COMPONENT_TEMPLATE" => "top_menu",
                "DELAY" => "N",
                "MAX_LEVEL" => "1",
                "MENU_CACHE_GET_VARS" => array(),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "top",
                "USE_EXT" => "N"
            )
        );?>
        <div class="mobile">
            <div class="wrapper">
                <div class="header-item"><b>Ханты-Мансийск,</b><br>Энгельса 43</div>
                <div class="header-item"><b>Сургут,</b><br>Ленина 21</div>
                <div class="header-item"><span>Телефон</span><br>+7 3467 <b>22 54 37</b></div>
                <div class="header-item"><span>Viber, WhatsApp</span><br>+7 <b>915 120 12 93</b></div>
                <div class="header-item"><a class="social insta" href="#"></a><a class="social vk" href="#"></a></div>
            </div>
        </div>
    </header>