if (!function_exists( 'evolution_add_payment_method_to_admin_new_order' ) ) :
/**
 * Add user payment method to admin email
 * 
 * @hooked woocommerce_email_after_order_table()
 */
function evolution_add_payment_method_to_admin_new_order( $order, $is_admin_email ) {

    if ( $is_admin_email ) {

        echo '<p><strong>Verwendete Zahlungsart:</strong> ' . $order->payment_method_title . '</p>';

    }
}
add_action( 'woocommerce_email_after_order_table', 'evolution_add_payment_method_to_admin_new_order', 15, 2 );
endif;
