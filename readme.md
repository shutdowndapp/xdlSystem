Project started 😀😬✊🍺👏
## xdl laravel
- 添加后台模块 [Laravel-admin](https://github.com/z-song/laravel-admin)
- 模型类统一放置在 app/Models下

## 相关包

- [barryvdh/laravel-debugbar](https://github.com/barryvdh/laravel-debugbar)
- [caouecs/Laravel-lang](https://github.com/caouecs/Laravel-lang)
- [markdown编辑](https://simplemde.com/)

## sql

    users       用户信息 
    identities    用户身份
    users_identities 用户信息身份关联  (还未建)
    questions    问题信息
    techtags     问题标签
    questions_techtags      问题信息 与 问题标签关联表
    questions_comments      问题评论表
        question_id comment 
    notifications    通知表(用户提问，email通知给指定用户)
    operating   操作表(用户对问题的操作)
        int user_id int question_id bool voteup bool votedown bool collection
    posts   文章信息

    Todo: 基于问题评论表的评论
    
## 缓存修改

缓存驱动修改(两种方式任选):
- `config/cache.php`下将`'default' => env('CACHE_DRIVER', 'file')` 改为 `'default' => 'redis'`
- `.env`中`CACHE_DRIVER`改driver,为redis

具体redis配置见`config/database.php`

## 页面浏览量
> 通过redis缓存

在`App/Providers/EventServiceProvider.php`注册监听事件，`php artisan event:generate` 生成事件和监听文件
实际上可以理解`App/Event/QuestionViewCount.php`来传递数据，`App/Listeners/QuestionEventListener.php`来处理具体逻辑

## redis
> 由于redis用的较少，记录下相关信息

`redis-server`是`Redis`的服务器，启动`Redis`即运行`redis-server`；而`redis-cli`是`Redis`自带的命令行客户端

## laravel-hashids
> Generate short, unique, non-sequential ids (like YouTube and Bitly) from numbers,隐藏真实id

[laravel-hashids](https://github.com/vinkla/laravel-hashids)





[设置/删除密码](http://redisdoc.com/connection/auth.html)
## FAQ
    withInput 可以代替 old功能
    [评论系统设计](http://ratwu.com/2011/11/comment/)