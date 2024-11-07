# typecho-theme-final

```
/**
 * 你的最后一个主题。接下来请专心写作吧。
 * Your final theme. Please focus on writing next.
 *
 * @package final
 * @author HoytZhang
 * @version 1.0
 * @link https://github.com/hoytzhang/
 */
```

![screenshot](./screenshot.png)

 如果你想添加导航，下面是代码（样式文件已经包含在style.css中）：

 ```
<nav>
    <p>                    
        <a<?php if ($this->is('index')): ?>  <?php endif; ?>
            href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
        <?php \Widget\Contents\Page\Rows::alloc()->to($pages); ?>
        <?php while ($pages->next()): ?>
            <a<?php if ($this->is('page', $pages->slug)): ?> <?php endif; ?>
                href="<?php $pages->permalink(); ?>"
                title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
        <?php endwhile; ?>
    </p>
</nav>
 ```

```

            DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE
                    Version 2, December 2004

 Copyright (C) 2004 Sam Hocevar <sam@hocevar.net>

 Everyone is permitted to copy and distribute verbatim or modified
 copies of this license document, and changing it is allowed as long
 as the name is changed.

            DO WHAT THE FUCK YOU WANT TO PUBLIC LICENSE
   TERMS AND CONDITIONS FOR COPYING, DISTRIBUTION AND MODIFICATION

  0. You just DO WHAT THE FUCK YOU WANT TO.

```
