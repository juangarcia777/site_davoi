<?php
final class StaticFactory{
    public static function make($type){
        if($type == 'select') {
            return new Select();
        }
        if($type == 'insert') {
            return new Insert();
        }
        if($type == 'update') {
            return new Update();
        }
        if($type == 'delete') {
            return new Delete();
        }
    }
}

class Select {
    
    public function get()
}


