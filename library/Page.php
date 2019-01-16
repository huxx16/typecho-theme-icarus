<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
class Icarus_Page
{
    public static function printPageTitle()
    {
        // todo: i18n
        Icarus_Widget::$typechoWidget->archiveTitle(array(
            'category' => _t('分类 %s 下的文章'),
            'search' => _t('包含关键字 %s 的文章'),
            'tag' => _t('标签 %s 下的文章'),
            'author' => _t('%s 发布的文章')
        ), '', ' - ');
        Icarus_Util::$options->title();
    }
    
    public static function printHtmlLang()
    {
        if (Icarus_Util::$options->lang)
            echo 'lang="', str_replace('_', '-', Icarus_Util::$options->lang), '"';
    }

    public static function printHeader()
    {
        
    }

    public static function printBodyColumnClass()
    {
        echo 'is-', Icarus_Widget::getColumnCount(), '-column';
    }

    public static function printContainerColumnClass()
    {
        switch (Icarus_Widget::getColumnCount()) {
            case 1:
                echo 'is-12';
            case 2:
                echo 'is-8-tablet is-8-desktop is-8-widescreen';
            case 3:
                echo 'is-8-tablet is-8-desktop is-6-widescreen';
        }
    }

    public static function config($form)
    {
        $form->packTitle('head');
        $form->packInput('head_favicon', 'img/favicon.svg');
    }
}