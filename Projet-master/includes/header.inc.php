<?php

$scriptName = filter_input(INPUT_SERVER, "SCRIPT_NAME");
            $pageActuelle = substr($scriptName, strrpos($scriptName, "/") + 1);
            if ($pageActuelle === "index.php") {
                $dirIndex = "./";
                $dirPages = "./pages/";
            } else {
                $dirIndex = "../";
                $dirPages = "./";
            }
            
