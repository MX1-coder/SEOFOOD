<?php

/**
 * Website store class
 *
 * @link  http://www.powerfulwp.com
 * @since 1.0.0
 *
 * @package    LDDFW
 * @subpackage LDDFW/includes
 */
/**
 * Website store class.
 *
 * All store functions.
 *
 * @link  http://www.powerfulwp.com
 * @since      1.0.0
 * @package    LDDFW
 * @subpackage LDDFW/includes
 * @author     powerfulwp <cs@powerfulwp.com>
 */
class LDDFW_Store
{
    /**
     * Function that return driver seller id.
     *
     * @param int $driver_id driver user id.
     * @since 1.6.0
     * @return string
     */
    public function lddfw_get_driver_seller( $driver_id )
    {
        $seller_id = '';
        return $seller_id;
    }
    
    /**
     * Function that return order seller id.
     *
     * @since 1.6.0
     * @param object $order order.
     * @return string
     */
    public function lddfw_order_seller( $order )
    {
        $result = '';
        return $result;
    }
    
    /**
     * Pickup address.
     *
     * @since 1.0.0
     * @param string $format address format.
     * @param object $order order object.
     * @param int    $seller_id seller id.
     * @return string
     */
    public function lddfw_pickup_address( $format, $order, $seller_id )
    {
        $store_address = $this->lddfw_store_address( $format );
        return $store_address;
    }
    
    /**
     * Store phone.
     *
     * @since 1.6.0
     * @param object $order order object.
     * @param int    $seller_id seller id.
     * @return string
     */
    public function lddfw_store_phone( $order, $seller_id )
    {
        $store_phone = get_option( 'lddfw_dispatch_phone_number', '' );
        return $store_phone;
    }
    
    /**
     * Store address.
     *
     * @since 1.0.0
     * @param string $format address format.
     * @return string
     */
    public function lddfw_store_address( $format )
    {
        // main store address.
        $store_address = get_option( 'woocommerce_store_address', '' );
        $store_address_2 = get_option( 'woocommerce_store_address_2', '' );
        $store_city = get_option( 'woocommerce_store_city', '' );
        $store_postcode = get_option( 'woocommerce_store_postcode', '' );
        $store_raw_country = get_option( 'woocommerce_default_country', '' );
        $split_country = explode( ':', $store_raw_country );
        
        if ( false === strpos( $store_raw_country, ':' ) ) {
            $store_country = $split_country[0];
            $store_state = '';
        } else {
            $store_country = $split_country[0];
            $store_state = $split_country[1];
        }
        
        if ( '' !== $store_country ) {
            $store_country = WC()->countries->countries[$store_country];
        }
        $array = array(
            'street_1' => $store_address,
            'street_2' => $store_address_2,
            'city'     => $store_city,
            'zip'      => $store_postcode,
            'country'  => $store_country,
            'state'    => $store_state,
        );
        return lddfw_format_address( $format, $array );
    }

}