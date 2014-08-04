<?php

class Shopware_Plugins_Backend_ImageSlider_LinkBox extends Shopware_Components_Plugin_Bootstrap
{
    public function getInfo()
    {
        return array(
            'version'     => $this->getVersion(),
            'label'       => $this->getLabel(),
            'link'        => 'http://scriptkid.de',
			'autor' => 'Pieter Paßmann',
			'copyright' => 'Copyright (c) 2014, Pieter Paßmann',
            'description' => 'A small and light LinkBox'
        );
    }

    public function getLabel()
    {
        return 'LinkBox';
    }

    public function getVersion()
    {
        return "0.0.1";
    }

    public function install()
    {
		$component = $this->createEmotionComponent(array(
			'name' => 'LinkBox',
			'template' => 'emotion_linkbox',
			'description' => 'Small Link Box'
        ));


		/* --- IMAGE START --- */

		$component->createField(array(
			'name' => 'image',	
			'fieldLabel' => 'Image',
			'supportText' => 'Image in our box.',
			'xtype' => 'mediaselectionfield',
			'allowBlank' => true
		));
		$component->createTextField(array(
			'name' => 'image_alt',
			'fieldLabel' => 'Image Alt',
			'supportText' => 'Alt-Attribute',
			'allowBlank' => true
        ));
		$component->createTextField(array(
			'name' => 'image_link',
			'fieldLabel' => 'Image Link',
			'supportText' => 'Link for Box.',
			'allowBlank' => true
        ));
		$component->createTextField(array(
			'name' => 'image_title',
			'fieldLabel' => 'Image Link Title',
			'supportText' => 'Title-Attribute',
			'allowBlank' => true
        ));

        return true;
    }

    public function uninstall()
    {
        return true;
    }
}