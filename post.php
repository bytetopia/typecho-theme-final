<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<main>
    <h1><a href="<?php $this->options->siteUrl(); ?>"><?php $this->title(); ?></a></h1>
    <p>
        <i>
            <time datetime="<?php $this->date('c'); ?>">
                <?php $this->date('Y-m-d H:i'); ?>
            </time>
            · 
        </i>
        <?php $this->category(' · '); ?>
        <i>
        · <?php echo ViewsCounter_Plugin::getViews(); ?> 次阅读
        </i>
    </p>
    <article>
    <?php if ($this->content): ?>
        <?php $this->content(); ?>
    <?php else: ?>
        <p>此文章内容尚未发布。</p>
    <?php endif; ?>
    </article>
    <p class="tags">
        <?php $this->tags(' · ', true, ' '); ?>
    </p>
    <br/>
    <?php $this->need('comments.php'); ?>
    <br/>
</main>
<?php $this->need('footer.php'); ?>