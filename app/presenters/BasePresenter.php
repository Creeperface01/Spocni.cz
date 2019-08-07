<?php

namespace App\Presenters;

use Nette;


/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter {

    protected function beforeRender() {
        $this->template->places = [
            [
                "name" => "Ostrava"
            ],[
                "name" => "Opava"
            ],[
                "name" => "Olomouc"
            ],[
                "name" => "Havířov"
            ],[
                "name" => "Pardubice"
            ],[
                "name" => "Praha Černý Most"
            ]
        ];
    }
}
