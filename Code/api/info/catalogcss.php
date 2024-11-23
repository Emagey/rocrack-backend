<?php
$sid = $_COOKIE['connect-sid'] ?? '';

if ($sid == '') {
  http_response_code(400);
  exit;
}

header('content-type: text/css');
?>
/*! 
 *  RoGold Ultimate
 *  Coding and design by Alrovi ApS.
 *  Contact: contact@alrovi.com
 *  Copyright (C) Alrovi ApS
 *  All rights reserved.
*/
.topic-container {
    background-color: var(--theme-color-primary, var(--primary)) !important
}

.topic-container .topic {
    background-color: var(--theme-color-third, var(--third)) !important
}

#main-view .heading a {
    font-weight: 600;
    font-size: 22px;
    line-height: 27px
}

#avatar-shop-keyword-input {
    margin-right: 10px;
    font-weight: 600;
    font-size: 10px;
    line-height: 12px;
    padding-left: 10px;
    width: 270px;
    height: 34px;
    background-color: var(--theme-color-third, var(--third));
    border-radius: 7px;
    border: none
}

.input-dropdown-btn {
    max-width: 202px !important;
    display: flex !important;
    border: none !important;
    background: var(--theme-color-third, var(--third)) !important;
    border-radius: 7px !important;
    flex-wrap: nowrap;
    justify-content: space-between;
    align-items: center
}

.category-options,#main-view .input-group>.input-group-btn,#catalog-content .buy-robux {
    display: none !important
}

@media screen and (min-width: 1907px) {
    #catalog-content .catalog-results .item-cards-stackable .item-card {
        width:11.8% !important
    }
}

body[data-internal-page-name=Catalog] #container-main .content {
    max-width: initial !important
}

.search-container-original {
    width: auto !important
}

#navbar-search-clear-btn {
    left: 240px !important;
    top: 8px !important
}

.autocomplete-dropdown-menu,#autocomplete-list {
    width: 280px !important
}

.input-dropdown-btn .rbx-selection-label {
    font-weight: 500;
    font-size: 12px !important;
    line-height: 15px !important
}

.dropdown-menu {
    border-radius: 7px !important;
    background: var(--theme-color-third, var(--third));
    margin-right: 15px !important;
    width: 202px !important
}

.dropdown-menu a {
    font-weight: 500;
    font-size: 14px;
    line-height: 17px !important;
    color: hsla(0,0%,100%,.4)
}

#catalog-container .input-addon-btn {
    display: none !important
}

.search-bars>div.clearfix,#category-0>ul>li:nth-child(7) {
    border-bottom: solid 1px hsla(0,0%,100%,.1);
    margin-bottom: 10px;
    padding-bottom: 10px
}

#catalog-content .search-bars {
    background-color: var(--theme-color-secondary, var(--background))
}

.search-options {
    width: 200px !important;
    margin-right: 5px
}

.catalog-results {
    width: calc(100% - 220px) !important
}

.search-options-header {
    font-weight: 600;
    font-size: 16px;
    line-height: 19px
}

#expandable-menu-category-0 {
    background: #333536;
    border-radius: 7px;
    padding: 8px;
    display: flex
}

#expandable-menu-category-0 .category-name {
    font-weight: 600;
    font-size: 16px;
    line-height: 19px;
    color: #2176ff
}

#expandable-menu-category-0::before {
    content: "";
    background-image: url("https://rogold.live/svgs/dark/catalog.svg#featured") !important;
    width: 16px !important;
    height: 16px !important;
    background-size: 16px 16px !important;
    margin-right: 10px !important
}

.light-theme #expandable-menu-category-0::before {
    background-image: url("https://rogold.live/svgs/light/catalog.svg#featured") !important
}

#category-0 button,#allcategories .top-border {
    padding: 8px 0px;
    margin: 0px 8px;
    font-weight: 500;
    font-size: 12px;
    line-height: 15px;
    opacity: .4
}

