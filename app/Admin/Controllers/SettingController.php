<?php

namespace App\Admin\Controllers;

use Encore\Admin\Layout\Content;
use App\Models\Setting;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;

class SettingController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '网站配置';
    protected $id = 1;


    public function editSetting(Content $content)
    {
        return $this->edit($this->id, $content);
    }


    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Setting);

        $form->setAction(admin_url('/settings/1'));

        $form->text('site_name', __('Site name'))->default('默认站点');
        $form->text('site_url', __('Site url'))->default('http://localhost');
        $form->text('site_slogan', __('欢迎信息'));
        $form->text('site_icp', __('Site icp'));
        $form->text('site_copyright', __('Site copyright'));

        $form->tools(function ($tools) {
            $tools->disableList();
            $tools->disableDelete();
        });

        return $form;
    }
}
