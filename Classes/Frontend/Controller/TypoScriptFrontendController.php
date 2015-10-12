<?php
namespace MbhSoftware\HeadersStdwrap\Frontend\Controller;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Class TypoScriptFrontendController
 */
class TypoScriptFrontendController extends \TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController {

	function processOutput() {
		if (is_array($this->config['config']['additionalHeaders.'])) {
			foreach ($this->config['config']['additionalHeaders.'] as $key => $options) {
				if (isset($this->config['config']['additionalHeaders.'][$key]['header.'])) {
					$this->config['config']['additionalHeaders.'][$key]['header'] = $this->cObj->stdWrap($this->config['config']['additionalHeaders'][$key]['header'], $this->config['config']['additionalHeaders.'][$key]['header.']);
				}
			}
		}
		parent::processOutput();
	}
}