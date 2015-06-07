<?php namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Cart;
use CodeCommerce\Http\Requests;
//use CodeCommerce\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

/**
 * Class CartController
 * @package CodeCommerce\Http\Controllers
 */
class CartController extends Controller {

    private $cart;

    /**
     * @param Cart $cart
     */
    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }

	public function index()
    {
        if(!Session::has('cart')) {
            Session::set('cart', $this->cart);
        }

        return view('store.cart', ['cart' => Session::get('cart')]);
    }

}
