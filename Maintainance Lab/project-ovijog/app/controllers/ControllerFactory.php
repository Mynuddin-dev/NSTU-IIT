<?php


/**
 * Controller factory class.
 */
class ControllerFactory {

    /**
     * factory method for controllers
     *
     * @param $controllerName: controller name
     * @return AdminsController|ErrorsController|PagesController|PostsController|UsersController
     */
    public static function getInstance($controllerName){
        if(strtolower($controllerName)=="pages"){
            return new PagesController();
        }elseif (strtolower($controllerName)=="posts"){
            return new PostsController();
        }elseif (strtolower($controllerName)=="users"){
            return new UsersController();
        }elseif (strtolower($controllerName)=="errors"){
            return new ErrorsController();
        }elseif (strtolower($controllerName)=="admins"){
            return new AdminsController();
        }else{
            //default if not match any
            return new ErrorsController();
        }
    }

}