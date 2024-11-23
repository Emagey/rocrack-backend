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
#rgu-themes .themes-header {
    padding-bottom: 10px;
    border-bottom: 1.5px var(--theme-color-third, var(--third)) solid !important
}

#rgu-themes .themes-header h1 {
    font-weight: 700
}

#rgu-themes .themes-header:has(+.theme-creator-page) {
    padding-left: 30px
}

#rgu-themes .theme-discovery {
    margin-top: 15px
}

#rgu-themes .theme-discovery .search-bar {
    display: flex;
    margin-top: 10px;
    margin-bottom: -5px
}

#rgu-themes .theme-discovery .search-bar input {
    width: 100%;
    height: 40px;
    border-radius: 10px;
    padding: 10px;
    font-size: 14px;
    border: none;
    background-color: var(--theme-color-primary, var(--primary)) !important;
    margin-right: 10px
}

#rgu-themes .theme-discovery .search-bar input.query-search {
    width: 70%
}

#rgu-themes .theme-discovery .search-bar input.tags-search {
    width: 40%
}

#rgu-themes .theme-discovery .search-bar input.creator-search {
    width: 30%
}

#rgu-themes .theme-discovery .search-bar input::placeholder {
    color: var(--theme-typography-secondary-color, var(--text-secondary)) !important
}

#rgu-themes .theme-discovery .search-bar button {
    background-color: rgba(33,118,255,.1254901961) !important;
    color: #2176ff;
    font-size: 12px;
    border-radius: 7px;
    border: none;
    height: 32px;
    gap: 5px;
    display: flex;
    align-items: center;
    padding: 10px 15px;
    justify-content: center;
    transition: all .3s;
    width: 100px;
    height: 40px;
    border-radius: 10px;
    border: none;
    font-size: 14px;
    cursor: pointer
}

#rgu-themes .theme-discovery .search-bar button:hover,#rgu-themes .theme-discovery .search-bar button.active {
    background-color: #2176ff !important;
    color: #fff !important;
    box-shadow: 0px 2px 10px rgba(76,132,255,.5)
}

#rgu-themes .theme-discovery .search-bar .select-field {
    height: 40px !important;
    margin-right: 10px;
    background-color: var(--theme-color-primary, var(--primary)) !important
}

#rgu-themes .theme-discovery .search-bar .select-field span {
    font-size: 14px !important
}

#rgu-themes .theme-discovery .search-bar .select-field svg {
    top: 11px !important;
    right: 15px !important
}

#rgu-themes .theme-discovery .search-bar .input-element,#rgu-themes .theme-discovery .search-bar .input-holder {
    margin-top: 0;
    width: 160px;
    height: 40px
}

#rgu-themes .theme-discovery .themes-content {
    display: flex;
    gap: 10px;
    margin-top: 15px
}

#rgu-themes .theme-discovery .themes-content .theme-list-container {
    width: 100%
}

#rgu-themes .theme-discovery .themes-content:not(.empty-list) .theme-list-container {
    border-radius: 10px;
    min-height: 681.59px;
    background: var(--theme-color-primary, var(--primary)) !important
}

#rgu-themes .theme-discovery .themes-content:not(.empty-list) .theme-list-container .theme-list .theme-created {
    color: var(--theme-typography-secondary-color, var(--text-secondary)) !important
}

