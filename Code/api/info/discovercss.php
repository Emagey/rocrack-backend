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
@media(max-width: 1850px) {
    #discover-top:has(.friend-activity .activity-list .activity-item) {
        justify-content:center !important
    }

    #discover-top:has(.friend-activity .activity-list .activity-item) .most-played {
        display: none !important
    }
}

@media(max-width: 1200px) {
    #discover-top {
        display:none !important
    }
}

#discover-top:not(:has(.friend-activity .activity-list .activity-item)) {
    justify-content: center !important
}

#discover-top:not(:has(.friend-activity .activity-list .activity-item)) .friend-activity {
    display: none !important
}

.games-list-header {
    border-bottom: 1px solid hsla(0,0%,100%,.1);
    padding-bottom: 15px
}

.games-list-header+.grid-item-container {
    display: none
}

.games-list-header>h1 {
    font-weight: 600;
    font-size: 22px;
    line-height: 27px
}

.filters-container {
    display: none !important
}

#discover-top {
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 0 10px;
    display: flex;
    flex-direction: row
}

#discover-top .loading {
    position: absolute;
    left: 50%;
    margin-top: 70px
}

#discover-top .featured-games {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: fit-content
}

#discover-top .featured-games .featured-title {
    display: block;
    align-self: baseline;
    font-family: var(--theme-typography-secondary-fontFamily) !important;
    color: var(--theme-typography-secondary-color, var(--text-secondary)) !important;
    font-size: var(--theme-typography-secondary-fontSize, 18px) !important;
    line-height: var(--theme-typography-secondary-lineHeight, 22px) !important;
    font-variation-settings: "wght" var(--theme-typography-secondary-bold, 600) !important;
    font-weight: var(--theme-typography-secondary-bold, 600) !important;
    text-shadow: var(--theme-typography-secondary-shadowX) var(--theme-typography-secondary-shadowY) var(--theme-typography-secondary-shadowBlur) var(--theme-typography-secondary-shadow);
    text-decoration: var(--theme-typography-secondary-underline);
    font-style: var(--theme-typography-secondary-italic)
}

#discover-top .featured-games .refresh-counter {
    margin-right: 15px;
    display: flex;
    align-items: center;
    align-self: flex-end;
    position: absolute;
    font-family: var(--theme-typography-secondary-fontFamily) !important;
    color: var(--theme-typography-secondary-color, var(--text-secondary)) !important;
    font-size: var(--theme-typography-secondary-fontSize, 14px) !important;
    line-height: var(--theme-typography-secondary-lineHeight, 17px) !important;
    font-variation-settings: "wght" var(--theme-typography-secondary-bold, 600) !important;
    font-weight: var(--theme-typography-secondary-bold, 600) !important;
    text-shadow: var(--theme-typography-secondary-shadowX) var(--theme-typography-secondary-shadowY) var(--theme-typography-secondary-shadowBlur) var(--theme-typography-secondary-shadow);
    text-decoration: var(--theme-typography-secondary-underline);
    font-style: var(--theme-typography-secondary-italic)
}

#discover-top .featured-games .refresh-counter>.icon-refresh {
    margin-right: 10px
}

#discover-top .featured-games .refresh-counter .counter-time {
    color: var(--text-danger) !important;
    margin-left: 5px
}

#discover-top .featured-games .featured-games-info {
    display: flex;
    align-items: flex-end
}

#discover-top .featured-games .featured-games-info .game-banner {
    width: 768px;
    height: 380px;
    margin: 15px;
    display: flex;
    align-items: flex-end
}

#discover-top .featured-games .featured-games-info .game-banner .game-banner-img {
    width: 768px;
    height: 380px;
    position: absolute;
    border-radius: 15px;
    display: flex;
    justify-content: center;
    align-items: center
}

@keyframes fade-in {
    0% {
        opacity: 0
    }

    100% {
        opacity: 1
    }
}

@keyframes fade-out {
    0% {
        opacity: 1
    }

    100% {
        opacity: 0
    }
}

#discover-top .featured-games .featured-games-info .game-banner .game-banner-img>img {
    width: 768px;
    height: 380px;
    border-radius: 15px;
    object-fit: cover
}

#discover-top .featured-games .featured-games-info .game-banner .game-banner-img>img.in {
    animation: fade-in .2s ease-in-out
}

