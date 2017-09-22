<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arResult */
$this->setFrameMode(true);
?>

<h1 class="h1" id="services">Наши услуги</h1>
<div class="services">
        <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
            <div class="services-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="services-item-flex">
                    <img class="services-item__img" src="<?echo $arItem['DISPLAY_PROPERTIES']['FILES']['FILE_VALUE']['SRC']?>">
                    <div class="services-item__title"><?echo $arItem["NAME"]?></div>
                    <div class="services-item__price">
                        <?if($arItem["PROPERTIES"]['FROM']['VALUE'] != ''):?>
                            от<span><i><?echo $arItem["PROPERTIES"]['PRICE']['VALUE']?></i></span>руб.</div>
                        <?else:?>
                            <span><i><?echo $arItem["PROPERTIES"]['PRICE']['VALUE']?></i></span>руб.</div>
                        <?endif;?>
                </div>
            </div>
        <?endforeach;?>
</div>
