<?php

/**获取当前请求的路由
 * @return mixed
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}
