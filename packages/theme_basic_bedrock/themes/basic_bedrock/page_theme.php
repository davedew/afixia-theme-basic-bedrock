<?php

namespace Concrete\Package\ThemeBasicBedrock\Theme\BasicBedrock;

use Concrete\Core\Feature\Features;
//use Concrete\Core\Page\Theme\BedrockThemeTrait;
use Concrete\Core\Area\Layout\Preset\Provider\ThemeProviderInterface;
use Concrete\Core\Page\Theme\Theme;

class PageTheme extends Theme implements ThemeProviderInterface
{

    public function getThemeName()
    {
        return t('Basic Bedrock');
    }

    public function getThemeDescription()
    {
        return t('A starter theme package using Concrete CMS Bedrock.');
    }

    protected $pThemeGridFrameworkHandle = 'bootstrap5';

    public function registerAssets()
    {
        //Include Concrete5 Assests in the project instead of separately adding them in your theme so you aren't loading double
        //Find all assets that Concrete5 provides here: /concrete/config/app.php

        $this->requireAsset('basic-bedrock-app');
        // The following assets are loaded in the BedrockThemeTrait but do not include our basic-bedrock-app so we do not use the Trait
        $this->requireAsset('font-awesome');
        $this->requireAsset('jquery');
        $this->requireAsset('vue');
        $this->requireAsset('bootstrap');
        $this->requireAsset('moment');
        // 	    $this->requireAsset('javascript', 'picturefill');

        //Tells Concrete5 that the theme should override and provide these files so it doesn't load double
// 	    $this->providesAsset('css', 'font-awesome');
// 	    $this->providesAsset('css', 'blocks/form');
// 	    $this->providesAsset('css', 'core/frontend/*');
    }

