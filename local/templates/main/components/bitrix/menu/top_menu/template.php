<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="menu">
    <div class="wrapper">
        <?foreach($arResult as $arItem):?>
            <a class="menu__item js-scroll" href="<?=$arItem["LINK"]?>"><span><?=$arItem["TEXT"]?></span></a>
        <?endforeach?>
    </div>
</div>
<?endif?>