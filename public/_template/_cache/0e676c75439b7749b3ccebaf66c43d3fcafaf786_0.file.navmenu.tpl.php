<?php /* Smarty version 3.1.24, created on 2017-05-15 18:53:29
         compiled from "/var/www/html/lucy/public/_template/front/navmenu.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9822504865919eb190ad659_48084029%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e676c75439b7749b3ccebaf66c43d3fcafaf786' => 
    array (
      0 => '/var/www/html/lucy/public/_template/front/navmenu.tpl',
      1 => 1494869208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9822504865919eb190ad659_48084029',
  'variables' => 
  array (
    'user_details' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5919eb190f1107_75382927',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5919eb190f1107_75382927')) {
function content_5919eb190f1107_75382927 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9822504865919eb190ad659_48084029';
if ((($tmp = @$_smarty_tpl->tpl_vars['user_details']->value)===null||$tmp==='' ? '' : $tmp)) {?>
  <input type="hidden" id="user_id" value="<?php echo $_smarty_tpl->tpl_vars['user_details']->value[0]['user_id'];?>
">
  <?php }?>


  
    
      
        
        
        
        
      

      
        
        
        
          
            
              
              
          
        
      
      
        
          
            
              
                
                
              
            

          
        
        
          
            
              
            
              
              
              
                
              
            
              
            
          
        
      
    
  
  
    
      
        
          
            
        
        
          
            
              
                
                
                  
                    
                      
                        
                          
                            
                              
                              
                              
                              
                            
                          
                        
                      
                    
                  
                

                

                  
                  
                  
                    
                      
                        
                          
                            
                              
                                
                              
                            
                          
                        
                      
                    
                  
                
                  

                
              
              
              
            
            
          
          

        
        
      
      
    
    

  
  
  

  <?php }
}
?>