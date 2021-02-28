<?php

/**
 * The configuration of SimpleSAMLphp
 */

$config = [

    // ...

    /***********
     | MODULES |
     ***********/

    /*
     * Configuration for enabling/disabling modules. By default the 'core' and 'saml' modules are enabled.
     *
     * Example:
     *
     * 'module.enable' => [
     *      'exampleauth' => true, // Setting to TRUE enables.
     *      'consent' => false, // Setting to FALSE disables.
     *      'core' => null, // Unset or NULL uses default.
     * ],
     */

     'module.enable' => [
         'exampleauth' => false,
         'core' => true,
         'saml' => true,
         'sqlauth' => true // Add sqlauth to your config file
     ],

    // ...
];