#rgu-themes .theme-discovery .themes-content .theme-preview {
    min-width: 340px;
    max-width: 340px;
    background: var(--theme-color-primary, var(--primary)) !important;
    padding: 10px;
    border-radius: 10px;
    position: sticky;
    top: 0;
    height: 681.59px
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-header {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    flex-direction: column;
    margin-bottom: 10px;
    border-bottom: 1px solid hsla(0,0%,100%,.1);
    padding-bottom: 10px
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-header .preview-svg {
    width: fit-content;
    height: 130px;
    border-radius: 10px 10px 0 0;
    margin: -10px;
    box-shadow: 0px 1px 5px var(--theme-color-secondary, var(--background))
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-header .preview-svg svg {
    border-radius: 10px 10px 0 0
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-header .theme-name {
    font-size: 1.2em;
    font-weight: 700;
    text-overflow: ellipsis;
    display: block;
    overflow: hidden;
    max-width: 300px;
    text-wrap: nowrap;
    line-height: 1.4em;
    margin-top: 20px
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-header .theme-name+svg {
    position: absolute;
    right: 10px;
    top: 145px;
    cursor: pointer
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-header .theme-privacy {
    width: fit-content;
    padding: 0px 10px;
    border-radius: 8px;
    font-weight: 700;
    display: inline-block;
    font-size: 13px;
    margin-top: 5px
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-header .theme-privacy:has(.public) {
    background: linear-gradient(180deg, #00d68f 0%, #06aa73 100%)
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-header .theme-privacy:has(.private) {
    background: linear-gradient(180deg, #da4a4a 0%, #cf3131 100%)
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-header .theme-privacy .public,#rgu-themes .theme-discovery .themes-content .theme-preview .preview-header .theme-privacy .private {
    color: #000 !important
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-header .tags {
    display: flex;
    gap: 5px;
    margin-top: 10px;
    padding-bottom: 5px;
    overflow-x: auto;
    max-width: 100%
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-header .tags .tag {
    border: none;
    padding: 6px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    cursor: pointer;
    border-radius: 20px;
    white-space: nowrap;
    background-color: var(--theme-color-secondary, var(--background));
    color: var(--theme-typography-secondary-color, var(--text-secondary)) !important;
    font-size: small
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content {
    gap: 10px
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-info {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    width: 100%;
    flex-direction: column
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-info>.title {
    font-size: medium;
    font-weight: 700;
    line-height: 1.4em
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-info .theme-date {
    font-size: small;
    color: var(--theme-typography-secondary-color, var(--text-secondary)) !important
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-info .theme-creator {
    font-size: small;
    color: var(--theme-typography-secondary-color, var(--text-secondary)) !important
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-info .title {
    color: var(--theme-typography-primary-color, var(--text-color)) !important
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-stats {
    margin-top: 10px
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-stats>.title {
    font-size: medium;
    font-weight: 700;
    line-height: 1.4em
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-stats>.stats {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    width: 100%;
    flex-direction: column
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-stats>.stats .stat-title {
    color: var(--theme-typography-primary-color, var(--text-color));
    font-size: small
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-stats>.stats .stat-value {
    color: var(--theme-typography-secondary-color, var(--text-secondary)) !important;
    font-size: small
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-description {
    font-size: .8em;
    color: var(--theme-typography-secondary-color, var(--text-secondary)) !important;
    margin-top: 10px;
    max-width: 300px;
    display: flex;
    flex-direction: column;
    overflow: hidden;
    overflow-wrap: break-word
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-description .title {
    color: var(--theme-typography-primary-color, var(--text-color)) !important;
    font-size: medium !important;
    font-weight: 700 !important;
    line-height: 1.4em !important
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .action-sep {
    position: absolute;
    bottom: 55px;
    margin-left: 5px
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-actions {
    display: flex;
    gap: 10px;
    bottom: 10px;
    position: absolute;
    width: 95%;
    padding-top: 10px
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-actions button {
    width: calc(25% - 8px)
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-actions button:first-child:nth-last-child(3),#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-actions button:first-child:nth-last-child(3)~button {
    width: calc(33.33% - 7px)
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-actions button.download,#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-actions button.edit {
    background-color: rgba(33,118,255,.2509803922) !important;
    color: #2176ff;
    font-size: 12px;
    border-radius: 7px;
    border: none;
    height: 32px;
    gap: 5px;
    display: flex;
    align-items: center;
    padding: 10px 15px;
    justify-content: center;
    transition: all .3s
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-actions button.download:hover,#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-actions button.download.active,#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-actions button.edit:hover,#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-actions button.edit.active {
    background-color: #2176ff !important;
    color: #fff !important;
    box-shadow: 0px 2px 10px rgba(76,132,255,.5)
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-actions button.share {
    background-color: rgba(255,220,100,.2509803922) !important;
    color: #ffdc64;
    font-size: 12px;
    border-radius: 7px;
    border: none;
    height: 32px;
    gap: 5px;
    display: flex;
    align-items: center;
    padding: 10px 15px;
    justify-content: center;
    transition: all .3s
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-actions button.share:hover,#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-actions button.share.active {
    background-color: #ffdc64 !important;
    color: #fff !important;
    box-shadow: 0px 2px 10px rgba(255,220,100,.5)
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-actions button.delete,#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-actions button.report {
    background-color: rgba(255,64,64,.2509803922) !important;
    color: #ff4040;
    font-size: 12px;
    border-radius: 7px;
    border: none;
    height: 32px;
    gap: 5px;
    display: flex;
    align-items: center;
    padding: 10px 15px;
    justify-content: center;
    transition: all .3s
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-actions button.delete:hover,#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-actions button.delete.active,#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-actions button.report:hover,#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-actions button.report.active {
    background-color: #ff4040 !important;
    color: #fff !important;
    box-shadow: 0px 2px 10px rgba(255,64,64,.5)
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-actions button.select {
    background-color: rgba(0,214,143,.2509803922) !important;
    color: #00d68f;
    font-size: 12px;
    border-radius: 7px;
    border: none;
    height: 32px;
    gap: 5px;
    display: flex;
    align-items: center;
    padding: 10px 15px;
    justify-content: center;
    transition: all .3s
}

#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-actions button.select:hover,#rgu-themes .theme-discovery .themes-content .theme-preview .preview-content .theme-actions button.select.active {
    background-color: #00d68f !important;
    color: #fff !important;
    box-shadow: 0px 2px 10px rgba(0,214,143,.5)
}

#rgu-themes .theme-discovery .themes-content .theme-list {
    border-radius: 3px;
    padding: 20px;
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(165px, 1fr));
    gap: 16px;
    max-height: 665px;
    overflow-y: auto
}

#rgu-themes .theme-discovery .themes-content .theme-list.featured-tab {
    display: flex;
    flex-wrap: wrap;
    overflow-y: hidden;
    overflow-x: hidden;
    max-height: fit-content;
    position: relative
}

#rgu-themes .theme-discovery .themes-content .theme-list.featured-tab .preview-bg {
    width: 100% !important;
    height: 641.59px !important;
    border-radius: 10px
}

#rgu-themes .theme-discovery .themes-content .theme-list.featured-tab .previous {
    position: absolute;
    left: 10px;
    top: 50%;
    transform: translateY(-50%);
    background-color: var(--theme-color-primary, var(--primary));
    border-radius: 50%;
    border: 1px solid var(--theme-color-third, var(--third));
    padding: 7px 7px 3px 7px;
    cursor: pointer;
    z-index: 100;
    transition: opacity .3s;
    opacity: .5
}

#rgu-themes .theme-discovery .themes-content .theme-list.featured-tab .previous:hover {
    opacity: 1
}

#rgu-themes .theme-discovery .themes-content .theme-list.featured-tab .next {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%) rotate(180deg);
    background-color: var(--theme-color-primary, var(--primary));
    border-radius: 50%;
    border: 1px solid var(--theme-color-third, var(--third));
    padding: 7px 7px 3px 7px;
    cursor: pointer;
    z-index: 100;
    transition: opacity .3s;
    opacity: .5
}

#rgu-themes .theme-discovery .themes-content .theme-list.featured-tab .next:hover {
    opacity: 1
}

#rgu-themes .theme-discovery .themes-content .theme-list .empty-list-text {
    width: 100%;
    text-align: center
}

#rgu-themes .theme-discovery .themes-content .theme-list .theme {
    padding: 5px;
    height: max-content;
    cursor: pointer
}

#rgu-themes .theme-discovery .themes-content .theme-list .theme.active .theme-img svg {
    outline: 2px solid #4958f2
}

#rgu-themes .theme-discovery .themes-content .theme-list .theme.selected .theme-img svg {
    outline: 2px solid #00d68f
}

#rgu-themes .theme-discovery .themes-content .theme-list .theme .theme-name {
    text-overflow: ellipsis;
    overflow: hidden;
    display: block;
    max-width: 165px;
    text-wrap: nowrap
}

#rgu-themes .theme-discovery .themes-content .theme-list .theme .theme-img {
    width: 165px;
    height: 138px;
    margin-bottom: 10px
}

#rgu-themes .theme-discovery .themes-content .theme-list .theme .theme-img svg {
    border-radius: 10px;
    box-shadow: 0px 2px 10px var(--theme-color-third, var(--third))
}

#rgu-themes .theme-discovery .themes-tabs {
    display: flex;
    flex-direction: row;
    gap: 15px
}

#rgu-themes .theme-discovery .themes-tabs .theme-btn button {
    border-radius: 10px !important;
    padding: 10px 10px !important;
    font-size: medium !important;
    color: var(--theme-typography-primary-color, var(--text-color)) !important
}

#rgu-themes .theme-discovery .themes-tabs .theme-btn button:not(.active) {
    background-color: var(--theme-color-primary, var(--primary)) !important
}

#rgu-themes .theme-discovery .themes-tabs .theme-btn button.active {
    box-shadow: 0px 2px 10px rgba(76,132,255,.5);
    background-color: var(--text-blue) !important;
    color: #fff !important
}

#rgu-themes .theme-discovery .themes-tabs .theme-btn#favorites-tab::after {
    content: "";
    border-right: 1.5px var(--theme-color-third, var(--third)) solid;
    padding-right: 15px
}

#rgu-themes .theme-discovery .themes-tabs .theme-btn#favorites-tab button {
    color: #ffdc64 !important
}

#rgu-themes .theme-discovery .themes-tabs .theme-btn#festive-tab button {
    background: linear-gradient(90deg, #ff4040 0%, #ff4040 12.5%, #ffdc64 12.5%, #ffdc64 25%, #ff4040 25%, #ff4040 37.5%, #ffdc64 37.5%, #ffdc64 50%, #ff4040 50%, #ff4040 62.5%, #ffdc64 62.5%, #ffdc64 75%, #ff4040 75%, #ff4040 87.5%, #ffdc64 87.5%, #ffdc64 100%);
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: rgba(0,0,0,0)
}

#rgu-themes .theme-creator-page {
    width: 100%;
    height: 80vh;
    display: flex;
    background-color: color-mix(in srgb, var(--third), black 20%);
    overflow-y: hidden
}

#rgu-themes .theme-creator-page .preview-area {
    width: 75%;
    height: 100%;
    margin-top: 15px;
    margin-left: 10px
}

#rgu-themes .theme-creator-page .preview-area .path {
    width: fit-content;
    height: 30px;
    background-color: var(--primary);
    border-radius: 10px;
    padding: 5px 15px;
    display: flex;
    align-content: center;
    position: absolute;
    flex-wrap: wrap;
    font-size: 12px
}

#rgu-themes .theme-creator-page .preview-area .path :first-child {
    color: var(--text-color)
}

#rgu-themes .theme-creator-page .preview-area .path .path-segment {
    align-content: center
}

#rgu-themes .theme-creator-page .preview-area .bg-dot-grid {
    background-image: radial-gradient(circle at 2px 2px, rgba(255, 255, 255, 0.05) 4px, transparent 0);
    background-size: 60px 60px;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center
}

#rgu-themes .theme-creator-page .config-area {
    width: 25%;
    max-width: 25%;
    min-width: 25%;
    height: 100%;
    background-color: var(--third) !important;
    padding: 10px
}

