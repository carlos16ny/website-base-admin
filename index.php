<?php
   /**Fazer o autoload das configurações e load das informações */
   require_once 'vendor/autoload.php';
   require_once 'load.php';

   /**
    * Incluir áreas do site aqui
    * Áreas em comum [header, footer] para a maioria dos sites
    */

    /** include template site [header] */
   include_once 'src/template/header.php';

   /**
    * Incluir as sections do site
    */
   include_once 'src/sections/sec1.php';
   include_once 'src/sections/sec2.php';
   include_once 'src/sections/sec3.php';

    /** include template site [footer] */
   include_once 'src/template/footer.php';



?>