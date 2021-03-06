<?php namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Cart;
use CodeCommerce\Http\Requests;
use CodeCommerce\Product;
//use CodeCommerce\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

/**
 * Class CartController
 * @package CodeCommerce\Http\Controllers
 */
class CartController extends Controller
{

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
        if (!Session::has('cart')) {
            Session::set('cart', $this->cart);
        }

        return view('store.cart', ['cart' => Session::get('cart')]);
    }

    public function add($id)
    {
        $cart = $this->getCart();

        $product = Product::find($id);
        $cart->add($id, $product->name, $product->price);

        Session::set('cart', $cart);

        return redirect()->route('cart');
    }

    public function destroy($id)
    {
        $cart = $this->getCart();
        $cart->remove($id);

        Session::set('cart', $cart);

        return  redirect()->route('cart');
    }

    private function getCart()
    {
        if(Session::has('cart')) {
            $cart = Session::get('cart');
        } else {
            $cart = $this->cart;
        }

        return $cart;
    }



}