#rgu-themes .theme-creator-page .config-area .tabs {
    display: flex;
    gap: 10px;
    border-bottom: 2px solid hsla(0,0%,100%,.1)
}

#rgu-themes .theme-creator-page .config-area .tabs .tab {
    padding: 10px 5px;
    color: var(--text-secondary) !important;
    font-weight: 600;
    font-size: 12px;
    line-height: 15px;
    cursor: pointer;
    transition: color .3s;
    position: relative
}

#rgu-themes .theme-creator-page .config-area .tabs .tab:hover {
    color: var(--text-color) !important
}

#rgu-themes .theme-creator-page .config-area .tabs .tab.active {
    color: var(--text-color) !important
}

#rgu-themes .theme-creator-page .config-area .tabs .tab.active::after {
    content: "";
    width: 20px;
    height: 4px;
    background-color: var(--text-blue) !important;
    position: absolute;
    display: block;
    border-radius: 10px;
    bottom: -3px;
    left: 50%;
    transform: translateX(-50%)
}

#rgu-themes .theme-creator-page .config-area .config {
    margin-top: 10px;
    height: calc(100% - 37px);
    display: block;
    position: relative;
    padding-bottom: 10px;
    border-radius: 10px
}

#rgu-themes .theme-creator-page .config-area .config .theme-tab,#rgu-themes .theme-creator-page .config-area .config .typography-tab,#rgu-themes .theme-creator-page .config-area .config .settings-tab {
    display: none;
    overflow-y: auto;
    overflow-x: hidden;
    padding-bottom: 10px;
    height: 100%;
    border-radius: 10px
}

#rgu-themes .theme-creator-page .config-area .config .theme-tab.active,#rgu-themes .theme-creator-page .config-area .config .typography-tab.active,#rgu-themes .theme-creator-page .config-area .config .settings-tab.active {
    display: block
}

#rgu-themes .theme-creator-page .config-area .config .theme-tab::-webkit-scrollbar,#rgu-themes .theme-creator-page .config-area .config .typography-tab::-webkit-scrollbar,#rgu-themes .theme-creator-page .config-area .config .settings-tab::-webkit-scrollbar {
    display: none
}

#rgu-themes .theme-creator-page .config-area .config .theme-tab:-moz-scrollbar,#rgu-themes .theme-creator-page .config-area .config .typography-tab:-moz-scrollbar,#rgu-themes .theme-creator-page .config-area .config .settings-tab:-moz-scrollbar {
    display: none
}

#rgu-themes .theme-creator-page .config-area .config .theme-tab .config-section,#rgu-themes .theme-creator-page .config-area .config .typography-tab .config-section,#rgu-themes .theme-creator-page .config-area .config .settings-tab .config-section {
    width: 100%
}

#rgu-themes .theme-creator-page .config-area .config .theme-tab .config-section h2,#rgu-themes .theme-creator-page .config-area .config .typography-tab .config-section h2,#rgu-themes .theme-creator-page .config-area .config .settings-tab .config-section h2 {
    font-size: 14px;
    font-weight: 600;
    color: var(--text-color) !important;
    padding: 0;
    margin-bottom: -5px;
    text-transform: capitalize;
    display: flex;
    align-items: center
}

#rgu-themes .theme-creator-page .config-area .config .theme-tab .config-section h2 svg,#rgu-themes .theme-creator-page .config-area .config .typography-tab .config-section h2 svg,#rgu-themes .theme-creator-page .config-area .config .settings-tab .config-section h2 svg {
    margin-left: 5px
}

#rgu-themes .theme-creator-page .config-area .config .theme-tab .config-section .description,#rgu-themes .theme-creator-page .config-area .config .typography-tab .config-section .description,#rgu-themes .theme-creator-page .config-area .config .settings-tab .config-section .description {
    font-size: 10px;
    color: var(--text-secondary) !important;
    margin-bottom: 5px
}

#rgu-themes .theme-creator-page .config-area .config .theme-tab .config-section .mini-themes,#rgu-themes .theme-creator-page .config-area .config .typography-tab .config-section .mini-themes,#rgu-themes .theme-creator-page .config-area .config .settings-tab .config-section .mini-themes {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px
}

