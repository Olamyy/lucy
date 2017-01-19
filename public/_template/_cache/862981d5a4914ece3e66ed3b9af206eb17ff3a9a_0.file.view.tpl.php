<?php /* Smarty version 3.1.24, created on 2017-01-17 17:02:04
         compiled from "public/_template/admin/product/category/view.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1318001121587e3ffc325345_75826464%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '862981d5a4914ece3e66ed3b9af206eb17ff3a9a' => 
    array (
      0 => 'public/_template/admin/product/category/view.tpl',
      1 => 1484668921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1318001121587e3ffc325345_75826464',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_587e3ffc3816a4_94850088',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587e3ffc3816a4_94850088')) {
function content_587e3ffc3816a4_94850088 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1318001121587e3ffc325345_75826464';
echo $_smarty_tpl->getSubTemplate ("../../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('../../navmenu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



<div class="wrapper">
    <!-- /#left -->
    <div id="content" class="bg-container">
        <header class="head">
            <div class="main-bar row">
                <div class="col-lg-6 col-md-4 col-sm-4">
                    <h4 class="nav_top_align">
                        <i class="fa fa-th"></i>
                        Advanced Tables
                    </h4>
                </div>
                <div class="col-lg-6 col-md-8 col-sm-8">
                    <ol class="breadcrumb float-xs-right nav_breadcrumb_top_align">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                Dashboard
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#">Categories</a>
                        </li>
                        <li class="breadcrumb-item active">View</li>
                    </ol>
                </div>
            </div>
        </header>
        <div class="outer">
            <div class="inner bg-light lter bg-container">
                <!-- editable data  table starts-->
                <div class="card m-t-35">
                    <div class="card-header bg-white">
                        <i class="fa fa-table"> </i> Advanced Table
                    </div>
                    <div class="card-block">
                        <div class="m-t-35">
                            <button id="del_button" class="btn btn-primary"> Delete Selected Row </button>
                            <div class="m-t-25">
                                <table id="example_demo" class="table table-hover table-bordered " >
                                    <thead>
                                    <tr>
                                        <th>First name</th>
                                        <th>Last name</th>
                                        <th class="hidden-xs">User name</th>
                                        <th class="hidden-xs">Contact</th>
                                    </tr>
                                    </thead>
                                    <tbody><tr><td>Barbara</td><td>Oberbrunner</td><td>Barbara.Oberbrunner72</td><td>340-008-0893</td></tr><tr><td>Cordelia</td><td>Rath</td><td>Cordelia_Rath61</td><td>325-249-0692</td></tr><tr><td>Enola</td><td>Strosin</td><td>Enola_Strosin50</td><td>602-588-8702</td></tr><tr><td>Wilber</td><td>Stiedemann</td><td>Wilber76</td><td>702-043-4738</td></tr><tr><td>Katrina</td><td>Connelly</td><td>Katrina90</td><td>085-905-5278</td></tr><tr><td>Carlos</td><td>Hintz</td><td>Carlos.Hintz12</td><td>702-665-5965</td></tr><tr><td>Anabel</td><td>Brekke</td><td>Anabel_Brekke</td><td>161-155-7782</td></tr><tr><td>Rocky</td><td>Rosenbaum</td><td>Rocky.Rosenbaum</td><td>886-620-3788</td></tr><tr><td>Jordi</td><td>Willms</td><td>Jordi_Willms81</td><td>906-605-0838</td></tr><tr><td>Corrine</td><td>Spinka</td><td>Corrine_Spinka65</td><td>602-085-6078</td></tr><tr><td>Ian</td><td>Gislason</td><td>Ian.Gislason</td><td>544-694-5290</td></tr><tr><td>Stephanie</td><td>Effertz</td><td>Stephanie_Effertz</td><td>566-096-4358</td></tr><tr><td>Lucious</td><td>Bosco</td><td>Lucious5</td><td>112-560-2158</td></tr><tr><td>Carmine</td><td>Halvorson</td><td>Carmine_Halvorson</td><td>488-092-0985</td></tr><tr><td>Norene</td><td>Schimmel</td><td>Norene3</td><td>362-894-5328</td></tr><tr><td>Percy</td><td>Monahan</td><td>Percy.Monahan90</td><td>908-050-3573</td></tr><tr><td>Dedric</td><td>Rempel</td><td>Dedric_Rempel</td><td>796-271-0462</td></tr><tr><td>Bella</td><td>Bosco</td><td>Bella69</td><td>267-055-6396</td></tr><tr><td>Bianka</td><td>Wyman</td><td>Bianka_Wyman</td><td>729-489-8442</td></tr><tr><td>Anna</td><td>Weber</td><td>Anna90</td><td>873-697-2642</td></tr><tr><td>Jeff</td><td>Kuvalis</td><td>Jeff_Kuvalis29</td><td>959-581-6982</td></tr><tr><td>Otha</td><td>Hilpert</td><td>Otha.Hilpert</td><td>143-819-6455</td></tr><tr><td>Toni</td><td>Weissnat</td><td>Toni.Weissnat22</td><td>664-461-1470</td></tr><tr><td>Mina</td><td>Langworth</td><td>Mina.Langworth81</td><td>633-824-6834</td></tr><tr><td>Florencio</td><td>Feeney</td><td>Florencio78</td><td>687-783-3131</td></tr><tr><td>Rita</td><td>Littel</td><td>Rita.Littel86</td><td>365-618-2849</td></tr><tr><td>Zechariah</td><td>Mitchell</td><td>Zechariah_Mitchell</td><td>893-363-0874</td></tr><tr><td>Layne</td><td>Heidenreich</td><td>Layne_Heidenreich81</td><td>202-900-7622</td></tr><tr><td>Aaron</td><td>Stokes</td><td>Aaron.Stokes</td><td>878-820-5450</td></tr><tr><td>Salvatore</td><td>Koch</td><td>Salvatore.Koch</td><td>179-711-7250</td></tr><tr><td>Virgie</td><td>Hickle</td><td>Virgie_Hickle75</td><td>882-362-1743</td></tr><tr><td>Nova</td><td>Littel</td><td>Nova.Littel</td><td>508-815-2782</td></tr><tr><td>Adolfo</td><td>Legros</td><td>Adolfo.Legros9</td><td>564-385-7353</td></tr><tr><td>Emile</td><td>Lowe</td><td>Emile_Lowe88</td><td>954-777-0692</td></tr><tr><td>Alvah</td><td>Dickens</td><td>Alvah_Dickens</td><td>778-912-8090</td></tr><tr><td>Clyde</td><td>Prosacco</td><td>Clyde.Prosacco1</td><td>491-712-5097</td></tr><tr><td>Lon</td><td>Glover</td><td>Lon32</td><td>782-816-7723</td></tr><tr><td>Drake</td><td>Heidenreich</td><td>Drake.Heidenreich78</td><td>894-429-8713</td></tr><tr><td>Mikayla</td><td>Turner</td><td>Mikayla_Turner47</td><td>389-728-0717</td></tr><tr><td>Javier</td><td>Fahey</td><td>Javier_Fahey44</td><td>129-692-7475</td></tr><tr><td>Kenya</td><td>Mosciski</td><td>Kenya.Mosciski</td><td>710-853-7377</td></tr><tr><td>Ned</td><td>Marvin</td><td>Ned75</td><td>600-091-2968</td></tr><tr><td>Rylee</td><td>Waters</td><td>Rylee75</td><td>954-415-9934</td></tr><tr><td>Angelina</td><td>Torphy</td><td>Angelina48</td><td>775-638-3448</td></tr><tr><td>Carolyn</td><td>Dach</td><td>Carolyn56</td><td>543-804-3144</td></tr><tr><td>Antonia</td><td>Hackett</td><td>Antonia.Hackett</td><td>387-732-5894</td></tr><tr><td>Nedra</td><td>Morissette</td><td>Nedra58</td><td>969-984-2709</td></tr><tr><td>Nolan</td><td>Krajcik</td><td>Nolan.Krajcik</td><td>577-227-9596</td></tr><tr><td>Jeffery</td><td>O'Hara</td><td>Jeffery_OHara</td><td>534-603-6200</td></tr><tr><td>Evangeline</td><td>Goodwin</td><td>Evangeline_Goodwin</td><td>791-355-8987</td></tr><tr><td>Dena</td><td>Medhurst</td><td>Dena.Medhurst</td><td>057-376-3245</td></tr><tr><td>Kyra</td><td>Haley</td><td>Kyra59</td><td>419-651-4827</td></tr><tr><td>Aditya</td><td>Borer</td><td>Aditya_Borer</td><td>167-962-4965</td></tr><tr><td>Kylee</td><td>Swift</td><td>Kylee37</td><td>083-414-6210</td></tr><tr><td>Elenora</td><td>Stroman</td><td>Elenora.Stroman87</td><td>140-966-9576</td></tr><tr><td>Elmo</td><td>Kassulke</td><td>Elmo.Kassulke</td><td>440-656-9499</td></tr><tr><td>Hugh</td><td>Miller</td><td>Hugh.Miller13</td><td>451-182-1112</td></tr></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- end of responsive tables-->
            </div>
            <!-- /.inner -->
        </div>
        <!-- /.outer -->
        <!-- /#content -->

    </div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ("../../globalfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("../category/categoryfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("../../dashboardfooter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>