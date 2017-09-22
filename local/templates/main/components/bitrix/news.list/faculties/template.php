<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arResult */
$this->setFrameMode(true);
?>

<h1 class="h1" id="faculties">Наши факультеты</h1>
<div class="swiper-container">
    <div class="swiper-wrapper faculties">
        <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
            <div class="faculties-item swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <img class="faculties-item__img" src="<?=$arItem["PREVIEW_PICTURE"]["src"]?>">
                <div class="faculties-item__title"><?echo $arItem["NAME"]?></b></div>
            </div>
        <?endforeach;?>
    </div>
</div>