@media(max-width: 1740px) {
    #rgu-themes .theme-creator-page .config-area .config .theme-tab .config-section .mini-themes,#rgu-themes .theme-creator-page .config-area .config .typography-tab .config-section .mini-themes,#rgu-themes .theme-creator-page .config-area .config .settings-tab .config-section .mini-themes {
        grid-auto-flow:column;
        grid-gap: 20px;
        grid-template-rows: 100px 100px;
        grid-template-columns: 100px 100px;
        flex-wrap: wrap;
        overflow-x: auto;
        overflow-y: hidden;
        padding-bottom: 10px
    }
}

@media(min-width: 2000px) {
    #rgu-themes .theme-creator-page .config-area .config .theme-tab .config-section .mini-themes,#rgu-themes .theme-creator-page .config-area .config .typography-tab .config-section .mini-themes,#rgu-themes .theme-creator-page .config-area .config .settings-tab .config-section .mini-themes {
        grid-template-columns:repeat(4, 1fr)
    }
}

#rgu-themes .theme-creator-page .config-area .config .theme-tab .config-section .mini-themes .theme,#rgu-themes .theme-creator-page .config-area .config .typography-tab .config-section .mini-themes .theme,#rgu-themes .theme-creator-page .config-area .config .settings-tab .config-section .mini-themes .theme {
    width: 104px
}

#rgu-themes .theme-creator-page .config-area .config .theme-tab .config-section .mini-themes .theme .theme-img,#rgu-themes .theme-creator-page .config-area .config .theme-tab .config-section .mini-themes .theme svg,#rgu-themes .theme-creator-page .config-area .config .typography-tab .config-section .mini-themes .theme .theme-img,#rgu-themes .theme-creator-page .config-area .config .typography-tab .config-section .mini-themes .theme svg,#rgu-themes .theme-creator-page .config-area .config .settings-tab .config-section .mini-themes .theme .theme-img,#rgu-themes .theme-creator-page .config-area .config .settings-tab .config-section .mini-themes .theme svg {
    width: 104px;
    height: 88px;
    border-radius: 10px
}

#rgu-themes .theme-creator-page .config-area .config .theme-tab .config-section .mini-themes .theme .theme-name,#rgu-themes .theme-creator-page .config-area .config .typography-tab .config-section .mini-themes .theme .theme-name,#rgu-themes .theme-creator-page .config-area .config .settings-tab .config-section .mini-themes .theme .theme-name {
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    margin-top: 5px
}

#rgu-themes .theme-creator-page .config-area .config .theme-tab .horizontal-bar,#rgu-themes .theme-creator-page .config-area .config .typography-tab .horizontal-bar,#rgu-themes .theme-creator-page .config-area .config .settings-tab .horizontal-bar {
    width: 90%;
    height: 2px;
    background-color: hsla(0,0%,100%,.1);
    margin-top: 20px;
    margin-bottom: 20px;
    margin-left: auto;
    margin-right: auto;
    border-radius: 10px
}

#rgu-themes .theme-creator-page .config-area .config .settings-tab .input-grid {
    margin-top: 10px
}

#rgu-themes .theme-creator-page .config-area .config .settings-tab .save-button {
    background-color: rgba(0,214,143,.1254901961) !important;
    color: #00d68f;
    font-size: 12px;
    border-radius: 7px;
    border: none;
    height: 32px;
    gap: 5px;
    display: flex;
    align-items: center;
    padding: 10px 15px;
    justify-content: center;
    transition: all .3s;
    width: 100%
}

#rgu-themes .theme-creator-page .config-area .config .settings-tab .save-button:hover,#rgu-themes .theme-creator-page .config-area .config .settings-tab .save-button.active {
    background-color: #00d68f !important;
    color: #fff !important;
    box-shadow: 0px 2px 10px rgba(0,214,143,.5)
}

#rgu-themes .theme-creator-page .config-area .config .settings-tab .cancel-button {
    background-color: rgba(255,64,64,.1254901961) !important;
    color: #ff4040;
    font-size: 12px;
    border-radius: 7px;
    border: none;
    height: 32px;
    gap: 5px;
    display: flex;
    align-items: center;
    padding: 10px 15px;
    justify-content: center;
    transition: all .3s;
    width: 100%
}

#rgu-themes .theme-creator-page .config-area .config .settings-tab .cancel-button:hover,#rgu-themes .theme-creator-page .config-area .config .settings-tab .cancel-button.active {
    background-color: #ff4040 !important;
    color: #fff !important;
    box-shadow: 0px 2px 10px rgba(255,64,64,.5)
}

#rgu-themes .theme-creator-page .config-area .input-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 0 10px
}

#rgu-themes .input-element {
    display: flex;
    flex-direction: column;
    gap: 5px
}

#rgu-themes .input-element .title {
    font-size: 12px;
    color: var(--text-secondary) !important;
    margin-top: 10px;
    margin-bottom: -5px
}

#rgu-themes .input-element:not(:has(.title)) {
    margin-top: 10px
}

#rgu-themes .input-element:has(.combo-button) {
    height: auto;
    flex-direction: column
}

#rgu-themes .input-element:has(.combo-button) .combo-button {
    width: 100%;
    display: flex;
    gap: 10px;
    padding: 5px 10px;
    border-radius: 5px;
    font-size: 12px;
    font-weight: 600;
    border: none;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all .3s;
    background-color: hsla(0,0%,100%,.1)
}

#rgu-themes .input-element:has(.combo-button) .combo-button.active {
    background-color: var(--text-blue) !important;
    color: #fff
}

#rgu-themes .input-element:has(.combo-button) .combo-button:hover {
    background-color: color-mix(in hsl shorter hue, var(--text-blue), transparent 40%) !important;
    color: #fff
}

#rgu-themes .input-element:has(.combo-button)>.input-holder {
    height: auto;
    flex-direction: column;
    background-color: rgba(0,0,0,0);
    padding-left: 0
}

#rgu-themes .input-element:has(.combo-button)>.input-holder>.input-holder {
    width: 100%
}

#rgu-themes .input-element .input-holder {
    display: flex;
    gap: 5px;
    position: relative;
    height: 34px
}

#rgu-themes .input-element .input-holder .color-swatch {
    width: 15px;
    height: 15px;
    margin-left: 10px;
    margin-top: 10px;
    border-radius: 5px;
    border: none;
    position: absolute;
    cursor: pointer
}

#rgu-themes .input-element .input-holder .color-input {
    cursor: pointer;
    width: 100%;
    height: 34px;
    border-radius: 8px;
    padding: 5px;
    font-size: 12px;
    background-color: hsla(0,0%,100%,.1);
    border: rgba(0,0,0,0)
}

#rgu-themes .input-element .input-holder:has(.select-field) {
    align-items: center
}

