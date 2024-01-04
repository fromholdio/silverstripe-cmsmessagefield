<?php

namespace Fromholdio\CMSMessageField\Forms;

use SilverStripe\Forms\LiteralField;
use SilverStripe\ORM\FieldType\DBHTMLText;

class CMSMessageField extends LiteralField
{
    public function __construct(string $name, string|DBHTMLText|null $content, string $type = 'notice')
    {
        $content = '<div class="message '.$type.'" id="'.$name.'">' . $content . '</div>';
        parent::__construct($name, $content);
    }
}
