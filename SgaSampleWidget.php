<?php
/**
 * Sample widget for shopware shopping worlds
 * Copyright © 2016 Sebastian Garske 
 *
 * This file is part of Splash Widget.
 *
 *  Splash Widget is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  Parallax Widget is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with Parallax Widget.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace SgaSampleWidget;
/* Get plugin installation / deinstallation / update / activate / deactivate context */
use Shopware\Components\Plugin\Context\ActivateContext;
use Shopware\Components\Plugin\Context\DeactivateContext;
use Shopware\Components\Plugin\Context\InstallContext;
use Shopware\Components\Plugin\Context\UpdateContext;
use Shopware\Components\Plugin\Context\UninstallContext;

/* create the widget class */

class SgaSampleWidget extends \Shopware\Components\Plugin
{

    public function install(InstallContext $context)
    {
		$installer = $this->container->get('shopware.emotion_component_installer');
		
		$sampleWidgetElement = $installer->createOrUpdate(
			$this->getName(),
			'Sample Widget',
			[
				'name' => 'Sample Widget',
				 'template' => 'emotion_sample',
				 'description' => 'A sample widget for the shopping worlds.'
			]
		);
				
		$sampleWidgetElement->createTextField(
			[
				'name' => 'sample_title',
				'fieldLabel' => 'Title Text',
				'supportText' => 'Please enter the title for the sample widget.',
				'helpTitle' => 'Title Text',
				'helpText' => 'This will be the headline of your sample widget.',
				'defaultValue' => 'Title',
				'allowBlank' => true
			]
        );
		
		$sampleWidgetElement->createTextField(
			[
				'name' => 'sample_text',
				'fieldLabel' => 'Sample Text',
				'supportText' => 'Please enter the text for the sample widget.',
				'helpTitle' => 'Sample Text',
				'helpText' => 'This will be the text of your sample widget.',
				'defaultValue' => 'Some text goes here',
				'allowBlank' => true
			]
        );

    }
	
	
}