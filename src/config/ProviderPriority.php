<?php

/*
 *
 *  ____            _        _   __  __ _                  __  __ ____
 * |  _ \ ___   ___| | _____| |_|  \/  (_)_ __   ___      |  \/  |  _ \
 * | |_) / _ \ / __| |/ / _ \ __| |\/| | | '_ \ / _ \_____| |\/| | |_) |
 * |  __/ (_) | (__|   <  __/ |_| |  | | | | | |  __/_____| |  | |  __/
 * |_|   \___/ \___|_|\_\___|\__|_|  |_|_|_| |_|\___|     |_|  |_|_|
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Team
 * @link http://www.pocketmine.net/
 *
 *
*/

declare(strict_types=1);

namespace pocketmine\config;

/**
 * List of provider priorities
 */
final class ProviderPriority{

	private function __construct(){
		//NOOP
	}

	/**
	 * Provider originates from highly ad-hoc sources,
	 * such as command line arguments.
	 */
	public const ADHOC = 5;
	/**
	 * Provider originates from system sources,
	 * such as environment variables.
	 */
	public const SYSTEM = 4;
	/**
	 * Provider originates from plugin-wide settings,
	 * such as plugin_data/&ast;/config.yml
	 */
	public const PLUGIN = 3;
	/**
	 * Provider originates from server-wide settings,
	 * such as pocketmine.yml
	 */
	public const SERVER = 2;
	/**
	 * Provider originates from legacy settings files
	 * that have already been deprecated
	 */
	public const LEGACY = 1;
	/**
	 * Provider originates from hardcoded default settings
	 */
	public const DEFAULT = 0;
}
