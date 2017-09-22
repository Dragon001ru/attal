<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arResult */

foreach ($arResult['ITEMS'] as $key => $item) {
    // обрезаем размер изображения

    $arResult['ITEMS'][$key]["PREVIEW_PICTURE"] = cFile::ResizeImageGet($item['PREVIEW_PICTURE'],
        ["width" => 430, "height" => 490],
        BX_RESIZE_IMAGE_PROPORTIONAL_ALT,
        true);
}