<?php

declare(strict_types=1);

namespace Castlegate\PasteAsText;

final class Plugin
{
    /**
     * Initialization
     *
     * @return void
     */
    public static function init(): void
    {
        $plugin = new static();

        // TinyMCE init
        add_filter('tiny_mce_before_init', [$plugin, 'setEditorInit']);
        add_filter('teeny_mce_before_init', [$plugin, 'setEditorInit']);

        // TinyMCE buttons
        add_filter('mce_buttons', [$plugin, 'setEditorButtons']);
        add_filter('mce_buttons_2', [$plugin, 'setEditorButtons']);

        // TinyMCE plugins
        add_filter('teeny_mce_plugins', [$plugin, 'setEditorPlugins']);
    }

    /**
     * Filter TinyMCE init options
     *
     * Paste as plain text by default in TinyMCE.
     *
     * @param array $init
     * @return array
     */
    public function setEditorInit(array $init): array
    {
        $init['paste_as_text'] = true;

        return $init;
    }

    /**
     * Filter TinyMCE button options
     *
     * Remove the "paste as plain text" toggle button from the TinyMCE toolbar.
     *
     * @param array $buttons
     * @return array
     */
    public function setEditorButtons(array $buttons): array
    {
        return array_diff($buttons, [
            'pastetext',
        ]);
    }

    /**
     * Filter TinyMCE plugin options
     *
     * Make sure the paste plugin is loaded by TinyMCE to allow paste as plain
     * text in all editors.
     *
     * @param array $plugins
     * @return array
     */
    public function setEditorPlugins(array $plugins): array
    {
        $plugins[] = 'paste';

        return $plugins;
    }
}
