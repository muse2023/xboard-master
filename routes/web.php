<?php

use App\Services\ThemeService;
use App\Services\UpdateService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//首页的路由并且自定义
Route::get('/' . config('pricing'), function () {
    return view('pricing', [
    'title' => config('v2board.app_name', 'BigME'),
    'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
    'theme_header' => config('v2board.frontend_theme_header', 'dark'),
    'theme_color' => config('v2board.frontend_theme_color', 'default'),
    'background_url' => config('v2board.frontend_background_url'),
    'version' => config('app.version'),
    'logo' => config('v2board.logo')
    ]);
});

//特性
// Route::get('/features' . config('features'), function () {
//     return view('features', [
//         'title' => config('v2board.app_name', 'BigME'),
//         'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
//         'theme_header' => config('v2board.frontend_theme_header', 'dark'),
//         'theme_color' => config('v2board.frontend_theme_color', 'default'),
//         'background_url' => config('v2board.frontend_background_url'),
//         'version' => config('app.version'),
//         'logo' => config('v2board.logo')
//     ]);
// });

//价格
// Route::get('/pricing' . config('pricing'), function () {
//     return view('pricing', [
//         'title' => config('v2board.app_name', 'BigME'),
//         'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
//         'theme_header' => config('v2board.frontend_theme_header', 'dark'),
//         'theme_color' => config('v2board.frontend_theme_color', 'default'),
//         'background_url' => config('v2board.frontend_background_url'),
//         'version' => config('app.version'),
//         'logo' => config('v2board.logo')
//     ]);
// });


//特别优惠
Route::get('/special-offers' . config('special-offers'), function () {
return view('special-offers', [
    'title' => config('v2board.app_name', 'BigME'),
    'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
    'theme_header' => config('v2board.frontend_theme_header', 'dark'),
    'theme_color' => config('v2board.frontend_theme_color', 'default'),
    'background_url' => config('v2board.frontend_background_url'),
    'version' => config('app.version'),
    'logo' => config('v2board.logo')
]);
});

//使用条款
Route::get('/aup' . config('aup'), function () {
return view('aup', [
    'title' => config('v2board.app_name', 'BigME'),
    'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
    'theme_header' => config('v2board.frontend_theme_header', 'dark'),
    'theme_color' => config('v2board.frontend_theme_color', 'default'),
    'background_url' => config('v2board.frontend_background_url'),
    'version' => config('app.version'),
    'url' => config('v2board.app_url'),
    'logo' => config('v2board.logo')
]);
});

//服务水平保障
Route::get('/sla' . config('sla'), function () {
return view('sla', [
    'title' => config('v2board.app_name', 'BigME'),
    'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
    'theme_header' => config('v2board.frontend_theme_header', 'dark'),
    'theme_color' => config('v2board.frontend_theme_color', 'default'),
    'background_url' => config('v2board.frontend_background_url'),
    'version' => config('app.version'),
    'url' => config('v2board.app_url'),
    'logo' => config('v2board.logo')
]);
});

//兼容客户端
// Route::get('/compatible-apps' . config('compatible-apps'), function () {
//     return view('compatible-apps', [
//         'title' => config('v2board.app_name', 'BigME'),
//         'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
//         'theme_header' => config('v2board.frontend_theme_header', 'dark'),
//         'theme_color' => config('v2board.frontend_theme_color', 'default'),
//         'background_url' => config('v2board.frontend_background_url'),
//         'version' => config('app.version'),
//         'url' => config('v2board.app_url'),
//         'logo' => config('v2board.logo')
//     ]);
// });

//协议使用
// Route::get('/protocol-use' . config('protocol-use'), function () {
//     return view('protocol-use', [
//         'title' => config('v2board.app_name', 'BigME'),
//         'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
//         'theme_header' => config('v2board.frontend_theme_header', 'dark'),
//         'theme_color' => config('v2board.frontend_theme_color', 'default'),
//         'background_url' => config('v2board.frontend_background_url'),
//         'version' => config('app.version'),
//         'url' => config('v2board.app_url'),
//         'logo' => config('v2board.logo')
//     ]);
// });

//流媒体解锁
// Route::get('/streaming' . config('streaming'), function () {
//     return view('streaming', [
//         'title' => config('v2board.app_name', 'BigME'),
//         'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
//         'theme_header' => config('v2board.frontend_theme_header', 'dark'),
//         'theme_color' => config('v2board.frontend_theme_color', 'default'),
//         'background_url' => config('v2board.frontend_background_url'),
//         'version' => config('app.version'),
//         'url' => config('v2board.app_url'),
//         'logo' => config('v2board.logo')
//     ]);
// });

