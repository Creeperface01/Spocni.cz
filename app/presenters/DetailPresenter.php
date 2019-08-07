<?php
/**
 * @author CreeperFace
 */

namespace App\Presenters;


class DetailPresenter extends BasePresenter {

    const SPOCIVARNY = [
        "Havířov" => [
            "coords" => [
                18.4383733,
                49.7797486
            ],
            "info" => [
                "Spočívárna v havířově je vyjímečná především svým umístěním a dojmem, který na vás udělá její vybavení"
            ]
        ]
    ];

    public function renderDefault($city) {
        $this->template->pageTitle = "Spočívarna " . $city;

        if(isset(self::SPOCIVARNY[$city])) {
            $this->template->cityData = self::SPOCIVARNY[$city];
        }
    }

}