    //Tell the WYSIWYG Editor what styles / classes it should contain
    public function getThemeEditorClasses()
    {
        return [
            //Span Level Styles
            // ['title' => t('Text Styles ======='), 'menuClass' => '', 'spanClass' => ''],
            // ['title' => t('Bold'), 'menuClass' => '', 'spanClass' => 'fw-bold'],
            // ['title' => t('Bolder'), 'menuClass' => '', 'spanClass' => 'fw-bolder'],
            // ['title' => t('Normal'), 'menuClass' => '', 'spanClass' => 'fw-normal'],
            // ['title' => t('Light'), 'menuClass' => '', 'spanClass' => 'fw-light'],
            // ['title' => t('Lighter'), 'menuClass' => '', 'spanClass' => 'fw-lighter'],
            // ['title' => t('Italic'), 'menuClass' => '', 'spanClass' => 'fw-italic'],
            // ['title' => t('Lead'), 'menuClass' => '', 'spanClass' => 'lead'],
            // ['title' => t('Text Underline'), 'menuClass' => '', 'spanClass' => 'text-decoration-underline'],
            // ['title' => t('Line Through Text'), 'menuClass' => '', 'spanClass' => 'text-decoration-line-through'],

            ['title' => t('Text Case ======='), 'menuClass' => '', 'spanClass' => ''],
            ['title' => t('Lowercased Text'), 'menuClass' => '', 'spanClass' => 'text-lowercase'],
            ['title' => t('Uppercase Text'), 'menuClass' => '', 'spanClass' => 'text-uppercase'],
            ['title' => t('Capitalize Text'), 'menuClass' => '', 'spanClass' => 'text-capitalize'],

            ['title' => t('Text Sizing ======='), 'menuClass' => '', 'spanClass' => ''],
            ['title' => t('Display Heading 1'), 'menuClass' => '', 'spanClass' => 'display-1'],
            ['title' => t('Display Heading 2'), 'menuClass' => '', 'spanClass' => 'display-2'],
            ['title' => t('Display Heading 3'), 'menuClass' => '', 'spanClass' => 'display-3'],
            ['title' => t('Display Heading 4'), 'menuClass' => '', 'spanClass' => 'display-4'],
            ['title' => t('Display Heading 5'), 'menuClass' => '', 'spanClass' => 'display-5'],
            ['title' => t('Display Heading 6'), 'menuClass' => '', 'spanClass' => 'display-6'],
            ['title' => t('Font Size 1'), 'menuClass' => '', 'spanClass' => 'fs-1'],
            ['title' => t('Font Size 2'), 'menuClass' => '', 'spanClass' => 'fs-2'],
            ['title' => t('Font Size 3'), 'menuClass' => '', 'spanClass' => 'fs-3'],
            ['title' => t('Font Size 4'), 'menuClass' => '', 'spanClass' => 'fs-4'],
            ['title' => t('Font Size 5'), 'menuClass' => '', 'spanClass' => 'fs-5'],
            ['title' => t('Font Size 6'), 'menuClass' => '', 'spanClass' => 'fs-6'],

            ['title' => t('Text Color ======='), 'menuClass' => '', 'spanClass' => ''],
            ['title' => t('Text Muted'), 'menuClass' => '', 'spanClass' => 'text-muted'],
            ['title' => t('Text Color - Primary'), 'menuClass' => '', 'spanClass' => 'text-primary'],
            ['title' => t('Text Color - Secondary'), 'menuClass' => '', 'spanClass' => 'text-secondary'],
            ['title' => t('Text Color - Success'), 'menuClass' => '', 'spanClass' => 'text-success'],
            ['title' => t('Text Color - Danger'), 'menuClass' => '', 'spanClass' => 'text-danger'],
            ['title' => t('Text Color - Warning'), 'menuClass' => '', 'spanClass' => 'text-warning'],
            ['title' => t('Text Color - Info'), 'menuClass' => '', 'spanClass' => 'text-info'],
            ['title' => t('Text Color - Light'), 'menuClass' => '', 'spanClass' => 'text-light'],
            ['title' => t('Text Color - Dark'), 'menuClass' => '', 'spanClass' => 'text-dark'],
            ['title' => t('Text Color - Body'), 'menuClass' => '', 'spanClass' => 'text-body'],
            ['title' => t('Text Color - White'), 'menuClass' => '', 'spanClass' => 'text-white'],
            ['title' => t('Text Color - Black 50%'), 'menuClass' => '', 'spanClass' => 'text-black-50'],
            ['title' => t('Text Color - White 50%'), 'menuClass' => '', 'spanClass' => 'text-white-50'],

            ['title' => t('Text Spacing ======='), 'menuClass' => '', 'spanClass' => ''],
            ['title' => t('Line Height - Extra Small'), 'menuClass' => '', 'spanClass' => 'lh-1'],
            ['title' => t('Line Height - Small'), 'menuClass' => '', 'spanClass' => 'lh-sm'],
            ['title' => t('Line Height - Normal'), 'menuClass' => '', 'spanClass' => 'lh-base'],
            ['title' => t('Line Height - Large'), 'menuClass' => '', 'spanClass' => 'lh-lg'],
            ['title' => t('Monospace'), 'menuClass' => '', 'spanClass' => 'font-monospace'],

            // ['title' => t('Text Alignment ======='), 'menuClass' => '', 'spanClass' => ''],
            // ['title' => t('Text Start'), 'menuClass' => '', 'spanClass' => 'text-start'],
            // ['title' => t('Text Center'), 'menuClass' => '', 'spanClass' => 'text-center'],
            // ['title' => t('Text Right'), 'menuClass' => '', 'spanClass' => 'text-end'],

            // ['title' => t('Text Alignment Mobile ======='), 'menuClass' => '', 'spanClass' => ''],
            // ['title' => t('Text Start - Small'), 'menuClass' => '', 'spanClass' => 'text-sm-start'],
            // ['title' => t('Text Start - Medium'), 'menuClass' => '', 'spanClass' => 'text-md-start'],
            // ['title' => t('Text Start - Large'), 'menuClass' => '', 'spanClass' => 'text-lg-start'],
            // ['title' => t('Text Start - XL'), 'menuClass' => '', 'spanClass' => 'text-xl-start'],
            // ['title' => t('Text Center - Small'), 'menuClass' => '', 'spanClass' => 'text-sm-center'],
            // ['title' => t('Text Center - Medium'), 'menuClass' => '', 'spanClass' => 'text-md-center'],
            // ['title' => t('Text Center - Large'), 'menuClass' => '', 'spanClass' => 'text-lg-center'],
            // ['title' => t('Text Center - XL'), 'menuClass' => '', 'spanClass' => 'text-xl-center'],
            // ['title' => t('Text Right - Small'), 'menuClass' => '', 'spanClass' => 'text-sm-right'],
            // ['title' => t('Text Right - Medium'), 'menuClass' => '', 'spanClass' => 'text-md-right'],
            // ['title' => t('Text Right - Large'), 'menuClass' => '', 'spanClass' => 'text-lg-right'],
            // ['title' => t('Text Right - XL'), 'menuClass' => '', 'spanClass' => 'text-xl-right'],
            // ['title' => t('Text Break'), 'menuClass' => '', 'spanClass' => 'text-break'],

            //Block Level Style
            ['title' => t('Primary Button'), 'element' => ['a'], 'attributes' => ['class' => 'btn btn-primary']],
            ['title' => t('Secondary Button'), 'element' => ['a'], 'attributes' => ['class' => 'btn btn-secondary']],
            ['title' => t('Success Button'), 'element' => ['a'], 'attributes' => ['class' => 'btn btn-success']],
            ['title' => t('Danger Button'), 'element' => ['a'], 'attributes' => ['class' => 'btn btn-danger']],
            ['title' => t('Warning Button'), 'element' => ['a'], 'attributes' => ['class' => 'btn btn-warning']],
            ['title' => t('Info Button'), 'element' => ['a'], 'attributes' => ['class' => 'btn btn-info']],
            ['title' => t('Light Button'), 'element' => ['a'], 'attributes' => ['class' => 'btn btn-light']],
            ['title' => t('Dark Button'), 'element' => ['a'], 'attributes' => ['class' => 'btn btn-dark']],
            ['title' => t('Link Button'), 'element' => ['a'], 'attributes' => ['class' => 'btn btn-link']],
            ['title' => t('Remove Link Underline'), 'element' => ['a'], 'attributes' => ['class' => 'text-decoration-none']],
            ['title' => t('Heading 1 Look'), 'element' => ['p', 'li', 'td'], 'attributes' => ['class' => 'h1']],
            ['title' => t('Heading 2 Look'), 'element' => ['p', 'li', 'td'], 'attributes' => ['class' => 'h2']],
            ['title' => t('Heading 3 Look'), 'element' => ['p', 'li', 'td'], 'attributes' => ['class' => 'h3']],
            ['title' => t('Heading 4 Look'), 'element' => ['p', 'li', 'td'], 'attributes' => ['class' => 'h4']],
            ['title' => t('Heading 5 Look'), 'element' => ['p', 'li', 'td'], 'attributes' => ['class' => 'h5']],
            ['title' => t('Blockquote'), 'element' => ['blockquote'], 'attributes' => ['class' => 'blockquote']],
            ['title' => t('Unstyled'), 'element' => ['ul'], 'attributes' => ['class' => 'list-unstyled']],
            ['title' => t('Inline'), 'element' => ['ul'], 'attributes' => ['class' => 'list-inline']],
        ];
    }

