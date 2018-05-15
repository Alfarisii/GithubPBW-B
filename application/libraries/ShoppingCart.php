<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * Shopping Cart class for manage products
 */

class ShoppingCart
{

    protected $CI;
    public $sumValues;
    /*
     * 1 month expire time
     */
    private $cookieExpTime = 2678400;

    public function __construct()
    {
        $this->CI = & get_instance();
    }

    public function manageShoppingCart()
    {
        if ($_POST['action'] == 'add') {
            if (!isset($_SESSION['shopping_cart'])) {
                $_SESSION['shopping_cart'] = array();
            }
            @$_SESSION['shopping_cart'][] = (int) $_POST['article_id'];
        }
        if ($_POST['action'] == 'remove') {
            if (($key = array_search($_POST['article_id'], $_SESSION['shopping_cart'])) !== false) {
                unset($_SESSION['shopping_cart'][$key]);
            }
        }
        @set_cookie('shopping_cart', serialize($_SESSION['shopping_cart']), $this->cookieExpTime);
        $result = 0;
        if (!empty($_SESSION['shopping_cart'])) {
            $result = $this->getCartItems();
        }
        // get items from db and add him to cart products list from ajax
        $loop = $this->CI->loop;
        $loop::getCartItems($result);
    }

    public function removeFromCart()
    {
        $count = count(array_keys($_SESSION['shopping_cart'], $_GET['delete-product']));
        $i = 1;
        do {
            if (($key = array_search($_GET['delete-product'], $_SESSION['shopping_cart'])) !== false) {
                unset($_SESSION['shopping_cart'][$key]);
            }
            $i++;
        } while ($i <= $count);
        @set_cookie('shopping_cart', serialize($_SESSION['shopping_cart']), $this->cookieExpTime);
    }

    public function getCartItems()
    {
        if ((!isset($_SESSION['shopping_cart']) || empty($_SESSION['shopping_cart'])) ) {

        } elseif (!isset($_SESSION['shopping_cart']) || !is_array($_SESSION['shopping_cart'])) {
            return 0;
        }
        
    }

    public function clearShoppingCart()
    {
        unset($_SESSION['shopping_cart']);
        @delete_cookie('shopping_cart');
        if ($this->CI->input->is_ajax_request()) {
            echo 1;
        }
    }

}
