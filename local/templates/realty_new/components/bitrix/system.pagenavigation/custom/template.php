<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$this->setFrameMode(true);

if (!$arResult["NavShowAlways"]) {
    if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
        return;
}
?>

<div class="paginations">
    <ul>
        <?php
        $strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"] . "&amp;" : "");
        $strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?" . $arResult["NavQueryString"] : "");
        ?>

        <?php if ($arResult["bDescPageNumbering"] === true) {
            $bFirst = true;

            if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]) {
                if ($arResult["bSavePage"]) { ?>
                    <li>
                        <a class="pagination-back"
                           href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] + 1) ?>"><?= GetMessage("nav_prev") ?></a>
                    </li>
                <?php } else {
                    if ($arResult["NavPageCount"] == ($arResult["NavPageNomer"] + 1)) { ?>
                        <li>
                            <a class="pagination-back"
                               href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>"><?= GetMessage("nav_prev") ?></a>
                        </li>
                    <?php } else { ?>
                        <li>
                            <a class="pagination-back"
                               href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] + 1) ?>"><?= GetMessage("nav_prev") ?></a>
                        </li>
                    <?php }
                }
                if ($arResult["nStartPage"] < $arResult["NavPageCount"]) {
                    $bFirst = false;

                    if ($arResult["bSavePage"]) { ?>
                        <li>
                            <a class="modern-page-first"
                               href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["NavPageCount"] ?>">1</a>
                        </li>
                    <?php } else { ?>
                        <li>
                            <a class="modern-page-first"
                               href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>">1</a>
                        </li>
                    <?php }

                    if ($arResult["nStartPage"] < ($arResult["NavPageCount"] - 1)) { ?>
                        <li>
                            <a class="modern-page-dots"
                               href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= intval($arResult["nStartPage"] + ($arResult["NavPageCount"] - $arResult["nStartPage"]) / 2) ?>">...</a>
                        </li>
                    <?php }
                }
            }
            do {
                $NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1;

                if ($arResult["nStartPage"] == $arResult["NavPageNomer"]) { ?>
                    <li>
                        <a href="javascript:void(0)"
                           class="<?= ($bFirst ? "modern-page-first " : "") ?>active"><?= $NavRecordGroupPrint ?></a>
                    </li>
                <?php } elseif ($arResult["nStartPage"] == $arResult["NavPageCount"] && $arResult["bSavePage"] == false) { ?>
                    <li>
                        <a href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>"
                           class="<?= ($bFirst ? "modern-page-first" : "") ?>"><?= $NavRecordGroupPrint ?></a>
                    </li>
                <?php } else { ?>
                    <li>
                        <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["nStartPage"] ?>"<?
                        ?> class="<?= ($bFirst ? "modern-page-first" : "") ?>"><?= $NavRecordGroupPrint ?></a>
                    </li>
                <?php }

                $arResult["nStartPage"]--;
                $bFirst = false;
            } while ($arResult["nStartPage"] >= $arResult["nEndPage"]);

            if ($arResult["NavPageNomer"] > 1) {
                if ($arResult["nEndPage"] > 1) {
                    if ($arResult["nEndPage"] > 2) { ?>
                        <li>
                            <a class="modern-page-dots"
                               href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= round($arResult["nEndPage"] / 2) ?>">...</a>
                        </li>
                    <?php } ?>
                    <li>
                        <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=1"><?= $arResult["NavPageCount"] ?></a>
                    </li>
                <?php } ?>

                <li>
                    <a style="margin-left: 15px;" class="pagination-next"
                       href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>"><?= GetMessage("nav_next") ?></a>
                </li>
            <?php }
        } else {
            $bFirst = true;

            if ($arResult["NavPageNomer"] > 1) {
                if ($arResult["bSavePage"]) { ?>
                    <li style="margin-right: 0">
                        <a class="pagination-back"
                           href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>"><?= GetMessage("nav_prev") ?></a>
                    </li>
                <?php } else {
                    if ($arResult["NavPageNomer"] > 2) { ?>
                        <li style="margin-right: 0">
                            <a class="pagination-back"
                               href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>"><?= GetMessage("nav_prev") ?></a>
                        </li>
                    <?php } else { ?>
                        <li style="margin-right: 0">
                            <a class="pagination-back"
                               href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>"><?= GetMessage("nav_prev") ?></a>
                        </li>
                    <?php }
                }

                if ($arResult["nStartPage"] > 1) {
                    $bFirst = false;

                    if ($arResult["bSavePage"]) { ?>
                        <li>
                            <a class="modern-page-first"
                               href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=1">1</a>
                        </li>
                    <?php } else { ?>
                        <li>
                            <a class="modern-page-first"
                               href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>">1</a>
                        </li>
                    <?php }

                    if ($arResult["nStartPage"] > 2) { ?>
                        <li>
                            <a class="modern-page-dots"
                               href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= round($arResult["nStartPage"] / 2) ?>">...</a>
                        </li>
                    <?php }
                }
            }

            do {
                if ($arResult["nStartPage"] == $arResult["NavPageNomer"]) { ?>
                    <li>
                        <a href="javascript:void(0)"
                           class="<?= ($bFirst ? "modern-page-first " : "") ?>active"><?= $arResult["nStartPage"] ?></a>
                    </li>
                <?php } elseif ($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false) { ?>
                    <li>
                        <a href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>"
                           class="<?= ($bFirst ? "modern-page-first" : "") ?>"><?= $arResult["nStartPage"] ?></a>
                    </li>
                <?php } else { ?>
                    <li>
                        <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["nStartPage"] ?>"<?
                        ?> class="<?= ($bFirst ? "modern-page-first" : "") ?>"><?= $arResult["nStartPage"] ?></a>
                    </li>
                <?php }

                $arResult["nStartPage"]++;
                $bFirst = false;
            } while ($arResult["nStartPage"] <= $arResult["nEndPage"]);

            if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]) {
                if ($arResult["nEndPage"] < $arResult["NavPageCount"]) {
                    if ($arResult["nEndPage"] < ($arResult["NavPageCount"] - 1)) { ?>
                        <li>
                            <a class="modern-page-dots"
                               href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= round($arResult["nEndPage"] + ($arResult["NavPageCount"] - $arResult["nEndPage"]) / 2) ?>">...</a>
                        </li>
                    <?php } ?>
                    <li>
                        <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["NavPageCount"] ?>"><?= $arResult["NavPageCount"] ?></a>
                    </li>
                <?php } ?>

                <li>
                    <a style="margin-left: 15px;" class="pagination-next"
                       href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] + 1) ?>"><?= GetMessage("nav_next") ?></a>
                </li>
            <?php }
        } ?>
    </ul>
</div>