#discover-top .featured-games .featured-games-info .game-banner .game-banner-img>img.out {
    animation: fade-out .2s ease-in-out
}

#discover-top .featured-games .featured-games-info .game-banner .game-banner-info {
    background-color: var(--theme-color-primary, var(--primary));
    width: 100%;
    border-radius: 0 0 13px 13px;
    height: 90px;
    z-index: 2;
    display: flex;
    flex-direction: row;
    justify-content: space-between
}

#discover-top .featured-games .featured-games-info .game-banner .game-banner-info .game-banner-left {
    display: flex;
    flex-direction: column
}

#discover-top .featured-games .featured-games-info .game-banner .game-banner-info .game-banner-left>.title {
    font-size: 28px;
    font-weight: 600;
    line-height: 34px;
    padding: 13px 11px 0;
    max-width: 630px;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap
}

#discover-top .featured-games .featured-games-info .game-banner .game-banner-info .game-banner-left>.genre {
    font-family: var(--theme-typography-secondary-fontFamily) !important;
    color: var(--theme-typography-secondary-color, var(--text-secondary)) !important;
    font-size: var(--theme-typography-secondary-fontSize, 18px) !important;
    line-height: var(--theme-typography-secondary-lineHeight, 22px) !important;
    font-variation-settings: "wght" var(--theme-typography-secondary-bold, 500) !important;
    font-weight: var(--theme-typography-secondary-bold, 500) !important;
    text-shadow: var(--theme-typography-secondary-shadowX) var(--theme-typography-secondary-shadowY) var(--theme-typography-secondary-shadowBlur) var(--theme-typography-secondary-shadow);
    text-decoration: var(--theme-typography-secondary-underline);
    font-style: var(--theme-typography-secondary-italic);
    padding: 5px 11px 0
}

#discover-top .featured-games .featured-games-info .game-banner .game-banner-info .game-banner-stat-list {
    width: fit-content;
    height: 60px;
    margin-top: 10px;
    margin-right: 5px;
    padding: 5px
}

#discover-top .featured-games .featured-games-info .game-banner .game-banner-info .game-banner-stat-list .game-banner-stat {
    font-size: 10px;
    font-weight: 500;
    line-height: 12px;
    margin-bottom: 10px;
    display: flex;
    align-items: center
}

#discover-top .featured-games .featured-games-info .game-banner .game-banner-info .game-banner-stat-list .game-banner-stat>.icon {
    margin-right: 5px
}

#discover-top .friend-activity {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: fit-content;
    margin-left: 30px
}

#discover-top .friend-activity>.activity-title {
    display: block;
    align-self: baseline;
    margin-bottom: 10px;
    font-family: var(--theme-typography-secondary-fontFamily) !important;
    color: var(--theme-typography-secondary-color, var(--text-secondary)) !important;
    font-size: var(--theme-typography-secondary-fontSize, 18px) !important;
    line-height: var(--theme-typography-secondary-lineHeight, 22px) !important;
    font-variation-settings: "wght" var(--theme-typography-secondary-bold, 600) !important;
    font-weight: var(--theme-typography-secondary-bold, 600) !important;
    text-shadow: var(--theme-typography-secondary-shadowX) var(--theme-typography-secondary-shadowY) var(--theme-typography-secondary-shadowBlur) var(--theme-typography-secondary-shadow);
    text-decoration: var(--theme-typography-secondary-underline);
    font-style: var(--theme-typography-secondary-italic)
}

#discover-top .friend-activity>.no-activity {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center
}

#discover-top .friend-activity>.no-activity .no-activity-text {
    font-family: var(--theme-typography-secondary-fontFamily) !important;
    color: var(--theme-typography-secondary-color, var(--text-secondary)) !important;
    font-size: var(--theme-typography-secondary-fontSize, 14px) !important;
    line-height: var(--theme-typography-secondary-lineHeight, 17px) !important;
    font-variation-settings: "wght" var(--theme-typography-secondary-bold, 500) !important;
    font-weight: var(--theme-typography-secondary-bold, 500) !important;
    text-shadow: var(--theme-typography-secondary-shadowX) var(--theme-typography-secondary-shadowY) var(--theme-typography-secondary-shadowBlur) var(--theme-typography-secondary-shadow);
    text-decoration: var(--theme-typography-secondary-underline);
    font-style: var(--theme-typography-secondary-italic)
}