#rgu-themes .input-element .input-holder:has(.select-field) .select-field {
    cursor: pointer;
    width: 100%;
    height: 34px;
    border-radius: 8px;
    padding: 5px;
    font-size: 12px;
    background-color: hsla(0,0%,100%,.1);
    border: rgba(0,0,0,0);
    text-transform: capitalize;
    border-radius: 8px;
    padding-left: 10px;
    font-size: 12px;
    display: flex;
    align-items: center;
    color: var(--text-color) !important
}

#rgu-themes .input-element .input-holder:has(.select-field) .select-field>svg:first-child {
    margin-right: 5px;
    font-size: 17px
}

#rgu-themes .input-element .input-holder:has(.select-field) .select-field>span {
    margin-top: 2px;
    color: var(--text-secondary) !important
}

#rgu-themes .input-element .input-holder:has(.select-field) .select-field .icon-expand {
    position: absolute;
    right: 10px;
    top: 8px;
    transition: all .3s;
    font-size: 18px
}

#rgu-themes .input-element .input-holder .select-options {
    width: 100%;
    background-color: var(--primary);
    border-radius: 8px;
    padding: 5px;
    z-index: 100;
    box-shadow: 5px 2px 10px rgba(0,0,0,.2);
    gap: 4px;
    display: flex;
    flex-direction: column
}

#rgu-themes .input-element .input-holder .select-options .option-item {
    padding: 5px;
    border-radius: 5px;
    cursor: pointer;
    transition: all .1s;
    text-transform: capitalize;
    color: var(--text-secondary);
    font-size: 12px
}

#rgu-themes .input-element .input-holder .select-options .option-item:hover,#rgu-themes .input-element .input-holder .select-options .option-item.selected {
    background-color: hsla(0,0%,100%,.2);
    color: var(--text-color)
}

#rgu-themes .input-element .input-holder .color-hex {
    height: 34px;
    border-radius: 5px;
    font-size: 12px;
    font-weight: 600;
    color: var(--text-color);
    margin-left: 30px;
    padding-top: 6px;
    position: absolute;
    cursor: pointer
}

#rgu-themes .input-element .input-holder .input-number,#rgu-themes .input-element .input-holder .input-text,#rgu-themes .input-element .input-holder .input-link {
    cursor: pointer;
    width: 100%;
    height: 34px;
    border-radius: 8px;
    padding: 5px;
    font-size: 12px;
    background-color: hsla(0,0%,100%,.1);
    border: rgba(0,0,0,0);
    padding-left: 35px;
    padding-top: 8px;
    color: var(--text-secondary);
    font-weight: 500;
    display: flex;
    align-items: center
}

#rgu-themes .input-element .input-holder .input-number+.text-error,#rgu-themes .input-element .input-holder .input-text+.text-error,#rgu-themes .input-element .input-holder .input-link+.text-error {
    display: flex;
    align-items: center
}

#rgu-themes .input-element .input-holder svg:has(+.input-number,+.input-text,+.input-link) {
    position: absolute;
    left: 10px;
    top: 10px;
    cursor: pointer
}

#rgu-themes .input-element .input-holder .toggle {
    cursor: pointer;
    width: 100%;
    height: 34px;
    border-radius: 8px;
    padding: 5px;
    font-size: 12px;
    background-color: hsla(0,0%,100%,.1);
    border: rgba(0,0,0,0);
    padding-top: 10px;
    font-weight: 500;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    transition: all .3s
}

#rgu-themes .input-element .input-holder .toggle.active {
    background-color: color-mix(in hsl shorter hue, var(--text-blue), transparent 40%) !important
}

#rgu-themes .input-element .input-holder .toggle>svg {
    font-size: 20px;
    margin-top: -1px
}

#rgu-themes .input-element .input-holder .icon-arrow {
    position: absolute;
    right: 10px;
    cursor: pointer;
    font-size: 12px
}

#rgu-themes .input-element .input-holder .icon-arrow.up {
    top: 6px;
    transform: rotate(-90deg)
}

#rgu-themes .input-element .input-holder .icon-arrow.down {
    top: 16px;
    transform: rotate(90deg)
}

#rgu-themes .input-element .input-holder .icon-edit,#rgu-themes .input-element .input-holder .icon-upload {
    position: absolute;
    right: 10px;
    top: 13px;
    cursor: pointer
}

#rgu-themes .input-element .input-holder .icon-upload {
    top: 10px
}

#rgu-themes .input-element .input-holder .icon-upload:has(+.link-button) {
    right: 44px
}

#rgu-themes .input-element .input-holder .link-button {
    cursor: pointer;
    width: 100%;
    height: 34px;
    border-radius: 8px;
    padding: 5px;
    font-size: 12px;
    background-color: hsla(0,0%,100%,.1);
    border: rgba(0,0,0,0);
    padding-top: 10px;
    font-weight: 500;
    min-width: 34px;
    width: 34px
}

#rgu-themes .preview-bg {
    width: 80%;
    height: 80%;
    position: relative;
    border-radius: 10px;
    border: 2px solid var(--primary);
    container-type: inline-size;
    container-name: preview
}

#rgu-themes .preview-bg * {
    font-family: var(--theme-typography-primary-fontFamily) !important
}

#rgu-themes .preview-bg span,#rgu-themes .preview-bg h1,#rgu-themes .preview-bg h2 {
    color: var(--theme-typography-primary-color) !important;
    font-size: var(--theme-typography-primary-fontSize);
    line-height: var(--theme-typography-primary-lineHeight) !important;
    font-weight: var(--theme-typography-primary-bold) !important;
    text-shadow: var(--theme-typography-primary-shadowX) var(--theme-typography-primary-shadowY) var(--theme-typography-primary-shadowBlur) var(--theme-typography-primary-shadow);
    text-decoration: var(--theme-typography-primary-underline);
    font-style: var(--theme-typography-primary-italic)
}

@container preview style(--theme-site-sidebarFloating: 1) {
    #rgu-themes .preview-bg>.body .sidebar {
        border-radius:10px !important;
        height: calc(100% - 80px) !important;
        top: 65px;
        width: 15% !important;
        left: 1%;
        z-index: 1
    }

    #rgu-themes .preview-bg>.body .content {
        width: 100% !important;
        left: 0 !important;
        padding-left: 16%
    }
}

@container preview style(--theme-site-topbarFloating: 1) {
    #rgu-themes .preview-bg>.header {
        border-radius:10px !important;
        width: 98% !important;
        left: 1%;
        top: 1%;
        position: absolute !important
    }

    #rgu-themes .preview-bg>.body {
        position: absolute;
        height: 100% !important;
        top: 0
    }

    #rgu-themes .preview-bg>.body .content {
        height: 100% !important;
        padding-top: 8% !important
    }
}

