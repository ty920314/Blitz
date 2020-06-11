<?php
if (! function_exists('BparseUrl')) {

    function BparseUrl(){
        $vca = explode(DIRECTORY_SEPARATOR,$_SERVER['REQUEST_URI']);
        return [
            'v'=>empty($vca[1])?'index':$vca[1],
            'c'=>empty($vca[2])?'index':$vca[2],
            'a'=>empty($vca[3])?'index':$vca[3],
        ];
        
    }
}

