<?php

namespace app\models\bio\component\organelle;

use app\models\bio\component\BioComponent;

/**
 * ContactForm is the model behind the contact form.
 */
abstract class Organelle extends BioComponent
{
    public $name;

    /** */
    function __construct()
    {
        // print "En el constructor\n";
        // parent::__construct();
    }

    function __destruct()
    {
        // print "Destruyendo " . $this->name . "\n";
        // parent::__destruct();
    }
}