//推荐计划
Route::get('/referral-program' . config('referral-program'), function () {
return view('referral-program', [
    'title' => config('v2board.app_name', 'BigME'),
    'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
    'theme_header' => config('v2board.frontend_theme_header', 'dark'),
    'theme_color' => config('v2board.frontend_theme_color', 'default'),
    'background_url' => config('v2board.frontend_background_url'),
    'version' => config('app.version'),
    'url' => config('v2board.app_url'),
    'logo' => config('v2board.logo')
]);
});

//视频创作者计划
// Route::get('/video-creator' . config('video-creator'), function () {
//     return view('video-creator', [
//         'title' => config('v2board.app_name', 'BigME'),
//         'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
//         'theme_header' => config('v2board.frontend_theme_header', 'dark'),
//         'theme_color' => config('v2board.frontend_theme_color', 'default'),
//         'background_url' => config('v2board.frontend_background_url'),
//         'version' => config('app.version'),
//         'url' => config('v2board.app_url'),
//         'logo' => config('v2board.logo')
//     ]);
// });

//问题和答案 就是faq
Route::get('/faq' . config('faq'), function () {
return view('faq', [
    'title' => config('v2board.app_name', 'BigME'),
    'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
    'theme_header' => config('v2board.frontend_theme_header', 'dark'),
    'theme_color' => config('v2board.frontend_theme_color', 'default'),
    'background_url' => config('v2board.frontend_background_url'),
    'version' => config('app.version'),
    'url' => config('v2board.app_url'),
    'logo' => config('v2board.logo')
]);
});


//联系我们 -- 要改下面的telegrampindao 和telegramqunliao 的url地址 就是引号内的
Route::get('/contact-us' . config('contact-us'), function () {
return view('contact-us', [
    'title' => config('v2board.app_name', 'BigME'),
    'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
    'theme_header' => config('v2board.frontend_theme_header', 'dark'),
    'theme_color' => config('v2board.frontend_theme_color', 'default'),
    'background_url' => config('v2board.frontend_background_url'),
    'version' => config('app.version'),
    'url' => config('v2board.app_url'),
    'telegrampindao' => 'https://bit.ly/3AIUWem',
    'telegramqunliao' => 'https://bit.ly/3z2efim',
    'logo' => config('v2board.logo')
]);
});

//关于我们
// Route::get('/about-us' . config('about-us'), function () {
//     return view('about-us', [
//         'title' => config('v2board.app_name', 'BigME'),
//         'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
//         'theme_header' => config('v2board.frontend_theme_header', 'dark'),
//         'theme_color' => config('v2board.frontend_theme_color', 'default'),
//         'background_url' => config('v2board.frontend_background_url'),
//         'version' => config('app.version'),
//         'url' => config('v2board.app_url'),
//         'telegrampindao' => 'https://bit.ly/3AIUWem',
//         'telegramqunliao' => 'https://bit.ly/3z2efim',
//         'logo' => config('v2board.logo')
//     ]);
// });

//隐私政策
Route::get('/privacy' . config('privacy'), function () {
return view('privacy', [
    'title' => config('v2board.app_name', 'BigME'),
    'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
    'theme_header' => config('v2board.frontend_theme_header', 'dark'),
    'theme_color' => config('v2board.frontend_theme_color', 'default'),
    'background_url' => config('v2board.frontend_background_url'),
    'version' => config('app.version'),
    'url' => config('v2board.app_url'),
    'telegrampindao' => 'https://bit.ly/3AIUWem',
    'telegramqunliao' => 'https://bit.ly/3z2efim',
    'logo' => config('v2board.logo')
]);
});

//服务条款
Route::get('/tos' . config('tos'), function () {
return view('tos', [
    'title' => config('v2board.app_name', 'BigME'),
    'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
    'theme_header' => config('v2board.frontend_theme_header', 'dark'),
    'theme_color' => config('v2board.frontend_theme_color', 'default'),
    'background_url' => config('v2board.frontend_background_url'),
    'version' => config('app.version'),
    'url' => config('v2board.app_url'),
    'telegrampindao' => 'https://bit.ly/3AIUWem',
    'telegramqunliao' => 'https://bit.ly/3z2efim',
    'logo' => config('v2board.logo')
]);
});

