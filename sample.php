<?php

require_once 'vendor/autoload.php';

/*
 * Linio Client: uses chain of responsibility pattern
 */
$linioClient = new \Linio\Client();
$linioClient->getResult()->toPrintConsole();

/*
 * Linio Lookup: uses recursion and lookup table
 */
$linioLookup = new \Linio\Lookup();
$linioLookup->getResult()->toPrintConsole();

/*
 * The method getResult():
 *
 * getResult()->toJson() : strings
 * getResult()->toArray() : array
 * getResult()->toPrintConsole() : void
 * getResult()->toPrintHtml() : void
 */