#discover-top .friend-activity>.activity-list {
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin: 5px 10px;
    border-radius: 10px;
    width: 370px;
    max-height: 385px;
    height: 385px;
    overflow-y: scroll
}

#discover-top .friend-activity>.activity-list::-webkit-scrollbar {
    display: none
}

#discover-top .friend-activity>.activity-list>.activity-item {
    background: var(--theme-color-primary, var(--primary));
    border-radius: 10px;
    width: 370px;
    height: 50px;
    min-height: 50px;
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 5px
}

#discover-top .friend-activity>.activity-list>.activity-item .activity-user-image {
    width: 42px;
    height: 42px;
    border-radius: 7px
}

#discover-top .friend-activity>.activity-list>.activity-item .activity-user-image:not(img) {
    margin-left: 4px
}

#discover-top .friend-activity>.activity-list>.activity-item>.activity-info {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    gap: 2px
}

#discover-top .friend-activity>.activity-list>.activity-item>.activity-info>.activity-game {
    font-size: 12px;
    font-weight: 500;
    line-height: 15px;
    display: flex;
    max-width: 210px
}

#discover-top .friend-activity>.activity-list>.activity-item>.activity-info>.activity-game .activity-game-name {
    text-overflow: ellipsis;
    white-space-collapse: collapse;
    text-wrap: nowrap;
    overflow: hidden
}

#discover-top .friend-activity>.activity-list>.activity-item>.activity-info>.activity-game>.sep {
    width: 4px;
    height: 4px;
    border-radius: 50%;
    background-color: hsla(0,0%,100%,.1);
    margin: 0 10px;
    margin-top: 6px
}

#discover-top .friend-activity>.activity-list>.activity-item>.activity-info>.activity-game>.activity-indicator {
    color: var(--text-success)
}

#discover-top .friend-activity>.activity-list>.activity-item>.activity-info>.activity-game>.activity-indicator.working {
    color: var(--text-warm)
}

#discover-top .friend-activity>.activity-list>.activity-item>.activity-info>.activity-user-name {
    font-family: var(--theme-typography-secondary-fontFamily) !important;
    color: var(--theme-typography-secondary-color, var(--text-secondary)) !important;
    font-size: var(--theme-typography-secondary-fontSize, 12px) !important;
    line-height: var(--theme-typography-secondary-lineHeight, 15px) !important;
    font-variation-settings: "wght" var(--theme-typography-secondary-bold, 600) !important;
    font-weight: var(--theme-typography-secondary-bold, 600) !important;
    text-shadow: var(--theme-typography-secondary-shadowX) var(--theme-typography-secondary-shadowY) var(--theme-typography-secondary-shadowBlur) var(--theme-typography-secondary-shadow);
    text-decoration: var(--theme-typography-secondary-underline);
    font-style: var(--theme-typography-secondary-italic)
}

#discover-top .friend-activity>.activity-list>.activity-item>.quick-play {
    margin-left: auto;
    margin-right: 8px;
    height: 34px;
    width: 34px;
    margin-top: 0px;
    border-radius: 7px;
    cursor: pointer
}

#discover-top .friend-activity>.activity-list>.activity-item>.quick-play>.quick-play-icon {
    background-size: 12px 12px !important;
    width: 12px !important;
    height: 12px !important
}

#discover-top .friend-activity>.activity-list>.activity-item>.visit-profile {
    background-color: var(--text-blue) !important
}

#discover-top .most-played {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: fit-content;
    margin-left: 30px
}

#discover-top .most-played>.activity-title {
    display: block;
    align-self: baseline;
    margin-bottom: 10px;
    font-family: var(--theme-typography-secondary-fontFamily) !important;
    color: var(--theme-typography-secondary-color, var(--text-secondary)) !important;
    font-size: var(--theme-typography-secondary-fontSize, 18px) !important;
    line-height: var(--theme-typography-secondary-lineHeight, 22px) !important;
    font-variation-settings: "wght" var(--theme-typography-secondary-bold, 600) !important;
    font-weight: var(--theme-typography-secondary-bold, 600) !important;
    text-shadow: var(--theme-typography-secondary-shadowX) var(--theme-typography-secondary-shadowY) var(--theme-typography-secondary-shadowBlur) var(--theme-typography-secondary-shadow);
    text-decoration: var(--theme-typography-secondary-underline);
    font-style: var(--theme-typography-secondary-italic)
}

