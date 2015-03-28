<?php
    define('PERCH_LICENSE_KEY', 'P21503-RHJ599-TNU057-YDS950-KFC027');

    define("PERCH_DB_USERNAME", 'artdaily_admin');
    define("PERCH_DB_PASSWORD", 'jackson1');
    define("PERCH_DB_SERVER", "localhost");
    define("PERCH_DB_DATABASE", "bondi");
    define("PERCH_DB_PREFIX", "perch2_");
    
    define('PERCH_TZ', 'UTC');

    define('PERCH_EMAIL_FROM', 'jacksonalsop@me.com');
    define('PERCH_EMAIL_FROM_NAME', 'Jackson Alsop');

    define('PERCH_LOGINPATH', '/bondi/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