#allcategories .top-border {
    padding: 8px 0 !important;
    margin: 0 0 !important
}

#category-0 button.active {
    opacity: 1
}

#menu-allcategories {
    height: 35px;
    display: flex;
    background: #333536;
    border-radius: 7px;
    padding: 8px;
    flex-direction: row;
    align-items: center;
    justify-content: space-between
}

#menu-allcategories button {
    display: flex;
    color: var(--theme-typography-primary-color, var(--text-color));
    font-weight: 500;
    font-size: 12px;
    line-height: 15px;
    flex-direction: column
}

#menu-allcategories .menu-link {
    font-weight: 500;
    font-size: 8px;
    line-height: 10px
}

.toggle-submenu.icon-minus,.toggle-submenu.icon-plus {
    background-image: url("https://rogold.live/svgs/dark/catalog.svg#openclose") !important;
    background-size: 9px 6px !important;
    background-position: 0 0 !important;
    width: 9px !important;
    height: 6px !important;
    margin-top: 7px !important
}

.light-theme .toggle-submenu.icon-minus,.light-theme .toggle-submenu.icon-plus {
    background-image: url("https://rogold.live/svgs/light/catalog.svg#openclose") !important
}

.toggle-submenu.icon-plus {
    transform: rotate(180deg)
}

.border-right.search-options-form,.border-bottom.category-section {
    border-color: hsla(0,0%,100%,.1) !important
}

.search-options-form label {
    font-weight: 500;
    font-size: 14px;
    line-height: 17px
}

.search-options-form input.input-field,.search-options-form .btn-update-filter {
    font-weight: 500 !important;
    font-size: 12px !important;
    line-height: 15px;
    background-color: var(--theme-color-primary, var(--primary)) !important;
    border-radius: 5px !important;
    border: none;
    color: var(--theme-typography-primary-color, var(--text-color)) !important
}

.search-options-form .btn-update-filter {
    margin-top: 0 !important;
    display: inherit !important
}

.radio label {
    color: var(--theme-typography-primary-color, var(--text-color)) !important
}

.layer {
    background-color: var(--theme-color-primary, var(--primary)) !important
}

#main-view .catalog-results .list-item.item-card {
    margin: 0 10px 10px 0px;
    border: 2px solid #333536;
    border-radius: 10px;
    max-width: 173px !important;
    height: 250px
}

.rg-category-holder {
    display: flex;
    flex-direction: row;
    align-items: center;
    margin-bottom: 10px;
    overflow: auto
}

.rg-catalog-sel-category {
    display: flex;
    padding: 8px 24px;
    margin-right: 5px;
    gap: 10px;
    border: none;
    background: #2176ff;
    border-radius: 5px;
    align-items: center
}

.rg-catalog-sel-category span,.rg-catalog-category span {
    font-weight: 600;
    font-size: 12px;
    line-height: 15px;
    white-space: nowrap
}

.rg-catalog-category {
    margin-right: 5px;
    display: flex;
    border: none;
    padding: 8px 24px;
    gap: 10px;
    background: #333536;
    border-radius: 5px;
    align-items: center;
    cursor: pointer
}

.rg-catalog-category span {
    opacity: .4
}

.sep-small {
    background-color: hsla(0,0%,100%,.1);
    margin: 0 10px 0 5px;
    width: 1px;
    height: 20px
}

.card-uncommon {
    border-color: rgba(0,185,91,.3) !important
}

.card-rare {
    border-color: rgba(102,142,246,.3) !important
}

.card-epic {
    border-color: rgba(226,102,246,.3) !important
}

.card-legendary {
    border-color: rgba(246,226,102,.3) !important
}

.card-mythical {
    border-color: rgba(255,71,87,.3) !important
}

.card-unobtainable {
    border-color: rgba(0,0,0,.3) !important
}

