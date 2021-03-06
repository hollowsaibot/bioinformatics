<?php

namespace app\models\bio\biomolecule\base;

use stdClass;
use Yii;

/**
 * ContactForm is the model behind the contact form.
 */
final class Uracil extends BioBase
{
    const symbol = "U";

    /** */
    function __construct()
    {
        parent::__construct();
    }

    /* getters & setters */

    /** */
    public function getSymbol() {
        return self::symbol;
    }
}