#discover-top .most-played>.no-activity {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center
}

#discover-top .most-played>.no-activity .no-activity-text {
    font-family: var(--theme-typography-secondary-fontFamily) !important;
    color: var(--theme-typography-secondary-color, var(--text-secondary)) !important;
    font-size: var(--theme-typography-secondary-fontSize, 14px) !important;
    line-height: var(--theme-typography-secondary-lineHeight, 17px) !important;
    font-variation-settings: "wght" var(--theme-typography-secondary-bold, 500) !important;
    font-weight: var(--theme-typography-secondary-bold, 500) !important;
    text-shadow: var(--theme-typography-secondary-shadowX) var(--theme-typography-secondary-shadowY) var(--theme-typography-secondary-shadowBlur) var(--theme-typography-secondary-shadow);
    text-decoration: var(--theme-typography-secondary-underline);
    font-style: var(--theme-typography-secondary-italic)
}

#discover-top .most-played>.activity-list {
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin: 5px 10px;
    border-radius: 10px;
    width: 370px;
    max-height: 385px;
    height: 385px;
    overflow-y: hidden;
    position: relative
}

#discover-top .most-played>.activity-list::-webkit-scrollbar {
    display: none
}

#discover-top .most-played>.activity-list>.activity-item {
    background: var(--theme-color-primary, var(--primary));
    border-radius: 10px;
    width: 370px;
    height: 130px;
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 5px
}

#discover-top .most-played>.activity-list>.activity-item .activity-game-image-holder {
    width: 90px;
    height: 90px;
    margin: 5px
}

#discover-top .most-played>.activity-list>.activity-item .activity-game-image-holder .activity-game-image {
    width: 90px;
    height: 90px;
    border-radius: 7px
}

#discover-top .most-played>.activity-list>.activity-item>.activity-info {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    gap: 2px
}

#discover-top .most-played>.activity-list>.activity-item>.activity-info .activity-game-name {
    text-overflow: ellipsis;
    white-space-collapse: collapse;
    text-wrap: nowrap;
    overflow: hidden;
    max-width: 140px;
    font-size: 16px;
    font-weight: 600;
    line-height: 15px;
    border-bottom: 1px solid hsla(0,0%,100%,.1);
    padding-bottom: 5px;
    margin-bottom: 2px
}

#discover-top .most-played>.activity-list>.activity-item>.activity-info .activity-stats {
    display: flex;
    flex-direction: column;
    gap: 2px
}

#discover-top .most-played>.activity-list>.activity-item>.activity-info .activity-stats .activity-stat {
    display: flex;
    flex-direction: row
}

#discover-top .most-played>.activity-list>.activity-item>.activity-info .activity-stats .activity-stat .sep {
    width: 1px;
    border-radius: 5px;
    background: hsla(0,0%,100%,.1);
    height: 12px;
    margin-left: 5px
}

#discover-top .most-played>.activity-list>.activity-item>.activity-info .activity-stats .activity-stat .activity-stat-text {
    color: var(--theme-typography-primary-color, var(--text-color));
    font-size: 12px;
    font-weight: 500;
    line-height: 15px;
    margin-left: 5px
}

#discover-top .most-played>.activity-list>.activity-item>.quick-play {
    height: 30px;
    width: 84px;
    border-radius: 7px;
    position: absolute;
    right: 7px;
    margin-top: 55px;
    cursor: pointer
}

#discover-top .most-played>.activity-list>.activity-item>.quick-play>.quick-play-icon {
    background-size: 12px 12px !important;
    width: 12px !important;
    height: 12px !important
}

.games-navigate {
    position: absolute;
    width: 40px;
    height: 100px;
    background-color: var(--theme-color-primary, var(--primary));
    border-radius: 8px;
    margin-top: 135px;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: all .1s ease-in-out;
    z-index: 2;
    cursor: pointer
}

.games-navigate.navigate-left {
    margin-left: -5px
}

.games-navigate.navigate-right {
    transform: rotate(180deg);
    margin-left: 765px
}

