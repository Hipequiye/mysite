<?php 

//verif l'exitance du menu de navigation (topbar) ; si non creation par FX nav_item dans functions.php
//chaque element = valeur item detaillée par FX nav-menu dans functions.php
if (!function_exists ("nav_item")) {

    function nav_item (string $lien, string $titre, string $linkClass = "") : string 
    {
        $class = "nav-item";
        if ($_SERVER["SCRIPT_NAME"] === $lien) {
            $class .= " active";
        }
        return <<<HTML
        <li class="$class">
            <a class="linkClass" href="$lien">$titre</a>
        </li>
HTML;  // <- style de redaction EREDOC condition d'indentation obligatoire fermer collé à la ligne 1
    }
}
?>

<?= nav_item('/index2.php', 'Home', $class); ?>
<?= nav_item('/contact.php', 'Contact', $class); ?>

<!-- Au final :
home = index2.php
about = acceuil.php
contact = contact.php
news = news.php
fighters = form_character.php
Login = login.php -->