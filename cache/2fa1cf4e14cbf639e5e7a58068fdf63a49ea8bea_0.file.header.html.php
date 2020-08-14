<?php
/* Smarty version 3.1.30, created on 2020-07-27 13:42:23
  from "/opt/lampp/htdocs/projetBanqueSamane/public/web/header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f1ebd9fea8ff0_38698816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fa1cf4e14cbf639e5e7a58068fdf63a49ea8bea' => 
    array (
      0 => '/opt/lampp/htdocs/projetBanqueSamane/public/web/header.html',
      1 => 1595850141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f1ebd9fea8ff0_38698816 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="La gestion de  la Banque du peuple" />
    <meta name="author" content="moustaphadieye96@gmail.com" />
    <meta name="keywords" content="Banque, Client, Compte" />
    <title>
        <?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 <?php } else { ?> Gestion Banque du Peuple <?php }?>
    </title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/file.css">
</head>

<body>
    <!--le header de la Page-->
    <div class="header">
        <a href="#">
            <span class="logo_1">BANQUE DU</span> <span class="logo_2">PEUPLE</span>
        </a>
    </div>

    <!--Le Contenu de la page-->
    <div class="container">
        <!--Le side Bare-->
        <div class="sideBare">
            <div class="sideBare_header">
                <img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/images/profil.png" alt="Profil" class="profil">
                <span class="email">moustaphadieye96@gmail.com</span>
            </div>
            <div class="sideBare_body">
                <div class="nav active"><a href="#">Dashboard</a></div>
                <div class="nav  <?php echo '<?php ';?>if($page=='compte') echo 'active'; <?php echo '?>';?>"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compte/add">Compte</a></div>
                <div class="nav <?php echo '<?php ';?>if($page=='client') echo 'active'; <?php echo '?>';?>"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/add">Client</a></div>
            </div>
        </div>
        <!--Le main de la page-->
        <div class="main"><?php }
}
