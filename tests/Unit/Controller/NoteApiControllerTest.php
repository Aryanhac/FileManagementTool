<?php

declare(strict_types=1);
// SPDX-FileCopyrightText: Aryan Gupta <aryang9897@gmail.com>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\FileManagementTool\Tests\Unit\Controller;

use OCA\FileManagementTool\Controller\NoteApiController;

class NoteApiControllerTest extends NoteControllerTest {
	public function setUp(): void {
		parent::setUp();
		$this->controller = new NoteApiController($this->request, $this->service, $this->userId);
	}
}