.catalog-results .item-card-name {
    font-weight: 500 !important;
    font-size: 14px;
    line-height: 15px;
    margin-bottom: 0px !important
}

.catalog-results .item-card-caption {
    display: flex;
    height: 35%;
    flex-direction: column;
    justify-content: space-between
}

.catalog-results .text-robux-tile {
    font-weight: 500 !important;
    font-size: 15px;
    line-height: 15px
}

.catalog-results span.icon-limited-unique-label {
    background-image: url("https://rogold.live/svgs/dark/catalog.svg#limitedu") !important;
    background-size: 68px 18px !important;
    width: 68px !important
}

.light-theme .catalog-results span.icon-limited-unique-label {
    background-image: url("https://rogold.live/svgs/light/catalog.svg#limitedu") !important
}

.catalog-results .icon-limited-label,.catalog-results .icon-limited-unique-label {
    background-image: url("https://rogold.live/svgs/dark/catalog.svg#limited") !important;
    border-radius: 0px !important;
    background-size: 55px 18px !important;
    left: 5px !important;
    bottom: 4px !important
}

.light-theme .catalog-results .icon-limited-label,.light-theme .catalog-results .icon-limited-unique-label {
    background-image: url("https://rogold.live/svgs/light/catalog.svg#limited") !important
}

.catalog-results .breadcrumbs {
    display: none
}

#item-thumbnail-container-frontend .thumbnail-holder {
    border-radius: 10px
}

#item-thumbnail-container-frontend .enable-three-dee {
    font-weight: 500 !important;
    color: #fff !important;
    opacity: 1 !important;
    border: 1px solid hsla(0,0%,100%,.2) !important;
    border-radius: 5px !important;
    background: none !important;
    display: flex;
    height: 36px !important;
    justify-content: center;
    align-items: center
}

.item-details-thumbnail-container {
    padding: 10px !important
}

.item-details-thumbnail-container canvas {
    width: 400px !important;
    height: 400px !important
}

.item-details-thumbnail-container .thumbnail-ui-container .right-align-container .thumbnail-button-container {
    align-items: center
}

.item-details-thumbnail-container .bottom-align-container {
    bottom: 10px !important
}

.item-details-thumbnail-container .bottom-align-container .left-align-container {
    margin-left: 8px
}

#item-thumbnail-container-frontend .enable-three-dee:first-child {
    width: 70px !important;
    margin-right: 0px
}

#item-thumbnail-container-frontend .icon-limited-unique-label {
    margin: 0 10px 10px;
    background-size: 103px 23px !important;
    height: 23px !important;
    width: 103px !important;
    background-image: url("https://rogold.live/svgs/dark/catalog.svg#limitedu")
}

.light-theme #item-thumbnail-container-frontend .icon-limited-unique-label {
    background-image: url("https://rogold.live/svgs/light/catalog.svg#limitedu")
}

#item-thumbnail-container-frontend .icon-limited-label {
    background-position: -10px !important;
    margin: 0 10px 10px;
    background-size: 103px 23px !important;
    height: 23px !important;
    width: 103px !important;
    background-image: url("https://rogold.live/svgs/dark/catalog.svg#limited")
}

.light-theme #item-thumbnail-container-frontend .icon-limited-label {
    background-image: url("https://rogold.live/svgs/light/catalog.svg#limited")
}

#item-container .item-name-container h1 {
    font-weight: 600;
    font-size: 24px;
    line-height: 29px
}

#item-container .item-name-container .text-label {
    color: hsla(0,0%,100%,.3);
    font-size: 14px !important;
    line-height: 17px
}

#item-container .item-name-container .text-name {
    font-size: 14px !important;
    line-height: 17px
}

#item-container .item-name-container {
    border-bottom: none;
    margin-top: 10px
}

.section-content,.recommendations-container {
    border-radius: 10px !important
}

resellers-pane .section-content {
    padding: 10px !important
}

.favorite-button-container {
    padding: 0 0 10px 10px
}

