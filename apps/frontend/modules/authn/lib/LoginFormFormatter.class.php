<?php

class LoginFormFormatter extends sfWidgetFormSchemaFormatter
{
  protected
    $rowFormat                 = "<div>%label%%field%%error%</div>\n%hidden_fields%",
    $helpFormat                = '%help%',
    $errorRowFormat            = '%errors%',
    $errorListFormatInARow     = "<dl class=\"error_list\">\n%errors%</dl>\n",
    $errorRowFormatInARow      = "<dd>%error%</dd>\n",
    $namedErrorRowFormatInARow = "<dd>%name%: %error%</dd>\n",
    $decoratorFormat           = '',
    $widgetSchema              = null,
    $translationCatalogue      = null;
}
