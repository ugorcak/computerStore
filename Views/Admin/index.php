<?php
    require_once(ROOT."/Views/Shared/header.php"); ?>
<html lang="<?=$_SESSION['lang']?>">
    <main class="row reverse-sm">
        <section class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <div class="section-content">
                    <a href="addproduct" class="linkadmin">
                       <?=Localizer::translate('Add Product')?>
                    </a>
                    <a href="removeproduct" class="linkadmin">
                        <?=Localizer::translate('Remove Product')?>
                    </a>
                    <a href="addcategory" class="linkadmin">
                        <?=Localizer::translate('Add Category')?>
                    </a>
                    <a href="removecategory" class="linkadmin">
                        <?=Localizer::translate('Remove Category')?>
                    </a>
                    <a href="adduser" class="linkadmin">
                        <?=Localizer::translate('Add User')?>
                    </a>
                    <a href="removeuser" class="linkadmin">
                        <?=Localizer::translate('Remove User')?>
                    </a>
            </div>


        </section>
        <aside class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

        </aside>
    </main>
</html>

<?php require_once(ROOT."/Views/Shared/footer.php") ?>