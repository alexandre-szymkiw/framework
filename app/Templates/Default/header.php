<?php
/**
 * Default Header.
 */

// Generate the Language Changer menu.
$language = Language::code();

$languages = Config::get('languages');

//
ob_start();

foreach ($languages as $code => $info) {
?>

<li <?php if(($language == $code)) echo 'class="active"'; ?>>
    <a href='<?= site_url('language/' .$code); ?>'><?= $info['name']; ?></a>
</li>

<?php
}

$langMenu = ob_get_clean();
?>
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>">
<head>
    <meta charset="utf-8">
    <title><?= $title .' - ' .SITETITLE; ?></title>
<?php
echo $meta; // Place to pass data / plugable hook zone

Assets::css([
    'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css',
    'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css',
    'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css',
    Url::templatePath() .'css/style.css',
]);

echo $css; // Place to pass data / plugable hook zone
?>
</head>
<body style='padding-top: 60px;'>

<nav class="navbar navbar-default navbar-xs navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" style="margin-right: 5px;">
                <?= $langMenu; ?>
            </ul>
        </div>
    </div>
</nav>

<?= $afterBody; // Place to pass data / plugable hook zone ?>

<div class="container">

<p><img src='<?= Url::templatePath(); ?>images/nova.png' alt='<?= SITETITLE; ?>'></p>
