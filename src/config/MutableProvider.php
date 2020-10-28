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

interface MutableProvider extends Provider{
	/**
	 * Returns a MutableProvider allowing write access to the group called `$name`
	 *
	 * Null can be returned if the group cannot be written into.
	 *
	 * @throws FormatException if `$name` is found but cannot be used as a group
	 */
	public function mutableGroup(string $name) : ?MutableProvider;

	/**
	 * Sets the string under the entry `$name`
	 *
	 * Returns whether the write is permissible.
	 * This method should throw `FormatException` instead of returning false
	 * if an error occurred.
	 *
	 * @throws FormatException if `$name` is found but cannot be used as a string
	 */
	public function setString(string $name, string $value) : bool;

	/**
	 * Sets the int under the entry `$name`
	 *
	 * Returns whether the write is permissible.
	 * This method should throw `FormatException` instead of returning false
	 * if an error occurred.
	 *
	 * @throws FormatException if `$name` is found but cannot be used as a string
	 */
	public function setInt(string $name, int $value) : bool;

	/**
	 * Sets the float under the entry `$name`
	 *
	 * Returns whether the write is permissible.
	 * This method should throw `FormatException` instead of returning false
	 * if an error occurred.
	 *
	 * @throws FormatException if `$name` is found but cannot be used as a string
	 */
	public function setFloat(string $name, float $value) : bool;

	/**
	 * Sets the boolean under the entry `$name`
	 *
	 * Returns whether the write is permissible.
	 * This method should throw `FormatException` instead of returning false
	 * if an error occurred.
	 *
	 * @throws FormatException if `$name` is found but cannot be used as a string
	 */
	public function setBool(string $name, bool $value) : bool;

	/**
	 * Unsets the entry `$name`.
	 *
	 * Returns whether the write is permissible.
	 * This method should never fail;
	 * `false` should be returned if `$name` does not exist
	 * or if it is not removeable.
	 */
	public function unset(string $name) : bool;
}
