<?php
    /**
     * Example plugin that can not be activated.
     */
    class ModulePlugin extends PluginBase
    {
        static protected $description = 'Demo: This plugins registers a module.';
        static protected $name = 'ModulePlugin';

        public function __construct(PluginManager $manager, $id) {
            parent::__construct($manager, $id);
            $this->subscribe('beforeActivate');
        }

        public function beforeActivate()
        {
            $event = $this->getEvent();
            $event->set('success', false);

            // Optionally set a custom error message.
            $event->set('message', 'Custom error message from plugin.');
        }
    }
?>