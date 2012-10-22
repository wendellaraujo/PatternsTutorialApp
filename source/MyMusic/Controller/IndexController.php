<?php

namespace MyMusic\Controller;

class IndexController {
    public function indexAction($services) {

        /** @var $view \MyMusic\View\ViewRenderer */
        $view = $services['viewrenderer'];

        /** @var $playlistRepo \MyMusic\Model\PlaylistRepository */
        $playlistRepo = $services['PlaylistRepository'];
        
        $view->playlists = $playlistRepo->findAll();
        $view->includeScript('index/index.phtml');
    }
}