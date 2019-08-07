<?php
/**
 * @author CreeperFace
 */

namespace App\Presenters;


class ContactPresenter extends BasePresenter {

    public function renderDefault() {
        $this->template->pageTitle = "Kontakt";
    }
}