#item-details {
    display: flex;
    flex-wrap: nowrap;
    height: 360px;
    flex-direction: column-reverse;
    justify-content: space-evenly
}

#item-details .price-row-container:not(:has(.text-robux-lg.disabled)) {
    border-top: 1px dashed hsla(0,0%,100%,.1);
    padding-top: 30px
}

#item-details .price-row-container:not(:has(.text-robux-lg.disabled)) .price-container-text {
    width: 100% !important
}

#item-details .price-row-container:not(:has(.text-robux-lg.disabled)) .price-container-text .price-info {
    width: auto;
    margin-right: 20px;
    display: flex;
    flex-direction: row;
    justify-content: space-between
}

#item-details .price-row-container:not(:has(.text-robux-lg.disabled)) .price-container-text .price-info .item-price-value {
    display: flex;
    margin-right: 20px;
    margin-top: 5px
}

#item-details .price-row-container:not(:has(.text-robux-lg.disabled)) .price-container-text .price-info>.font-caption-body {
    display: none
}

#item-details .price-row-container:not(:has(.text-robux-lg.disabled)) .price-container-text .price-info>.item-purchase-btns-container {
    margin-top: 0;
    display: flex;
    align-items: center;
    gap: 10px
}

#item-details .price-row-container:not(:has(.text-robux-lg.disabled)) .price-container-text .price-info>.item-purchase-btns-container>.btn-container {
    height: fit-content
}

#item-details .price-row-container:not(:has(.text-robux-lg.disabled)) .price-container-text .price-info>.item-purchase-btns-container .PurchaseButton,#item-details .price-row-container:not(:has(.text-robux-lg.disabled)) .price-container-text .price-info>.item-purchase-btns-container .shopping-cart-add-remove-btn-container>button {
    font-weight: 600;
    font-size: 14px;
    line-height: 17px;
    padding: 8px 50px;
    width: 126px;
    height: 33px;
    border-radius: 7px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 0;
    --text-action: var(--text-blue);
    --text-confirm: var(--text-success);
    --text-default: #333536;
    background: var(--theme-buttons-confirm-background, var(--text-confirm)) !important;
    font-weight: 600 !important;
    border: none !important;
    text-wrap: nowrap;
    cursor: pointer;
    transition: background-color .3s,box-shadow .3s;
    color: var(--theme-buttons-confirm-color, var(--text-color)) !important;
    border-radius: var(--theme-buttons-confirm-corners, 5px) !important;
    font-size: var(--theme-typography-primary-fontSize, 12px) !important
}

#item-details .price-row-container:not(:has(.text-robux-lg.disabled)) .price-container-text .price-info>.item-purchase-btns-container .PurchaseButton.btn-primary-lg,#item-details .price-row-container:not(:has(.text-robux-lg.disabled)) .price-container-text .price-info>.item-purchase-btns-container .shopping-cart-add-remove-btn-container>button.btn-primary-lg {
    --text-action: var(--text-blue);
    --text-confirm: var(--text-success);
    --text-default: #333536;
    background: var(--theme-buttons-default-background, var(--text-default)) !important;
    font-weight: 600 !important;
    border: none !important;
    text-wrap: nowrap;
    cursor: pointer;
    transition: background-color .3s,box-shadow .3s;
    color: var(--theme-buttons-default-color, var(--text-color)) !important;
    border-radius: var(--theme-buttons-default-corners, 5px) !important;
    font-size: var(--theme-typography-primary-fontSize, 12px) !important
}

