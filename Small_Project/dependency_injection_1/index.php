<?php

require_once "player.php";

class Index{
    public function __construct(){
        $player = new Player();
        $player->setMusicPath("C:/user/cho/document/music/");
        $player->setMusic("ArrBwarr.mp3");

        $this->playNow($player->getMusicPath(), $player->getMusic());

    }

    public function playNow($path, $music){
        echo "Playing " . $music . " from " . $path . ".";
    }
}
new Index();