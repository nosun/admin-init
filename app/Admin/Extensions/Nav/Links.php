<?php

namespace App\Admin\Extensions\Nav;

class Links
{
    public function __toString()
    {
        $url = route('admin.settings');
        $index_url = route('pages.index');
        $cache_clear_url = route('admin.cache-clear');
        return <<<HTML

<li>
    <a href="{$url}">
      <i class="fa fa-gears"></i>
      <span> 站点设置</span>
    </a>
</li>

<li>
    <a href="{$cache_clear_url}">
      <i class="fa fa-trash"></i>
      <span> 清理缓存 </span>
    </a>
</li>


<li>
    <a href="{$index_url}" target="_blank">
      <i class="fa fa-home"></i>
      <span> 前台首页 </span>
    </a>
</li>


HTML;
    }
}