<?php


class Breadcrumbs extends Widget
{
    public static function widget($values){
        self::$items = $values;
        self::getView(__CLASS__);
    }
}