@container preview (not style(--theme-site-topbarBlur: none)) and (style(--theme-site-topbarBlur)) {
    #rgu-themes .preview-bg>.body {
        position:absolute;
        height: 100% !important;
        top: 0
    }

    #rgu-themes .preview-bg>.body .content {
        height: 100% !important;
        padding-top: 8% !important;
        width: 100% !important;
        left: 0 !important;
        padding-left: 16%
    }

    #rgu-themes .preview-bg .sidebar {
        height: calc(100% - 50px) !important;
        top: 50px;
        z-index: 1
    }
}

@container preview (not style(--theme-site-sidebarBlur: none)) and (style(--theme-site-sidebarBlur)) {
    #rgu-themes .preview-bg>.body .sidebar {
        z-index:1
    }

    #rgu-themes .preview-bg>.body .content {
        width: 100% !important;
        left: 0 !important;
        padding-left: 16%
    }
}

@container preview style(--theme-site-topbarFloating: 1) and style(--theme-site-sidebarFloating: 0) {
    #rgu-themes .preview-bg>.header {
        width:80% !important;
        left: 18%
    }

    #rgu-themes .preview-bg>.body .sidebar {
        height: 100% !important;
        padding-top: 20px !important;
        top: 0 !important
    }
}

#rgu-themes .preview-bg>.header {
    width: 100%;
    height: 50px;
    border-radius: 8px 8px 0 0;
    background: var(--theme-color-topbar, var(--theme-color-primary, var(--primary)));
    background-image: var(--theme-site-topbarBackgroundUrl, var(--theme-color-topbar, var(--theme-color-primary)));
    background-size: var(--theme-site-topbarBackgroundSize);
    background-blend-mode: var(--theme-site-topbarBackgroundBlendMode);
    backdrop-filter: var(--theme-site-topbarBlur);
    display: flex;
    justify-content: space-between;
    z-index: 1;
    position: relative
}

#rgu-themes .preview-bg>.header .left {
    width: auto;
    height: 100%;
    display: flex;
    align-items: center;
    padding-left: 10px
}

#rgu-themes .preview-bg>.header .left .icon-logo {
    background-image: var(--theme-site-robloxLogoUrl, url(https://images.rbxcdn.com/d82801b936c26e174c4e782510a72d78-roblox_logo_dark_08292022.svg)) !important;
    filter: var(--theme-site-robloxLogoColor);
    background-size: var(--theme-site-robloxLogoSize, contain);
    background-position: var(--theme-site-robloxLogoPosition, left)
}

@container (max-width: 708px) {
    #rgu-themes .preview-bg>.header .left .icon-logo {
        background-image: var(--theme-site-robloxIconUrl, url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTYiIGhlaWdodD0iNTYiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTExLjY3NiAwTDAgNDQuMTY2IDQzLjU3NyA1NmwxMS42NzYtNDQuMTY2TDExLjY3NiAwem0yMC40MDkgMzUuODI3bC0xMi4xNzctMy4zMDggMy4yNjQtMTIuMzQyIDEyLjE4MiAzLjMwOC0zLjI3IDEyLjM0MnoiIGZpbGw9IiNmZmYiLz48L3N2Zz4=)) !important;
        filter: var(--theme-site-robloxIconColor);
        width: 30px;
        height: 30px;
        background-size: var(--theme-site-robloxIconSize, 30px 30px);
        background-position: var(--theme-site-robloxIconPosition, 0 0)
    }
}

#rgu-themes .preview-bg>.header .left .nav {
    color: var(--theme-typography-primary-color)
}

#rgu-themes .preview-bg>.header .left .nav li:hover {
    background-color: var(--theme-color-third, var(--third));
    border-radius: 10px
}

#rgu-themes .preview-bg>.header .left .nav li:hover a {
    background-color: rgba(0,0,0,0)
}

#rgu-themes .preview-bg>.header .right {
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    padding-right: 10px;
    flex-grow: 1
}

#rgu-themes .preview-bg>.header .right .rbx-header {
    display: flex;
    align-items: center;
    margin-right: auto;
    background-color: rgba(0,0,0,0);
    border: none
}

#rgu-themes .preview-bg>.header .right .navbar-search {
    max-width: 200px !important;
    width: fit-content !important;
    background: var(--theme-color-secondary, var(--background)) !important
}

#rgu-themes .preview-bg>.header .right .navbar-search form {
    width: 86% !important
}

#rgu-themes .preview-bg>.header .right .navbar-search form input {
    font-family: var(--theme-typography-secondary-fontFamily) !important;
    color: var(--theme-typography-secondary-color, var(--text-secondary)) !important;
    font-size: var(--theme-typography-secondary-fontSize, 12px) !important;
    line-height: var(--theme-typography-secondary-lineHeight) !important;
    font-variation-settings: "wght" var(--theme-typography-secondary-bold) !important;
    font-weight: var(--theme-typography-secondary-bold) !important;
    text-shadow: var(--theme-typography-secondary-shadowX) var(--theme-typography-secondary-shadowY) var(--theme-typography-secondary-shadowBlur) var(--theme-typography-secondary-shadow);
    text-decoration: var(--theme-typography-secondary-underline);
    font-style: var(--theme-typography-secondary-italic)
}

#rgu-themes .preview-bg>.header .right .navbar-search .icon-common-search-sm {
    filter: var(--theme-color-icons)
}

#rgu-themes .preview-bg>.header .right #navbar-messages {
    opacity: .8
}

#rgu-themes .preview-bg>.header .right .robux-display {
    width: fit-content !important;
    margin-left: 0 !important
}

#rgu-themes .preview-bg>.header .right .robux-display .nav-robux-icon,#rgu-themes .preview-bg>.header .right .robux-display .nav-robux-icon>span {
    display: inline-flex !important;
    align-items: center !important
}

#rgu-themes .preview-bg>.header .right .robux-display #nav-robux {
    filter: var(--theme-color-icons)
}

#rgu-themes .preview-bg>.header .right .robux-display .text-header {
    font-weight: 600;
    font-size: 14px;
    line-height: 17.94px;
    color: #fff;
    margin: 0 3px
}

#rgu-themes .preview-bg>.body {
    width: 100%;
    height: calc(100% - 50px);
    background-color: rgba(0,0,0,0)
}

#rgu-themes .preview-bg>.body>.sidebar {
    width: 160px;
    height: calc(100% - 50px);
    position: absolute;
    background: var(--theme-color-sidebar, var(--theme-color-primary, var(--primary)));
    background-image: var(--theme-site-sidebarBackgroundUrl, var(--theme-color-sidebar, var(--theme-color-primary)));
    background-size: var(--theme-site-sidebarBackgroundSize);
    background-blend-mode: var(--theme-site-sidebarBackgroundBlendMode);
    backdrop-filter: var(--theme-site-sidebarBlur);
    border-radius: 0 0 0 8px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: 0 0 8px 0 rgba(0,0,0,.3)
}

