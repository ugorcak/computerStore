<?php
//    define("ROOT", realpath($_SERVER["DOCUMENT_ROOT"]));
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
            <?php if(isset($this->viewBag["errors"])) : ?>
                <ul>
                    <?php foreach ($this->viewBag["errors"] as $key => $value) : ?>
                        <?php if($value !== null) :?>
                            <li><?=Localizer::translate($value)?></li>
                        <?php endif;?>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <form action="/admin/adduser" method="post">
                <div class="login-input">
                    <input name="username" type="text" placeholder="<?=Localizer::translate('Login')?>" value="<?= isset($_POST['username']) ? $_POST['username'] : ''?>" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                </div>
                <div class="login-input">
                    <input name="email" type="email" placeholder="<?=Localizer::translate('Email')?>" value="<?= isset($_POST['email']) ? $_POST['email'] : ''?>" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                </div>
                <div class="login-input">
                    <input name="password" type="password" placeholder="<?=Localizer::translate('Password')?>" minlength="8" value="<?= isset($_POST['password']) ? $_POST['password'] : ''?>" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                </div>
                <div class="login-input">
                    <input name="firstName" type="text" placeholder="<?=Localizer::translate('First Name')?>" value="<?= isset($_POST['firstName']) ? $_POST['firstName'] : ''?>" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                </div>
                <div class="login-input">
                    <input name="lastName" type="text" placeholder="<?=Localizer::translate('Last Name')?>" value="<?= isset($_POST['lastName']) ? $_POST['lastName'] : ''?>" required>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                </div>
                <div class="login-input">
                    <Select class="admin-add" name="roleId" required>
                        <option value="" class="selected"><?=Localizer::translate('Role')?></option>
                        <option value=1>Admin</option>
                        <option value=2>User</option>
                    </Select>
                    <span class="highlight"></span>
                    <span class="bar"></span>
                </div>
                <br/>
                <input class="btn2" type="submit" name="Sign Up" value="<?=Localizer::translate('Add User')?>">
            </form>

        </div>
    </section>
    <aside class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
    </aside>
</main>

<?php require_once(ROOT."/Views/Shared/footer.php") ?>