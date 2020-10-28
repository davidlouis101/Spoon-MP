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

interface Provider{
	/**
	 * Returns a Provider that accesses the subgroup called `$name`
	 *
	 * Null can be returned if it is known that no configuration values are present in the group.
	 *
	 * @throws FormatException if `$name` is found but cannot be used as a group
	 */
	public function group(string $name) : ?Provider;

	/**
	 * Returns the string under the entry `$name`
	 *
	 * Null is returned if no such entry is found
	 *
	 * @throws FormatException if `$name` is found but cannot be used as a string
	 */
	public function string(string $name) : ?string;

	/**
	 * Returns the int under the entry `$name`
	 *
	 * Null is returned if no such entry is found
	 *
	 * @throws FormatException if `$name` is found but cannot be used as a int
	 */
	public function int(string $name) : ?int;

	/**
	 * Returns the float under the entry `$name`
	 *
	 * Null is returned if no such entry is found
	 *
	 * @throws FormatException if `$name` is found but cannot be used as a float
	 */
	public function float(string $name) : ?float;

	/**
	 * Returns the boolean under the entry `$name`
	 *
	 * Null is returned if no such entry is found
	 *
	 * @throws FormatException if `$name` is found but cannot be used as a boolean
	 */
	public function bool(string $name) : ?bool;

	/**
	 * Returns a Generator that yields Provider for each group under the list called `$name`
	 *
	 * Null can be returned in place of an empty generator.
	 *
	 * @return null|Generator<mixed, Provider> The returned generator may also throw `FormatException` if entries are found to be non-groups
	 * @throws FormatException if `$name` is found but cannot be used as a list of groups
	 */
	public function groupList(string $name) : ?Generator;

	/**
	 * Returns a Generator that yields strings under the list called `$name`
	 *
	 * Null can be returned in place of an empty generator.
	 *
	 * @return null|Generator<mixed, string> The returned generator may also throw `FormatException` if entries are found to be non-strings
	 * @throws FormatException if `$name` is found but cannot be used as a list of strings
	 */
	public function stringList(string $name) : ?Generator;

	/**
	 * Returns a Generator that yields ints under the list called `$name`
	 *
	 * Null can be returned in place of an empty generator.
	 *
	 * @return null|Generator<mixed, int> The returned generator may also throw `FormatException` if entries are found to be non-ints
	 * @throws FormatException if `$name` is found but cannot be used as a list of ints
	 */
	public function intList(string $name) : ?Generator;

	/**
	 * Returns a Generator that yields floats under the list called `$name`
	 *
	 * Null can be returned in place of an empty generator.
	 *
	 * @return null|Generator<mixed, float> The returned generator may also throw `FormatException` if entries are found to be non-floats
	 * @throws FormatException if `$name` is found but cannot be used as a list of floats
	 */
	public function floatList(string $name) : ?Generator;

	/**
	 * Returns a Generator that yields bools under the list called `$name`
	 *
	 * Null can be returned in place of an empty generator.
	 *
	 * @return null|Generator<mixed, bool> The returned generator may also throw `FormatException` if entries are found to be non-bools
	 * @throws FormatException if `$name` is found but cannot be used as a list of bools
	 */
	public function boolList(string $name) : ?Generator;
}