.games-navigate:hover {
    background-color: #2176ff;
    box-shadow: 0px 2px 10px rgba(76,132,255,.5);
    scale: 1.05
}

.games-navigate:active {
    scale: 1.1
}

#discover-categories>.sep {
    width: 100%;
    height: 1px;
    background: hsla(0,0%,100%,.1);
    margin-left: 20px;
    margin-bottom: 20px
}

#discover-categories .category-title {
    display: block;
    align-self: baseline;
    font-family: var(--theme-typography-secondary-fontFamily) !important;
    color: var(--theme-typography-secondary-color, var(--text-secondary)) !important;
    font-size: var(--theme-typography-secondary-fontSize, 18px) !important;
    line-height: var(--theme-typography-secondary-lineHeight, 22px) !important;
    font-variation-settings: "wght" var(--theme-typography-secondary-bold, 600) !important;
    font-weight: var(--theme-typography-secondary-bold, 600) !important;
    text-shadow: var(--theme-typography-secondary-shadowX) var(--theme-typography-secondary-shadowY) var(--theme-typography-secondary-shadowBlur) var(--theme-typography-secondary-shadow);
    text-decoration: var(--theme-typography-secondary-underline);
    font-style: var(--theme-typography-secondary-italic)
}

#discover-categories .games-navigate.navigate-left {
    margin-top: 60px;
    margin-left: -10px
}

#discover-categories .games-navigate.navigate-right {
    right: 0;
    margin-right: initial;
    margin-top: 60px
}

#discover-categories>.section {
    width: 100%;
    height: 232px;
    padding-left: 20px;
    margin-bottom: 30px;
    position: relative
}

#discover-categories>.section>.loading {
    position: absolute;
    left: 50%;
    margin-top: 70px
}

#discover-categories>.section>.game-list {
    border-radius: 10px;
    padding: 0;
    margin-top: 10px;
    margin-left: 10px;
    display: flex;
    flex-direction: row;
    gap: 10px;
    overflow-x: hidden;
    width: calc(100% - 30px);
    scroll-behavior: smooth
}

#discover-categories>.section>.game-list>.game-entry {
    display: block;
    position: relative
}

#discover-categories>.section>.game-list>.game-entry:hover>.game-icon-holder {
    filter: brightness(0.8)
}

#discover-categories>.section>.game-list>.game-entry:hover>.game-icon-holder .game-icon {
    transform: scale(1.05)
}

#discover-categories>.section>.game-list>.game-entry:hover>.game-details {
    opacity: 1
}

#discover-categories>.section>.game-list>.game-entry:hover>.game-basic-info {
    background: rgba(0,0,0,.8)
}

#discover-categories>.section>.game-list>.game-entry:hover>.game-icon-small {
    opacity: 0
}

#discover-categories>.section>.game-list>.game-entry .game-details {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 10px;
    display: flex;
    flex-direction: column;
    padding: 10px;
    opacity: 0;
    transition: opacity .1s ease-in-out
}

#discover-categories>.section>.game-list>.game-entry .game-details .game-players {
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 5px;
    font-size: 12px;
    font-weight: 600;
    line-height: 15px;
    filter: drop-shadow(2px 4px 6px black)
}

#discover-categories>.section>.game-list>.game-entry .game-details .game-ratio {
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 5px;
    font-size: 12px;
    font-weight: 600;
    line-height: 15px;
    filter: drop-shadow(2px 4px 6px black)
}

#discover-categories>.section>.game-list>.game-entry .game-details .play-btn {
    width: 180px;
    height: 40px;
    border-radius: 10px;
    right: 60px;
    bottom: 55px;
    position: absolute;
    background: var(--text-success);
    display: flex;
    justify-content: flex-end;
    align-items: center;
    filter: drop-shadow(2px 4px 6px black);
    transition: scale .1s ease-in-out
}

#discover-categories>.section>.game-list>.game-entry .game-details .play-btn:hover {
    scale: 1.05
}

#discover-categories>.section>.game-list>.game-entry .game-details .play-btn .play-btn-text {
    margin-right: auto;
    margin-left: 70px;
    color: var(--theme-typography-primary-color, var(--text-color));
    font-size: 17px;
    font-weight: 600
}

