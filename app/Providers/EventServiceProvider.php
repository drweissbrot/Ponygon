<?php

namespace App\Providers;

use App\Events;
use App\Listeners;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
	/**
	 * The event listener mappings for the application.
	 */
	protected $listen = [
		Events\Lobby\GameConfigChanged::class => [
			Listeners\Lobby\AutostartMatch::class,
		],

		Events\Lobby\PlayerJoined::class => [
			Listeners\Lobby\AutostartMatch::class,
		],

		Events\Lobby\PlayerLeft::class => [
			Listeners\Lobby\AutostartMatch::class,
		],

		Events\Lobby\PlayerSetReady::class => [
			Listeners\Lobby\AutostartMatch::class,
		],
	];

	/**
	 * Register any events for your application.
	 */
	public function boot()
	{
		//
	}
}
