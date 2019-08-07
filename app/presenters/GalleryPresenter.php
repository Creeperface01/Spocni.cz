<?php
/**
 * @author CreeperFace
 */

namespace App\Presenters;

use Nette\Utils\Finder;
use Tracy\Debugger;

class GalleryPresenter extends BasePresenter {

    public function renderDefault() {
        Debugger::barDump(getcwd());

        foreach (Finder::findFiles("*.jpg")->from("galerie") as $key => $file) {
            /** @var \SplFileInfo $file */

            Debugger::barDump("image");
            $images[] = $file->getFilename();
        }

        if(isset($images)) {
            $this->template->images = $images;
        }
    }
}