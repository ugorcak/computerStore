<?php
    require_once(ROOT."/Views/Shared/header.php");
?>

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
        <div class="section-content">
            <?php if(isset($this->viewBag['users'])):?>
                <?php foreach($this->viewBag['users'] as $key=>$value): ?>
                    <article>
                        <div class="article-description">
                            <span>
                                <h2><?=$value->username?></h2>
                            </span>
                        </div>
                        <form action="/admin/removeuserbyid/<?= $value->id?>" method="get">
                            <div class="article-remove">
                                <input type="hidden" value="<?= $value->id?>">
                                <button type="remove" class="btn3">Remove</button>
                            </div>
                        </form>
                    </article>
                <?php endforeach; ?>
            <?php endif;?>
        </div>
    </section>
    <aside class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    </aside>
</main>

<?php require_once(ROOT."/Views/Shared/footer.php") ?>