<?php
/**
 * @author Sujith Haridasan <sharidasan@owncloud.com>
 *
 * @copyright Copyright (c) 2019, ownCloud GmbH
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */

namespace OCP\Files\ObjectStore;

/**
 * Exception when file upload to object store fails
 * Class ObjectStoreWriteException
 *
 * @package OCP\Files\ObjectStore
 * @since 10.2.0
 */
class ObjectStoreWriteException extends ObjectStoreOperationException {
	/** @var int  */
	private $statusCode;

	/**
	 * ObjectStoreWriteException constructor.
	 *
	 * @param string $message
	 * @param int $statusCode
	 * @param int $code
	 * @param \Exception|null $previous
	 * @since 10.2.0
	 */
	public function __construct($message = "", $statusCode = 0, $code = 0, \Exception $previous = null) {
		$this->statusCode = $statusCode;
		$message = $message . " The status code from object storage is $statusCode.";
		parent::__construct($message, $code, $previous);
	}

	/**
	 * Returns the status code
	 * @return int
	 * @since 10.2.0
	 */
	public function getStatusCode() {
		return $this->statusCode;
	}
}