#rgu-themes .preview-bg>.body>.sidebar .sidebar-header {
    padding: 5px 10px 0;
    width: 100%;
    height: fit-content;
    display: flex;
    align-items: center
}

#rgu-themes .preview-bg>.body>.sidebar .sidebar-header .avatar {
    background: var(--theme-color-secondary, var(--background)) !important;
    border-radius: 15px !important;
    width: 36px !important;
    height: 36px !important;
    display: flex;
    align-content: center;
    justify-content: center;
    align-items: center
}

#rgu-themes .preview-bg>.body>.sidebar .sidebar-header .avatar .thumbnail-2d-container {
    width: 26px !important;
    height: 26px !important;
    border-radius: 30% !important;
    background-color: rgba(0,0,0,0) !important
}

#rgu-themes .preview-bg>.body>.sidebar .sidebar-header .name {
    color: var(--theme-typography-primary-color);
    font-weight: 400;
    font-size: 12px;
    line-height: 17px;
    margin-left: 9px;
    display: flex
}

#rgu-themes .preview-bg>.body>.sidebar .sidebar-content {
    width: 100%;
    height: 100%;
    padding: 5px 10px 0;
    margin-top: 10px;
    display: flex;
    flex-direction: column;
    gap: 5px
}

#rgu-themes .preview-bg>.body>.sidebar .sidebar-content .sidebar-item {
    margin: 0;
    height: 34px;
    min-height: 34px;
    background-color: rgba(0,0,0,0);
    opacity: .5;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    color: var(--theme-typography-primary-color);
    font-weight: 400;
    font-size: 10px;
    line-height: 15px;
    padding-left: 5px;
    cursor: pointer
}

#rgu-themes .preview-bg>.body>.sidebar .sidebar-content .sidebar-item:hover {
    background: var(--theme-color-secondary, var(--background)) !important;
    border-radius: 10px;
    opacity: 1 !important
}

#rgu-themes .preview-bg>.body>.sidebar .sidebar-content .sidebar-item span {
    margin-right: 10px;
    background-position: 0 0 !important;
    background-size: 20px 20px !important;
    width: 20px !important;
    height: 20px !important;
    filter: var(--theme-color-icons)
}

#rgu-themes .preview-bg>.body>.content {
    width: calc(100% - 160px);
    height: calc(100% - 50px);
    position: absolute;
    left: 160px;
    border-radius: 0 0 10px 0;
    display: flex;
    flex-direction: column;
    overflow-y: auto;
    overflow-x: hidden;
    container-type: inline-size;
    background: var(--theme-site-backgroundColor, var(--theme-color-secondary, var(--background)));
    background-image: var(--theme-site-backgroundUrl, var(--theme-site-backgroundColor, var(--theme-color-secondary, var(--background))));
    background-repeat: repeat;
    background-size: var(--theme-site-backgroundImageSize);
    background-blend-mode: var(--theme-site-backgroundBlendMode)
}

#rgu-themes .preview-bg>.body>.content::after {
    backdrop-filter: blur(var(--theme-site-backgroundBlur));
    content: "";
    display: block;
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0
}

#rgu-themes .preview-bg>.body>.content .profile-header {
    height: auto !important;
    width: 85% !important;
    margin-left: auto;
    margin-right: auto;
    z-index: 1;
    background: var(--theme-color-primary, var(--primary)) !important;
    border-radius: 17px 17px 13px 13px !important
}

#rgu-themes .preview-bg>.body>.content .profile-header .profile-header-content {
    width: 100%;
    margin: 0 !important
}

#rgu-themes .preview-bg>.body>.content .profile-header .profile-header-content .profile-banner {
    height: 120px;
    border-radius: 10px 10px 0 0;
    background-image: var(--theme-site-homeBannerUrl, url("https://rogold.live/assets/banners/banner_1.png")) !important;
    background-size: var(--theme-site-homeBannerSize, cover) !important;
    background-position: var(--theme-site-homeBannerPosition, top) !important
}

#rgu-themes .preview-bg>.body>.content .profile-header .details-actions {
    position: initial;
    width: 100%;
    margin: 10px 10px;
    gap: 10px
}

#rgu-themes .preview-bg>.body>.content .nav-tabs {
    text-align: center;
    width: 85%;
    border-bottom: none;
    margin-left: auto;
    margin-right: auto;
    background: var(--theme-color-primary, var(--primary)) !important;
    z-index: 1
}

#rgu-themes .preview-bg>.body>.content .nav-tabs .rbx-tab {
    width: 33.333333%
}

#rgu-themes .preview-bg>.body>.content .nav-tabs .rbx-tab .rbx-tab-heading {
    color: #bdbebe
}

#rgu-themes .preview-bg>.body>.content .nav-tabs .rbx-tab .rbx-tab-heading .text-lead {
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px
}

#rgu-themes .preview-bg>.body>.content .nav-tabs .rbx-tab.active .text-lead,#rgu-themes .preview-bg>.body>.content .nav-tabs .rbx-tab:hover .text-lead {
    background: var(--theme-color-secondary, var(--background)) !important
}

#rgu-themes .preview-bg>.body>.content .description {
    width: 85%;
    margin-left: auto;
    margin-right: auto;
    margin-top: 10px;
    background: var(--theme-color-primary, var(--primary));
    border-radius: 10px;
    padding: 10px;
    z-index: 1
}

#rgu-themes .preview-bg>.body>.content .description .text-header {
    color: var(--text-color);
    font-weight: 600;
    font-size: 16px;
    line-height: 20px;
    margin-bottom: 10px
}

#rgu-themes .preview-bg>.body>.content .description .text-lead {
    font-family: var(--theme-typography-secondary-fontFamily) !important;
    color: var(--theme-typography-secondary-color, var(--text-secondary)) !important;
    font-size: var(--theme-typography-secondary-fontSize, 14px) !important;
    line-height: var(--theme-typography-secondary-lineHeight, 18px) !important;
    font-variation-settings: "wght" var(--theme-typography-secondary-bold, 400) !important;
    font-weight: var(--theme-typography-secondary-bold, 400) !important;
    text-shadow: var(--theme-typography-secondary-shadowX) var(--theme-typography-secondary-shadowY) var(--theme-typography-secondary-shadowBlur) var(--theme-typography-secondary-shadow);
    text-decoration: var(--theme-typography-secondary-underline);
    font-style: var(--theme-typography-secondary-italic)
}

