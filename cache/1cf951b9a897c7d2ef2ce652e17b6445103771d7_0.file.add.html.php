<?php
/* Smarty version 3.1.30, created on 2020-07-27 15:30:14
  from "/opt/lampp/htdocs/projetBanqueSamane/src/view/client/add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5f1ed6e6d3db22_26980384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cf951b9a897c7d2ef2ce652e17b6445103771d7' => 
    array (
      0 => '/opt/lampp/htdocs/projetBanqueSamane/src/view/client/add.html',
      1 => 1595856613,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/web/header.html' => 1,
    'file:public/web/footer.html' => 1,
  ),
),false)) {
function content_5f1ed6e6d3db22_26980384 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:public/web/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="panel-primary">
    <div class="panel-heading">
        Ajout d'un Client
    </div>
    <div class="panel-body">
        <form action="add" method="post" id="myForm" novalidate>
            <!--Les informations du client-->
            <div class="infoClient">
                <div class="title">Info Client</div>
                <div class="form-group">
                    <label for="typeClient" class="control-label">Type Client</label>
                    <select name="typeClient" id="typeClient" class="form-control">
                        <option value="0">--Type Client--</option>
                        <option value="1">Client Physique</option>
                        <option value="2">Client Moral</option>
                    </select>
                </div>
                <!--Informations du client Physique-->
                <div class="infoClientPhysique" id="infoClientPhysique">
                    <!--ancien client physique-->
                    <div class="infoAncienClient" id="infoAncienClient">
                        <div class="form-group">
                            <select name="idClient" id="idClient" class="form-control">
                                <option value="0">--Client--</option>
                                <option value="1">Marie Perle</option>
                                <option value="2">Ousmane Mballo</option>
                                <option value="3">Mor Diop</option>
                                <option value="4">Moustapha Dieye</option>
                            </select>
                        </div>
                        <div class="btn btn-primary" id="nouveauClient" hidden>Nouveau Client</div>
                    </div>
                    <!--nouveau client physique-->
                    <div class="infoNouveauClientPhysique" id="infoNouveauClientPhysique">
                        <div class="form-group">
                            <label for="typeClientPhysique" class="control-label">Type Client
                                Physique</label>
                            <select name="typeClientPhysique" id="typeClientPhysique" class="form-control">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['typeClients']->value, 'typeClient');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['typeClient']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['typeClient']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['typeClient']->value->getLibelle();?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nom" class="control-label">Nom</label>
                            <input type="text" class="form-control" name="nom" id="nom" required>
                        </div>
                        <div class="form-group">
                            <label for="prenom" class="control-label">Prenom</label>
                            <input type="text" class="form-control" name="prenom" id="prenom" required>
                        </div>

                        <div class="form-group">
                            <label for="prenom" class="control-label">Numéro d'identification</label>
                            <input type="number" class="form-control" name="cni" id="cni" required>
                        </div>
                        <div class="form-group">
                            <label for="telephone" class="control-label">Telephone</label>
                            <input type="number" class="form-control" name="telephone" id="telephone" required>
                        </div>
                        <div class="form-group">
                            <label for="adresse" class="control-label">Adresse</label>
                            <input type="text" class="form-control" name="adresse" id="adresse" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>

                        <div class="form-group">
                            <label for="prenom" class="control-label">Login</label>
                            <input type="text" class="form-control" name="login" id="login" required>
                        </div>

                        <div class="form-group">
                            <label for="prenom" class="control-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password" required>
                        </div>

                        <div class="btn btn-primary" id="ancienClient" hidden>Ancien Client</div>
                    </div>
                    <!--information d'un salarié-->
                    <div class="infoClientPhysiqueSalarie" id="infoClientPhysiqueSalarie">
                        <div class="title">Info Salarié</div>
                        <div class="form-group">
                            <label for="salaire" class="control-label">Salaire</label>
                            <input type="number" class="form-control" name="salaire" id="salaire" required>
                        </div>
                        <div class="form-group">
                            <label for="profession" class="control-label">Profession</label>
                            <input type="text" class="form-control" name="profession" id="profession" required>
                        </div>

                    </div>
                </div>
                <!--Client Moral-->
                <div class="clientMoral" id="clientMoral">
                    <div class='title'>Info Entreprise</div>
                    <!--Ancien Client Moral-->
                    <div class="infoAncienClientMoral" id="infoAncienClientMoral">
                        <label for="idClient" class="control-label">Client</label>
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
                        <div class="btn btn-primary" id="nouveauClientMoral"> Nouvelle Entreprise</div>
                    </div>
                    <!--Information d'un Nouveau client moral-->
                    <div class="infoNouveauClientMoral" id="infoNouveauClientMoral">
                        <div class="form-group">
                            <label for="nomClientMoral" class="control-label">Nom</label>
                            <input type="text" class="form-control" name="nomClientMoral" id="nomClientMoral" required>
                        </div>
                        <div class="form-group">
                            <label for="AdresseClientMoral" class="control-label">Numero</label>
                            <input type="text" class="form-control" name="numeroClientMoral" id="numeroClientMoral" required>
                        </div>

                        <div class="form-group">
                            <label for="AdresseClientMoral" class="control-label">Adresse</label>
                            <input type="text" class="form-control" name="AdresseClientMoral" id="AdresseClientMoral" required>
                        </div>

                        <div class="form-group">
                            <label for="raisonSocial" class="control-label">Raison Social</label>
                            <input type="text" class="form-control" name="raisonSocial" id="raisonSocial" required>
                        </div>
                        <div class="form-group">
                            <label for="raisonSocial" class="control-label">Telephone</label>
                            <input type="text" class="form-control" name="telephoneClientMoral" id="telephoneClientMoral" required>
                        </div>
                        <div class="form-group">
                            <label for="raisonSocial" class="control-label">Email</label>
                            <input type="text" class="form-control" name="emailClientMoral" id="emailClientMoral" required>
                        </div>
                        <div class="form-group">
                            <label for="raisonSocial" class="control-label">Login</label>
                            <input type="text" class="form-control" name="loginClientMoral" id="loginClientMoral" required>
                        </div>
                        <div class="form-group">
                            <label for="raisonSocial" class="control-label">Password</label>
                            <input type="password" class="form-control" name="passwordClientMoral" id="passwordClientMoral" required>
                        </div>
                        <div class="btn btn-primary" id="AncienClientMoral"> Ancien Entreprise</div>

                    </div>
                </div>
            </div>

            <input type="submit" class="btn-primary" name="ajouter" value="Ajouter">

        </form>
    </div>
</div>


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
/public/js/client.js"><?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:public/web/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