#item-details .price-row-container:not(:has(.text-robux-lg.disabled)) .price-container-text .price-info>.item-purchase-btns-container .PurchaseButton.btn-primary-lg:hover:not(.disabled),#item-details .price-row-container:not(:has(.text-robux-lg.disabled)) .price-container-text .price-info>.item-purchase-btns-container .PurchaseButton.btn-primary-lg.glow,#item-details .price-row-container:not(:has(.text-robux-lg.disabled)) .price-container-text .price-info>.item-purchase-btns-container .shopping-cart-add-remove-btn-container>button.btn-primary-lg:hover:not(.disabled),#item-details .price-row-container:not(:has(.text-robux-lg.disabled)) .price-container-text .price-info>.item-purchase-btns-container .shopping-cart-add-remove-btn-container>button.btn-primary-lg.glow {
    box-shadow: var(--theme-buttons-default-shadowX, 0px) var(--theme-buttons-default-shadowY, 2px) var(--theme-buttons-default-shadowBlur, 10px) var(--theme-buttons-default-shadow, color-mix(in srgb, var(--theme-buttons-default-background, var(--text-default)), black 20%)) !important
}

#item-details .price-row-container:not(:has(.text-robux-lg.disabled)) .price-container-text .price-info>.item-purchase-btns-container .PurchaseButton.btn-primary-lg.disabled,#item-details .price-row-container:not(:has(.text-robux-lg.disabled)) .price-container-text .price-info>.item-purchase-btns-container .shopping-cart-add-remove-btn-container>button.btn-primary-lg.disabled {
    background: color-mix(in srgb, var(--theme-buttons-default-background, var(--text-default)), black 60%)
}

#item-details .price-row-container:not(:has(.text-robux-lg.disabled)) .price-container-text .price-info>.item-purchase-btns-container .PurchaseButton.btn-primary-lg:hover,#item-details .price-row-container:not(:has(.text-robux-lg.disabled)) .price-container-text .price-info>.item-purchase-btns-container .shopping-cart-add-remove-btn-container>button.btn-primary-lg:hover {
    background: #cecece;
    box-shadow: 0px 2px 20px rgba(0,0,0,.25)
}

#item-details .price-row-container:not(:has(.text-robux-lg.disabled)) .price-container-text .price-info>.item-purchase-btns-container .PurchaseButton:hover:not(.disabled),#item-details .price-row-container:not(:has(.text-robux-lg.disabled)) .price-container-text .price-info>.item-purchase-btns-container .PurchaseButton.glow,#item-details .price-row-container:not(:has(.text-robux-lg.disabled)) .price-container-text .price-info>.item-purchase-btns-container .shopping-cart-add-remove-btn-container>button:hover:not(.disabled),#item-details .price-row-container:not(:has(.text-robux-lg.disabled)) .price-container-text .price-info>.item-purchase-btns-container .shopping-cart-add-remove-btn-container>button.glow {
    box-shadow: var(--theme-buttons-confirm-shadowX, 0px) var(--theme-buttons-confirm-shadowY, 2px) var(--theme-buttons-confirm-shadowBlur, 10px) var(--theme-buttons-confirm-shadow, color-mix(in srgb, var(--theme-buttons-confirm-background, var(--text-confirm)), black 20%)) !important
}

#item-details .price-row-container:not(:has(.text-robux-lg.disabled)) .price-container-text .price-info>.item-purchase-btns-container .PurchaseButton.disabled,#item-details .price-row-container:not(:has(.text-robux-lg.disabled)) .price-container-text .price-info>.item-purchase-btns-container .shopping-cart-add-remove-btn-container>button.disabled {
    background: color-mix(in srgb, var(--theme-buttons-confirm-background, var(--text-confirm)), black 60%)
}

#item-details .price-row-container:not(:has(.text-robux-lg.disabled)) .has-price-label,#item-details .price-row-container:not(:has(.text-robux-lg.disabled)) .price-label,#item-details .price-row-container:not(:has(.text-robux-lg.disabled)) .empty-label {
    display: none
}

#wrap #item-details {
    height: fit-content
}

#wrap #item-details .catalog-info-holder .item-info-row-container {
    height: 40px
}

