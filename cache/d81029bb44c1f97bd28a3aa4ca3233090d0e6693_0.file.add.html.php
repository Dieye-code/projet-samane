<?php
/* Smarty version 3.1.30, created on 2020-07-27 23:46:52
  from "/opt/lampp/htdocs/projetBanqueSamane/src/view/compte/add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f1f4b4c9fbd66_69238364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd81029bb44c1f97bd28a3aa4ca3233090d0e6693' => 
    array (
      0 => '/opt/lampp/htdocs/projetBanqueSamane/src/view/compte/add.html',
      1 => 1595886411,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/web/header.html' => 1,
    'file:public/web/footer.html' => 1,
  ),
),false)) {
function content_5f1f4b4c9fbd66_69238364 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:public/web/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="main">
    <div class="panel-primary">
        <div class="panel-heading">
            Ajout d'un Compte Client
        </div>
        <div class="panel-body">
            <form action="add" method="post" id="myForm" novalidate>
                <div class="infoCompte">
                    <div class="title">Info Compte</div>
                    <div class="form-group">
                        <label for="solde" class="control-label">Clés RIB</label>
                        <input type="text" class="form-control" name="clesRib" id="clesRib">
                    </div>
                    <div class="form-group">
                        <label for="typeCompte" class="control-label">Type de Compte</label>
                        <select name="typeCompte" id="typeCompte" class="form-control">
                            <option value="0">--Type de Compte</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['typeComptes']->value, 'typeCompte');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['typeCompte']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['typeCompte']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['typeCompte']->value->getLibelle();?>
</option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </select>
                    </div>
                    <div class="form-group" id="dateDeblocage">
                        <label for="solde" class="control-label">Date Déblocage</label>
                        <input type="date" class="form-control" name="dateDebc" id="dateDebc">
                    </div>
                    <div class="form-group">
                        <label for="solde" class="control-label">Solde</label>
                        <input type="number" class="form-control" name="solde" id="solde" value="0">
                        <span class="alert-danger" id="solde-invalid">Le solde doit etre superieur à
                            <?php echo $_smarty_tpl->tpl_vars['fraisOuverture']->value->getMontant();?>
</span>
                        <span class="alert-danger" id="fraisBlocage-invalid">Le solde doit etre superieur à
                            <?php echo $_smarty_tpl->tpl_vars['fraisBlocageOuverture']->value->getMontant();?>
</span>
                        <span class="alert-danger" id="agios-invalid">Le solde doit etre superieur à
                            <?php echo $_smarty_tpl->tpl_vars['agiosOuverture']->value->getMontant();?>
</span>
                    </div>
                    <div class="form-group" id="fraisBancaire">
                        <label for="frais" class="control-label">Frais Bancaire</label>
                        <span><?php echo $_smarty_tpl->tpl_vars['fraisOuverture']->value->getMontant();?>
</span>
                        <input type="hidden" class="form-control" name="frais" id="frais" value="<?php echo $_smarty_tpl->tpl_vars['fraisOuverture']->value->getMontant();?>
">
                    </div>
                    <div class="form-group" id="agiosCompte">
                        <label for="agios" class="control-label">Agios</label>
                        <span><?php echo $_smarty_tpl->tpl_vars['agiosOuverture']->value->getMontant();?>
</span>
                        <input type="hidden" class="form-control" name="agios" id="agios" value="<?php echo $_smarty_tpl->tpl_vars['agiosOuverture']->value->getMontant();?>
">
                    </div>
                    <div class="form-group" id="bloqueCompte">
                        <label for="fraisBlocageCompte" class="control-label">Frais Blocage</label>
                        <span><?php echo $_smarty_tpl->tpl_vars['fraisBlocageOuverture']->value->getMontant();?>
</span>
                        <input type="hidden" class="form-control" name="fraisBlocageCompte" id="fraisBlocageCompte" value="<?php echo $_smarty_tpl->tpl_vars['fraisBlocageOuverture']->value->getMontant();?>
">
                    </div>
                    <div class="form-group" id="typeClientSelect">
                        <label for="typeClient" class="control-label">Type Client</label>
                        <select name="typeClient" id="typeClient" class="form-control">
                            <option value="0">--Type Client--</option>
                            <option value="1">Client Physique</option>
                            <option value="2">Client Moral</option>
                        </select>
                    </div>
                    <div class="form-group" id="typeClientPhysiqueSelect">
                        <label for="typeClientPhysique" class="control-label">Type Client
                            Physique</label>
                        <select name="typeClientPhysique" id="typeClientPhysique" class="form-control">
                            <option value="1">Non Salarié</option>
                            <option value="2">Salarié</option>
                        </select>
                    </div>
                    <div class="infoClientPhysique" id="infoClientPhysique">
                        <div class="form-group">
                            <label for="solde" class="control-label">Client Non Salarié</label>
                            <select name="idClientNormal" id="idClientNormal" class="form-control">
                                <option value="0">--Client--</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientPhysiquesimple']->value, 'clientP');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['clientP']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['clientP']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['clientP']->value->getPrenom();?>
 <?php echo $_smarty_tpl->tpl_vars['clientP']->value->getNom();?>

                                </option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </select>
                        </div>
                    </div>
                    <div class="infoClientPhysiqueSalarie" id="infoClientPhysiqueSalarie">
                        <div class="form-group">
                            <label for="solde" class="control-label">Client Salarié</label>
                            <select name="idClientSalarie" id="idClientSalarie" class="form-control">
                                <option value="0">--Client--</option>j

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientPhysiquesalarie']->value, 'clientP');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['clientP']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['clientP']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['clientP']->value->getPrenom();?>
 <?php echo $_smarty_tpl->tpl_vars['clientP']->value->getNom();?>

                                </option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </select>
                        </div>
                    </div>
                    <div class="infoClientEntreprise" id="infoClientEntreprise">
                        <div class="form-group">
                            <label for="solde" class="control-label">Client</label>
                            <select name="idEmployeur" id="idEmployeur" class="form-control">
                                <option value="0">--Entreprise--</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['clientMorals']->value, 'clientMoral');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['clientMoral']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['clientMoral']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['clientMoral']->value->getNom();?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </select>
                        </div>
                    </div>
                </div>

                <input type="submit" class="btn-primary" name="ajouter" value="Ajouter">

            </form>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/compte.js"><?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:public/web/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
