<?php namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Events\CheckoutEvent;
use CodeCommerce\Http\Requests;
//use CodeCommerce\Http\Controllers\Controller;

use CodeCommerce\Order;
use CodeCommerce\OrderItem;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use CodeCommerce\Category;
use PHPSC\PagSeguro\Items\Item;
use PHPSC\PagSeguro\Requests\Checkout\CheckoutService;


class CheckoutController extends Controller {

	public function place(Order $orderModel, OrderItem $orderItem, CheckoutService $checkoutService)
    {
        if(!Session::has('cart')) {
            return false;
        }

        $cart = Session::get('cart');

        $categories = Category::all();

        if($cart->getTotal() > 0) {

            $checkout = $checkoutService->createCheckoutBuilder();

            $order = $orderModel->create([
                'user_id' => Auth::user()->id,
                'total' => $cart->getTotal()
            ]);

            foreach($cart->all() as $k => $item) {

                $checkout->addItem(new Item(
                    $k,
                    $item['name'],
                    $item['price'],
                    $item['qtd'])
                );

                $order->items()->create([
                    'product_id' => $k,
                    'price' => number_format($item['price'], 2, ".",""),
                    'qtd' => $item['qtd']
                ]);
            }

            $cart->clear();

            event(new CheckoutEvent());

            $response = $checkoutService->checkout($checkout->getCheckout());

            return redirect($response->getRedirectionUrl());
        }


        return view('store.checkout', ['cart' => 'empty', 'categories' => $categories]);

    }

    public function test(CheckoutService $checkoutService)
    {
        $checkout = $checkoutService->createCheckoutBuilder()
            ->addItem(new Item(1, 'Televis�o LED 500', 8999.99))
            ->addItem(new Item(2, 'Video-game mega ultra blaster', 799.99))
            ->getCheckout();

        $response = $checkoutService->checkout($checkout);

        return redirect($response->getRedirectionUrl());

    }

}
