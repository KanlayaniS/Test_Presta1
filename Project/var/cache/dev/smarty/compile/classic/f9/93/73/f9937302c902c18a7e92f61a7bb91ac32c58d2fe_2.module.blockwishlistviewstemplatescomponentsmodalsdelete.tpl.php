<?php
/* Smarty version 4.3.4, created on 2024-02-16 09:40:22
  from 'module:blockwishlistviewstemplatescomponentsmodalsdelete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65cf1f76a03df8_22879286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9937302c902c18a7e92f61a7bb91ac32c58d2fe' => 
    array (
      0 => 'module:blockwishlistviewstemplatescomponentsmodalsdelete.tpl',
      1 => 1691748513,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65cf1f76a03df8_22879286 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/modules/blockwishlist/views/templates/components/modals/delete.tpl -->
<div
  class="wishlist-delete"
  <?php if ((isset($_smarty_tpl->tpl_vars['listUrl']->value))) {?>
    data-delete-list-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['listUrl']->value, ENT_QUOTES, 'UTF-8');?>
"
  <?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['deleteProductUrl']->value))) {?>
    data-delete-product-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['deleteProductUrl']->value, ENT_QUOTES, 'UTF-8');?>
"
  <?php }?>
  data-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove product from wishlist','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
  data-title-list="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete wishlist','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
  data-placeholder='<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The product will be removed from "%nameofthewishlist%".','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
'
  data-cancel-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
  data-delete-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
  data-delete-text-list="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
>
  <div
    class="wishlist-modal modal fade"
    
      :class="{show: !isHidden}"
    
    tabindex="-1"
    role="dialog"
    aria-modal="true"
  >
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">((modalTitle))</h5>
          <button
            type="button"
            class="close"
            @click="toggleModal"
            data-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body" v-if="productId">
          <p class="modal-text">((confirmMessage))</p> 
        </div>
        <div class="modal-footer">
          <button
            type="button"
            class="modal-cancel btn btn-secondary"
            data-dismiss="modal"
            @click="toggleModal"
          >
            ((cancelText))
          </button>

          <button
            type="button"
            class="btn btn-primary"
            @click="deleteWishlist"
          >
            ((modalDeleteText))
          </button>
        </div>
      </div>
    </div>
  </div>

  <div 
    class="modal-backdrop fade"
    
      :class="{in: !isHidden}"
    
  >
  </div>
</div>

<!-- end /var/www/html/modules/blockwishlist/views/templates/components/modals/delete.tpl --><?php }
}
