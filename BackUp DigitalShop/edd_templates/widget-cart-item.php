<li class="edd-cart-item">
	<span class="edd-cart-item-title">{item_title}</span>
	<span class="edd-cart-item-separator">-</span>&nbsp;<?php echo edd_item_quantities_enabled() ? '<span class="edd-cart-item-quantity">{item_quantity}&nbsp;@&nbsp;</span>' : ''; ?><span class="edd-cart-item-price">{item_amount}</span>&nbsp;<span class="edd-cart-item-separator">-</span>
	<a href="{remove_url}" data-cart-item="{cart_item_id}" data-download-id="{item_id}" data-action="edd_remove_from_cart" class="edd-remove-from-cart"><?php _e( 'remove', 'easy-digital-downloads' ); ?></a>
	<span class="edd-cart-item_listen"><p>toto</p></span>
</li>