#wrap #item-details .catalog-info-holder .item-info-row-container .font-header-1 {
    text-align: center;
    padding-right: 0;
    width: fit-content;
    min-width: fit-content;
    flex-basis: 20px;
    color: var(--theme-typography-primary-color, var(--text-color));
    font-weight: 600
}

#wrap #item-details .catalog-info-holder .item-info-row-container .text {
    color: var(--theme-typography-secondary-color, var(--text-secondary))
}

#wrap #item-details .toggle-target.item-info-row-container {
    display: flex;
    flex-direction: column;
    height: fit-content
}

#wrap #item-details .toggle-target.item-info-row-container .font-header-1 {
    margin-bottom: 5px;
    color: var(--theme-typography-primary-color, var(--text-color));
    font-weight: 600;
    flex-basis: 20px
}

#wrap #item-details .toggle-target.item-info-row-container #item-details-description {
    max-width: fit-content;
    overflow-y: hidden
}

#wrap #item-details .toggle-target.item-info-row-container .toggle-description {
    font-size: 12px
}

#wrap #item-details .item-info-row-container:has(.disabled) .price-label {
    display: none
}

#wrap #item-details .item-info-row-container:has(.disabled) .price-info {
    flex-direction: column
}

#wrap #item-details .item-info-row-container:has(.disabled) .price-info .item-price-value .text-robux-lg.disabled {
    text-decoration-line: line-through
}

#wrap #item-details .item-info-row-container:has(.disabled) .price-info .item-price-value+.font-caption-body {
    display: initial;
    color: var(--theme-typography-secondary-color, var(--text-secondary))
}

.item-field-container,.item-type-field-container {
    display: flex;
    flex-direction: column;
    margin-top: 0 !important
}

.item-field-container.toggle-target .field-label {
    margin-bottom: 20px;
    color: var(--theme-typography-primary-color, var(--text-color));
    font-weight: 600;
    font-size: 20px;
    line-height: 24px;
    width: 150px !important
}

.clearfix:not(.toggle-target) .field-label {
    color: var(--theme-typography-primary-color, var(--text-color));
    font-weight: 600;
    font-size: 16px;
    line-height: 19px
}

#type-content,.item-genre,.catalog-info-holder .date-time-i18n,#tradable-content,.item-hold-tooltip .text {
    font-size: 14px !important;
    line-height: 17px;
    color: var(--theme-typography-secondary-color, var(--text-secondary)) !important
}

#item-details-description div {
    overflow-y: auto;
    width: 100%;
    font-family: var(--theme-typography-secondary-fontFamily) !important;
    color: var(--theme-typography-secondary-color, var(--text-secondary)) !important;
    font-size: var(--theme-typography-secondary-fontSize, 16px) !important;
    line-height: var(--theme-typography-secondary-lineHeight, 24px) !important;
    text-shadow: var(--theme-typography-secondary-shadowX) var(--theme-typography-secondary-shadowY) var(--theme-typography-secondary-shadowBlur) var(--theme-typography-secondary-shadow);
    text-decoration: var(--theme-typography-secondary-underline);
    font-style: var(--theme-typography-secondary-italic)
}

span[data-container-id=item-details-description] {
    display: none !important
}

.catalog-info-holder {
    display: flex;
    align-items: center;
    flex-direction: row-reverse;
    flex-wrap: nowrap;
    justify-content: flex-end;
    margin-top: 20px
}

.catalog-info-holder .clearfix:not(.clearfix:first-child) {
    border-right: 1px solid hsla(0,0%,100%,.1);
    padding-right: 20px;
    margin-right: 20px
}

.catalog-info-holder .clearfix {
    display: flex;
    flex-direction: column;
    align-items: center
}

.catalog-info-holder .clearfix .field-content,.catalog-info-holder .clearfix .text-subheader {
    width: fit-content;
    padding-right: 9px
}

.topic-container {
    background-color: var(--theme-color-secondary, var(--background));
    border-radius: 10px
}
