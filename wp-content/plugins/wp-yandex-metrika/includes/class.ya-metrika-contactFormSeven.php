<?php

class YaMetrikaContactFormSeven
{
	protected static $instance;

    private function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'registerAssets'], 1);
    }

    public function registerAssets(){
        wp_enqueue_script(YAM_SLUG.'_contact-form-7', plugins_url('/assets/contactFormSeven.min.js', YAM_FILE), ['jquery'], YAM_VER, true);
    }

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new self;
        }

        return self::$instance;
    }
}
