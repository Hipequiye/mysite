<?php

function nav_item (string $lien, string $titre, string $linkClass = "") : string 
        {
        $class = "nav-item";
        if ($_SERVER["SCRIPT_NAME"] === $lien) {
            $class .= " active";
        }
        return <<<HTML
        <li class="$class">
            <a class="nav-link" href="$lien">$titre</a>
        </li>
HTML;  // <- style de redaction EREDOC condition d'indentation obligatoire fermer collé à la ligne 1
    }


function nav_menu (string $linkClass = "") : string
    {
        return 
        nav_item('/index2.php', 'Accueil', $linkClass) . 
        nav_item('/about.php', 'About', $linkClass) .
        nav_item('/contact.php', 'Contact', $linkClass) .
        nav_item('/news.php', 'News', $linkClass) .
        nav_item('/project.php', 'Project', $linkClass) .
        nav_item('/login.php', 'Login', $linkClass);  
    }
    

function checkbox(string $name, string $value, array $data): string
    {
        $attributes = "";
        if (isset($data[$name]) && in_array($value, $data[$name])) {
        $attributes .= "checked";
        }
        return <<<HTML
        <input type="checkbox" name="{$name}[]" value="$value" $attributes>
HTML; 
    }

function radio (string $name, string $value, array $data): string
    {
        $attributes = "";
        if (isset($data[$name]) && $value === $data[$name]) {
        $attributes .= "checked";
        }
        return <<<HTML
        <input type="radio" name="{$name}[]" value="$value" $attributes>
HTML; 
    }