#rgu-themes .preview-bg>.body>.content .button-danger {
    background: var(--theme-buttons-danger-background, var(--text-danger));
    padding: 3px 10px;
    font-size: 10px;
    font-weight: 600;
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
    text-wrap: nowrap;
    cursor: pointer;
    transition: background-color .3s,box-shadow .3s;
    color: var(--theme-buttons-danger-color, var(--text-color));
    border-radius: var(--theme-buttons-danger-corners, 5px)
}

#rgu-themes .preview-bg>.body>.content .button-danger:hover:not(.disabled),#rgu-themes .preview-bg>.body>.content .button-danger.glow {
    background-color: var(--theme-buttons-danger-background, var(--text-danger));
    box-shadow: var(--theme-buttons-danger-shadowX, 0px) var(--theme-buttons-danger-shadowY, 2px) var(--theme-buttons-danger-shadowBlur, 10px) var(--theme-buttons-danger-shadow, color-mix(in srgb, var(--theme-buttons-danger-background, var(--text-danger)), black 20%))
}

#rgu-themes .preview-bg>.body>.content .button-danger.disabled {
    background: color-mix(in srgb, var(--theme-buttons-danger-background, var(--text-danger)), black 60%)
}

#rgu-themes .preview-bg>.body>.content .button-action {
    background: var(--theme-buttons-action-background, var(--text-action));
    padding: 3px 10px;
    font-size: 10px;
    font-weight: 600;
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
    text-wrap: nowrap;
    cursor: pointer;
    transition: background-color .3s,box-shadow .3s;
    color: var(--theme-buttons-action-color, var(--text-color));
    border-radius: var(--theme-buttons-action-corners, 5px);
    --text-action: var(--text-blue)
}

#rgu-themes .preview-bg>.body>.content .button-action:hover:not(.disabled),#rgu-themes .preview-bg>.body>.content .button-action.glow {
    background-color: var(--theme-buttons-action-background, var(--text-action));
    box-shadow: var(--theme-buttons-action-shadowX, 0px) var(--theme-buttons-action-shadowY, 2px) var(--theme-buttons-action-shadowBlur, 10px) var(--theme-buttons-action-shadow, color-mix(in srgb, var(--theme-buttons-action-background, var(--text-action)), black 20%))
}

#rgu-themes .preview-bg>.body>.content .button-action.disabled {
    background: color-mix(in srgb, var(--theme-buttons-action-background, var(--text-action)), black 60%)
}

#rgu-themes .preview-bg>.body>.content .button-confirm {
    background: var(--theme-buttons-confirm-background, var(--text-confirm));
    padding: 3px 10px;
    font-size: 10px;
    font-weight: 600;
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
    text-wrap: nowrap;
    cursor: pointer;
    transition: background-color .3s,box-shadow .3s;
    color: var(--theme-buttons-confirm-color, var(--text-color));
    border-radius: var(--theme-buttons-confirm-corners, 5px);
    --text-confirm: var(--text-success)
}

#rgu-themes .preview-bg>.body>.content .button-confirm:hover:not(.disabled),#rgu-themes .preview-bg>.body>.content .button-confirm.glow {
    background-color: var(--theme-buttons-confirm-background, var(--text-confirm));
    box-shadow: var(--theme-buttons-confirm-shadowX, 0px) var(--theme-buttons-confirm-shadowY, 2px) var(--theme-buttons-confirm-shadowBlur, 10px) var(--theme-buttons-confirm-shadow, color-mix(in srgb, var(--theme-buttons-confirm-background, var(--text-confirm)), black 20%))
}

#rgu-themes .preview-bg>.body>.content .button-confirm.disabled {
    background: color-mix(in srgb, var(--theme-buttons-confirm-background, var(--text-confirm)), black 60%)
}

#rgu-themes .preview-bg>.body>.content .button {
    background: var(--theme-buttons-default-background, var(--text-default));
    padding: 3px 10px;
    font-size: 10px;
    font-weight: 600;
    border: none;
    display: flex;
    align-items: center;
    justify-content: center;
    text-wrap: nowrap;
    cursor: pointer;
    transition: background-color .3s,box-shadow .3s;
    color: var(--theme-buttons-default-color, var(--text-color));
    border-radius: var(--theme-buttons-default-corners, 5px);
    --text-default: var(--third)
}

#rgu-themes .preview-bg>.body>.content .button:hover:not(.disabled),#rgu-themes .preview-bg>.body>.content .button.glow {
    background-color: var(--theme-buttons-default-background, var(--text-default));
    box-shadow: var(--theme-buttons-default-shadowX, 0px) var(--theme-buttons-default-shadowY, 2px) var(--theme-buttons-default-shadowBlur, 10px) var(--theme-buttons-default-shadow, color-mix(in srgb, var(--theme-buttons-default-background, var(--text-default)), black 20%))
}

#rgu-themes .preview-bg>.body>.content .button.disabled {
    background: color-mix(in srgb, var(--theme-buttons-default-background, var(--text-default)), black 60%)
}

#rgu-themes .preview-bg>.body>.content .button-groups {
    display: grid;
    margin-top: 10px;
    width: 85%;
    margin-left: auto;
    margin-right: auto;
    grid-template-columns: repeat(1, 1fr);
    grid-template-rows: repeat(4, 1fr);
    gap: 10px;
    z-index: 1
}

#rgu-themes .preview-bg>.body>.content .button-groups .group {
    display: flex;
    background: var(--theme-color-primary, var(--primary));
    border-radius: 10px;
    padding: 10px;
    gap: 10px;
    height: 50px
}

@container (min-width: 708px) {
    #rgu-themes .preview-bg>.body>.content .button-groups {
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(2, 1fr)
    }
}

#rgu-themes .preview-bg>.resize-handle {
    border-radius: 8px;
    position: absolute;
    transition: all .3s
}

#rgu-themes .preview-bg>.resize-handle.x {
    width: 5px;
    height: 30px;
    cursor: ew-resize;
    right: -10px;
    top: calc(50% - 15px)
}

#rgu-themes .preview-bg>.resize-handle.y {
    width: 30px;
    height: 5px;
    cursor: ns-resize;
    bottom: -10px;
    left: calc(50% - 15px)
}

#rgu-themes .preview-bg:hover>.resize-handle {
    background-color: hsla(0,0%,100%,.3)
}

.container-main>.content:has(.theme-creator-page) {
    max-width: 100% !important;
    margin: 0 0 !important
}

@media(min-width: 1688px) {
    .container-main>.content:has(.theme-creator-page) {
        max-width:100% !important;
        margin: 0 0 0 200px !important
    }
}