#discover-categories>.section>.game-list>.game-entry .game-basic-info {
    position: absolute;
    bottom: 0;
    background: hsla(0,0%,100%,.2);
    backdrop-filter: blur(25px);
    border-radius: 0 0 10px 10px;
    padding: 3px 0;
    display: flex;
    flex-direction: column;
    transition: background .1s ease-in-out
}

#discover-categories>.section>.game-list>.game-entry .game-basic-info>.game-name {
    color: var(--theme-typography-primary-color, var(--text-color));
    font-size: 14px;
    font-weight: 600;
    line-height: 12px;
    margin-left: 5px;
    height: 18px;
    text-overflow: ellipsis;
    white-space-collapse: collapse;
    text-wrap: nowrap;
    overflow: hidden;
    padding-top: 5px
}

#discover-categories>.section>.game-list>.game-entry .game-basic-info>.game-genre {
    margin-left: 5px;
    font-size: 10px;
    font-weight: 500
}

#discover-categories>.recommended {
    height: 222px
}

#discover-categories>.recommended .game-entry,#discover-categories>.recommended .game-list {
    min-height: 200px
}

#discover-categories>.recommended .game-icon-holder {
    transition: all .1s ease-in-out;
    width: 200px;
    height: 200px;
    border-radius: 10px;
    overflow: hidden;
    display: block
}

#discover-categories>.recommended .game-icon {
    transition: all .1s ease-in-out;
    width: 200px;
    height: 200px;
    border-radius: 10px
}

#discover-categories>.recommended .game-basic-info {
    width: 200px
}

#discover-categories>.recommended .game-basic-info .game-name {
    max-width: 190px
}

#discover-categories>.recommended .games-navigate {
    margin-top: 60px
}

#discover-categories>.recommended .play-btn {
    width: 80px !important;
    height: 40px !important;
    right: 60px !important;
    bottom: 55px !important
}

#discover-categories>.game-sort {
    height: 232px;
    display: flex;
    flex-direction: column
}

#discover-categories>.game-sort .game-entry,#discover-categories>.game-sort .game-list {
    min-height: 210px
}

#discover-categories>.game-sort .game-icon-holder {
    transition: all .1s ease-in-out;
    width: 300px;
    height: 210px;
    border-radius: 10px;
    overflow: hidden;
    display: block
}

#discover-categories>.game-sort .game-icon {
    transition: all .1s ease-in-out;
    width: 390px;
    height: 210px;
    border-radius: 10px;
    margin-left: -45px;
    margin-top: 0px
}

#discover-categories>.game-sort .game-basic-info {
    width: 300px
}

#discover-categories>.game-sort .game-basic-info .game-name {
    max-width: 190px
}

#discover-categories>.game-sort .games-navigate {
    margin-top: 65px
}

#discover-categories>.game-sort .view-more {
    font-family: var(--theme-typography-secondary-fontFamily) !important;
    color: var(--theme-typography-secondary-color, var(--text-secondary)) !important;
    font-size: var(--theme-typography-secondary-fontSize, 14px) !important;
    line-height: var(--theme-typography-secondary-lineHeight, 22px) !important;
    font-variation-settings: "wght" var(--theme-typography-secondary-bold, 600) !important;
    font-weight: var(--theme-typography-secondary-bold, 600) !important;
    text-shadow: var(--theme-typography-secondary-shadowX) var(--theme-typography-secondary-shadowY) var(--theme-typography-secondary-shadowBlur) var(--theme-typography-secondary-shadow);
    text-decoration: var(--theme-typography-secondary-underline);
    font-style: var(--theme-typography-secondary-italic);
    margin-right: 15px;
    display: flex;
    align-items: center;
    align-self: flex-end;
    position: absolute
}

#discover-categories>.game-sort .game-icon-small {
    width: 90px;
    height: 90px;
    right: 0;
    position: absolute;
    bottom: 0;
    background: var(--theme-color-primary, var(--primary));
    border-radius: 10px;
    margin: 0 10px 10px 0;
    z-index: 1;
    transition: opacity .1s ease-in-out
}

#discover-categories>.game-sort .game-icon-small .game-icon-small-image {
    width: 90px;
    height: 90px;
    border-radius: 10px;
    padding: 2px;
    box-shadow: #000 0px 0px 6px
}
