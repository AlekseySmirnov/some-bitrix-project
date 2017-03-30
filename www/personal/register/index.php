<?php
    require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
    $APPLICATION->SetPageProperty(
        "title",
        "Регистрация | Личный кабинет"
    );
    $APPLICATION->SetPageProperty("description", "");
    $APPLICATION->SetPageProperty("keywords", "");
    $APPLICATION->SetTitle("Регистрация");

    global $USER;
    if ($USER->IsAuthorized() && !$USER->IsAdmin()) {
        header('Location: /personal/profile/', true, 301);
        exit();
    }
?>
<div>
    <h1 class="title"><?= $APPLICATION->GetTitle() ?></h1>
</div>
<div class="main_content profile_box">
    <?php $APPLICATION->IncludeComponent(
        "bitrix:system.auth.registration",
        "flat",
        [

        ],
        false
    ); ?>
</div>
<br>
