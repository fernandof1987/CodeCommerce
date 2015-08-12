<?php namespace CodeCommerce\Events;

use CodeCommerce\Events\Event;

use Illuminate\Queue\SerializesModels;

class CheckoutEvent extends Event {

	use SerializesModels;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

}
