<?php 
class StringMutator {
    public static function bols(?string $word){
        return sprintf('<b>%s<b>', $word);
    }
}