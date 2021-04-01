<?php
/* @var $this AdminController */
/* @var $model CActiveDataProvider */

// DO NOT REMOVE This is for automated testing to validate we see that page
echo viewHelper::getViewTestTag('2faUsersIndex');

?>

<?php
    App()->getClientScript()->registerScript('TFA-User-wrap', 'window.TFAUser = window.TFAUser || new TFAUserSettingsClass();', LSYii_ClientScript::POS_BEGIN);
?>

<div class="container-fluid ls-space padding left-50 right-50">
    <div class="row">
        <div class="col-xs-12 h1 pagetitle">
        <?=gT("Two-factor authentication (2FA)");?>
        </div>
    </div>
    <div class="row">
        <?php if ($oTFAModel == null ) { ?>
            <div class="jumbotron">
                <div class="col-sm-12">
                    <h2>
                    <?=gT("You don't have two-factor authentication (2FA) activated.");?> <br/>
                        <?=($force2FA == true ? gT("Please activate it now.") : gT("Do you want to activate it now?"))?> 
                    </h2>
                    <p>
                        <a class="btn btn-default TFA--actionopenmodal TFA--excludefromlock" data-href="<?=App()->createUrl("plugins/direct/plugin/TwoFactorAdminLogin/function/directCallCreateNewKey")?>" data-toggle="modal" id="TFA--register2fa"><?=gt("Activate 2FA now");?> </a>
                    <?php if ($force2FA == true) { ?> 
                        <a class="btn btn-danger TFA--excludefromlock" href="<?=App()->createUrl("admin")?>" id="TFA--excludeNotNow"><?=gT("Not now");?> </a>
                    <?php } ?>
                    </p>
                </div>
            </div>
        <?php } else { ?>
            <div class="col-sm-12">
                <p><?=sprintf(gT("Currently activated two-factor authentication: %s"), $oTFAModel->authTypeDescription);?> </p>
                <p><?=gT("Do you want to remove/renew it?");?></p>
                <p>
                    <a 
                        class="btn btn-default TFA--actionconfirm" 
                        data-href="<?=App()->createUrl("plugins/direct/plugin/TwoFactorAdminLogin/function/directCallDeleteKey")?>" 
                        id="TFA--unset2fa"
                        data-confirmtext="<?=gT('Are you sure you want to delete your 2FA key?')?>"
                        data-buttons="{confirm_cancel: '<?=gT('No, cancel')?>', confirm_ok: '<?=gT('Yes, I am sure')?>'}"
                        data-uid="<?=$oTFAModel->uid?>"
                        data-errortext="<?=gT('An error has occurred, and the key could not be deleted.')?>"
                    ><?=gT("Remove 2FA")?></a>
                    <a 
                        class="btn btn-default TFA--actionopenmodal" 
                        data-href="<?=App()->createUrl("plugins/direct/plugin/TwoFactorAdminLogin/function/directCallCreateNewKey", ['uid' => $oTFAModel->uid])?>" 
                        data-toggle="modal" id="TFA--reset2fa"
                    ><?=gT("Renew 2FA")?></a>
                </p>
            </div>
        <?php } ?>
    </div>
</div>
<div id='TFA--actionmodal' class="modal fade " tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        </div>
    </div>
</div>
<?php if($force2FA == true && $oTFAModel == null ) { 
       echo "<style>.navbar {visibility: hidden;} .footer {visibility:hidden;}</style>";
       App()->getClientScript()->registerScript('TFA-User-Lock', 'window.TFAUser.restrictAccess();', LSYii_ClientScript::POS_POSTSCRIPT);
}?>
<?php
    App()->getClientScript()->registerScript('TFA-User', 'window.TFAUser.bind();', LSYii_ClientScript::POS_POSTSCRIPT);
?>