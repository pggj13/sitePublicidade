<?php

class is_validaCache {

    public function is_valido($cache) {

        $ultimaCache = filemtime($cache);
        $c = time() - $ultimaCache;

        if ($c > 10) {

            return FALSE;
        } else {
            return TRUE;
        }
    }

}
