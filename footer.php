<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<footer style="margin:50px 0px">

<span id="footer-directive">

<?php $this->options->addfoot() ?>

</span>

<span>

&copy; 2024 <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>

</span>

</footer>

</body>

</html>