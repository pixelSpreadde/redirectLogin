<?php

ClassLoader::addNamespaces(array
(
    'Contao'
));

ClassLoader::addClasses(array
(
    'Contao\ModuleRedirectLogin'       => 'system/modules/redirectLogin/modules/ModuleRedirectLogin.php',
));

TemplateLoader::addFiles(array
(
    'mod_redirectlogin_1cl'       => 'system/modules/redirectLogin/templates/modules',
    'mod_redirectlogin_2cl'       => 'system/modules/redirectLogin/templates/modules',
));
