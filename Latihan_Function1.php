<?php
// Persegi panjang
function hitunglahLuasPersegiPanjang($P, $L){
    $luaspp = $P * $L;
    return $luaspp;
}
function hitunglahKelilingPersegiPanjang($P, $L){
    $kelpp = 2* ($P+ $L) ; 
    return $kelpp;
}

// Persegi
function hitunglahLuasPersegi ($s){
    $luasp = $s * $s;
    return $luasp;
}

function hitunglahKelilingPersegi ($s){
    $kelp = 4* $s ;
    return $kelp;
}

?>