    public function getThemeSupportedFeatures()
    {
        // Add only what you customize here, otherwise bedrock defaults will apply
        return [
//            Features::ACCOUNT,
//            Features::DESKTOP,
//            Features::BASICS,
//            Features::TYPOGRAPHY,
//            Features::DOCUMENTS,
//            Features::CONVERSATIONS,
//            Features::FAQ,
//            Features::PROFILE,
//            Features::NAVIGATION,
//            Features::IMAGERY,
//            Features::FORMS,
//            Features::SEARCH,
//            Features::TESTIMONIALS,
//            Features::TAXONOMY,
//            Features::CALENDAR,
        ];
    }

    /**
     * @return array
     */
    public function getThemeResponsiveImageMap()
    {
        return [
            'xs' => '0',
            'sm' => '576px',
            'md' => '768px',
            'lg' => '992px',
            'xl' => '1200px',
        ];
    }

    //Automatically load these templates for these blocks
    // public function getThemeDefaultBlockTemplates()
    // {
    // 	return [
    // 		'autonav' => 'smart_menu.php',
    // 		//'form' => 'f_forms.php',
    // 		//'search' => 'f_search.php',
    // 		//'youtube' => 'f_flex_video.php'
    //     ];
    // }

    //Any block defined by key will have the array of classes available in the advanced dropdown of the Custom Design toolbar
    // public function getThemeBlockClasses()
    // {
    //     return [
    //         'image' => [
    //             'class-name'
    //         ]
    //     ];
    // }

    // Any Area with the Key name will have the array of classes available in the advanced dropdown of the Custom Design toolbar
    // public function getThemeAreaClasses()
    // {
    //     return [
    //         'Main' => [
    //             'mycustomclass'
    //         ]
    //     ];
    // }

    //Any Area with the Key name will have the array of classes available in the advanced dropdown of the Custom Design toolbar
    // public function getThemeAreaClasses()
    // {
    //     return [
    //         'Main' => [
    //             'mycustomclass'
    //         ]
    //     ];
    // }

    //Custom Layouts available in the Layout Dropdown
    public function getThemeAreaLayoutPresets()
    {
        $presets = [
            [
                'handle' => 'left_sidebar',
                'name' => 'Left Sidebar',
                'container' => '<div class="row"></div>',
                'columns' => [
                    '<div class="col-md-4"></div>',
                    '<div class="col-md-8"></div>',
                ],
            ],
            [
                'handle' => 'right_sidebar',
                'name' => 'Right Sidebar',
                'container' => '<div class="row"></div>',
                'columns' => [
                    '<div class="col-md-8"></div>',
                    '<div class="col-md-4"></div>',
                ],
            ],
            [
                'handle' => 'split',
                'name' => '2 Columns 50/50',
                'container' => '<div class="row"></div>',
                'columns' => [
                    '<div class="col-md-6"></div>',
                    '<div class="col-md-6"></div>',
                ],
            ],
            [
                'handle' => 'three_columns',
                'name' => '3 Columns',
                'container' => '<div class="row"></div>',
                'columns' => [
                    '<div class="col-md-4"></div>',
                    '<div class="col-md-4"></div>',
                    '<div class="col-md-4"></div>',
                ],
            ],
            [
                'handle' => 'four_columns',
                'name' => '4 Columns',
                'container' => '<div class="row"></div>',
                'columns' => [
                    '<div class="col-md-3"></div>',
                    '<div class="col-md-3"></div>',
                    '<div class="col-md-3"></div>',
                    '<div class="col-md-3"></div>',
                ],
            ],
            [
                'handle' => 'six_columns',
                'name' => '6 Columns',
                'container' => '<div class="row"></div>',
                'columns' => [
                    '<div class="col-md-2"></div>',
                    '<div class="col-md-2"></div>',
                    '<div class="col-md-2"></div>',
                    '<div class="col-md-2"></div>',
                    '<div class="col-md-2"></div>',
                    '<div class="col-md-2"></div>',
                ],
            ],
        ];

        return $presets;
    }
}
