<?php /* Smarty version 3.1.24, created on 2017-01-14 07:55:12
         compiled from "public/_template/front-theme/home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8092153785879cb50535ab3_29068937%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85d5bdb9a8d5f31ee116ad4751e34556166f4252' => 
    array (
      0 => 'public/_template/front-theme/home.tpl',
      1 => 1484376583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8092153785879cb50535ab3_29068937',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5879cb50563495_91694836',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5879cb50563495_91694836')) {
function content_5879cb50563495_91694836 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8092153785879cb50535ab3_29068937';
?>




<?php echo $_smarty_tpl->getSubTemplate ("./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<body>
<div class="m-scene" id="main"> <!-- Main Container -->
    <!-- Main Content -->
    <div class="animated fadeinup">
        <!-- Album Cover -->
        <div class="site-wrapper">

            <div class="site-wrapper-inner">

                <div class="cover-container">
                    <div class="new-welcome">
                        <div class="inner cover"><br />
                            <h1 class="cover-heading">Soccer Trivia.</h1><br/><br /><br />
                            <p class="lead">How well do you know football? Test your Knowledge and get rewarded.</p>

                            <p class="lead" style="color: yellow;">GET A MINIMUM OF 500 POINTS IN A MONTH </p>
                            <p class="lead">

                                <li>1st Position - 50, 000 naira</li>
                                <li>2nd Position - 25, 000 naira</li>
                                <li>3rd Position - 15, 000 naira</li>

                            </p>

                            <p>At the end of the <?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
, A grand prize of #1,000,000 would be awarded to the user with the highest points</p>

                            <p>You also get updated with weekly tips and information on your favorite club</p><br />
                            <p class="lead"> <a class="btn btn-lg btn-default" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
welcome/">Get Started</a>
                            </p>
                         <!--   <p class="lead">Existing User? <a href="#" style="color: yellow; text-align: center;">LOG IN</a> </p> -->
                        </div>
                    </div>



<?php echo $_smarty_tpl->getSubTemplate ("./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>