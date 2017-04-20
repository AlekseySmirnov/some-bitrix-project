<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>

<? if (!empty($arResult)): ?>
    <ul class="list">
    <li class="header">Менюшка</li>
    <?
    $previousLevel = 0;
    foreach ($arResult as $arItem): ?>

    <? if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel): ?>
        <?= str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
    <? endif ?>

    <? if ($arItem["IS_PARENT"]): ?>

    <? if ($arItem["DEPTH_LEVEL"] == 1): ?>
    <li >
    <a href="<?= $arItem["LINK"] ?>" class="menu-toggle <? if ($arItem["SELECTED"]): ?>active<? else: ?><? endif ?>">
        <i class="material-icons"><?= $arItem['PARAMS']['ICON_NAME'];?></i>
        <span><?= $arItem["TEXT"] ?></span>
    </a>
    <ul class="ml-menu">
    <? else: ?>
    <li<? if ($arItem["SELECTED"]): ?> class="active"<? endif ?>>
        <a href="<?= $arItem["LINK"] ?>">
            <i class="material-icons"><?= $arItem['PARAMS']['ICON_NAME'];?></i>
            <span><?= $arItem["TEXT"] ?></span>
        </a>
    <ul>
    <? endif ?>

    <? else: ?>

        <? if ($arItem["PERMISSION"] > "D"): ?>

            <? if ($arItem["DEPTH_LEVEL"] == 1): ?>
                <li>
                    <a href="<?= $arItem["LINK"] ?>"
                       class="<? if ($arItem["SELECTED"]): ?>active<? else: ?><? endif ?>">
                        <i class="material-icons"><?= $arItem['PARAMS']['ICON_NAME'];?></i>
                        <span><?= $arItem["TEXT"] ?></span>
                    </a>
                </li>
            <? else: ?>
                <li<? if ($arItem["SELECTED"]): ?> class="active"<? endif ?>>
                    <a href="<?= $arItem["LINK"] ?>">
                        <?= $arItem["TEXT"] ?>
                    </a>
                </li>
            <? endif ?>

        <? else: ?>

            <? if ($arItem["DEPTH_LEVEL"] == 1): ?>
                <li><a href=""
                       class="<? if ($arItem["SELECTED"]): ?>active<? else: ?><? endif ?>"
                       title="<?= GetMessage("MENU_ITEM_ACCESS_DENIED") ?>"><?= $arItem["TEXT"] ?></a></li>
            <? else: ?>
                <li><a href=""
                       class="denied"
                       title="<?= GetMessage("MENU_ITEM_ACCESS_DENIED") ?>"><?= $arItem["TEXT"] ?></a></li>
            <? endif ?>

        <? endif ?>

    <? endif ?>

    <? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>

<? endforeach ?>

    <? if ($previousLevel > 1)://close last item tags?>
        <?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
    <? endif ?>

    </ul>
<? endif ?>
