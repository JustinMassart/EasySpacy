<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php is_front_page() ? bloginfo('description') : wp_title('Easy Spacy •'); ?></title>
    <!-- Assets -->
    <link rel="stylesheet" href="<?= easyspacy_asset('css/theme.css'); ?>">
    <script src="<?= easyspacy_asset('js/app.js'); ?>"></script>
    <!-- WordPress -->
    <?php wp_head(); ?>
</head>
<body>
<header class="top">
    <h1 class="top__title sro"><?= is_front_page() ? 'Accueil' : trim(wp_title('', false)); ?></h1>
</header>