//通用数据保护条例
Route::get('/gdpr' . config('gdpr'), function () {
return view('gdpr', [
    'title' => config('v2board.app_name', 'BigME'),
    'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
    'theme_header' => config('v2board.frontend_theme_header', 'dark'),
    'theme_color' => config('v2board.frontend_theme_color', 'default'),
    'background_url' => config('v2board.frontend_background_url'),
    'version' => config('app.version'),
    'url' => config('v2board.app_url'),
    'telegrampindao' => 'https://bit.ly/3AIUWem',
    'telegramqunliao' => 'https://bit.ly/3z2efim',
    'logo' => config('v2board.logo')
]);
});

//服务特定条款
Route::get('/service-terms' . config('service-terms'), function () {
return view('service-terms', [
    'title' => config('v2board.app_name', 'BigME'),
    'theme_sidebar' => config('v2board.frontend_theme_sidebar', 'light'),
    'theme_header' => config('v2board.frontend_theme_header', 'dark'),
    'theme_color' => config('v2board.frontend_theme_color', 'default'),
    'background_url' => config('v2board.frontend_background_url'),
    'version' => config('app.version'),
    'url' => config('v2board.app_url'),
    'telegrampindao' => 'https://bit.ly/3AIUWem',
    'telegramqunliao' => 'https://bit.ly/3z2efim',
    'logo' => config('v2board.logo')
]);
});

Route::get('/user', function (Request $request) {
    if (admin_setting('app_url') && admin_setting('safe_mode_enable', 0)) {
        if ($request->server('HTTP_HOST') !== parse_url(admin_setting('app_url'))['host']) {
            abort(403);
        }
    }

    $theme = admin_setting('frontend_theme', 'Xboard');
    $themeService = new ThemeService();

    try {
        // 检查主题是否存在，不存在则尝试切换到默认主题
        if (!$themeService->exists($theme)) {
            if ($theme !== 'Xboard') {
                Log::warning('Theme not found, switching to default theme', ['theme' => $theme]);
                $theme = 'Xboard';
                admin_setting(['frontend_theme' => $theme]);
            }
            $themeService->switch($theme);
        }

        // 检查主题视图文件是否存在
        if (!$themeService->getThemeViewPath($theme)) {
            throw new Exception('主题视图文件不存在');
        }

        // 检查主题是否已复制到public目录
        $publicThemePath = public_path('theme/' . $theme);
        if (!File::exists($publicThemePath)) {
            $themePath = $themeService->getThemePath($theme);
            if (!$themePath || !File::copyDirectory($themePath, $publicThemePath)) {
                throw new Exception('主题初始化失败');
            }
            Log::info('Theme initialized in public directory', ['theme' => $theme]);
        }

        $renderParams = [
            'title' => admin_setting('app_name', 'Xboard'),
            'theme' => $theme,
            'theme_path' => '/theme/netsp/assets/',
            'theme_path' => '/theme/' . admin_setting('frontend_theme', 'v2board') . '/assets/', 
            'version' => app(UpdateService::class)->getCurrentVersion(),
            'description' => admin_setting('app_description', 'Xboard is best'),
            'logo' => admin_setting('logo'),
            'theme_config' => $themeService->getConfig($theme)
        ];
        return view('theme::' . $theme . '.dashboard', $renderParams);
    } catch (Exception $e) {
        Log::error('Theme rendering failed', [
            'theme' => $theme,
            'error' => $e->getMessage()
        ]);
        abort(500, '主题加载失败');
    }
});

//TODO:: 兼容
Route::get('/' . admin_setting('secure_path', admin_setting('frontend_admin_path', hash('crc32b', config('app.key')))), function () {
    return view('admin', [
        'title' => admin_setting('app_name', 'XBoard'),
        'theme_sidebar' => admin_setting('frontend_theme_sidebar', 'light'),
        'theme_header' => admin_setting('frontend_theme_header', 'dark'),
        'theme_color' => admin_setting('frontend_theme_color', 'default'),
        'background_url' => admin_setting('frontend_background_url'),
        'version' => app(UpdateService::class)->getCurrentVersion(),
        'logo' => admin_setting('logo'),
        'secure_path' => admin_setting('secure_path', admin_setting('frontend_admin_path', hash('crc32b', config('app.key'))))
    ]);
});

Route::get('/' . (admin_setting('subscribe_path', 's')) . '/{token}', [\App\Http\Controllers\V1\Client\ClientController::class, 'subscribe'])
    ->middleware('client')
    ->name('client.subscribe');