<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
    <meta name="Description" content="<?php echo $this->_var['description']; ?>" />
    
    <title><?php echo $this->_var['page_title']; ?></title>
    
    
    
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="icon" href="animated_favicon.gif" type="image/gif" />
    <link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />
    <link rel="alternate" type="application/rss+xml" title="RSS|<?php echo $this->_var['page_title']; ?>" href="<?php echo $this->_var['feed_url']; ?>" />
    
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,index.js')); ?>
    <script type="text/javascript" src="themes/3cShop/js/action.js"></script>

</head>
<body>

<?php echo $this->fetch('library/page_header.lbi'); ?>
        <div class="pageWarp clearfix">
            <div id="pageRight" class="fl">
                <?php echo $this->fetch('library/cart.lbi'); ?>
                <div class="clearfix" style="margin-top:-8px;">
                    <div class="flashbox fl">
                        <?php echo $this->fetch('library/index_ad.lbi'); ?> </div>
                </div>
                
                
                <div class="clearfix blank">
                    <ul class="poplist clearfix">
                        <li><img src="themes/3cShop/images/poplist_1.jpg"/></li>
                        <li><img src="themes/3cShop/images/poplist_2.jpg"/></li>
                        <li><img src="themes/3cShop/images/poplist_3.jpg"/></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php echo $this->fetch('library/help.lbi'); ?>
        <?php if ($this->_var['img_links'] || $this->_var['txt_links']): ?>
        <div class="block blank">
            <div class="links clearfix">
                <?php $_from = $this->_var['img_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
                <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>">
                    <img src="<?php echo $this->_var['link']['logo']; ?>" alt="<?php echo $this->_var['link']['name']; ?>" />
                </a>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                <?php if ($this->_var['txt_links']): ?>
                <?php $_from = $this->_var['txt_links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'link');if (count($_from)):
    foreach ($_from AS $this->_var['link']):
?>
                <a href="<?php echo $this->_var['link']['url']; ?>" target="_blank" title="<?php echo $this->_var['link']['name']; ?>" class="linkTxt"><?php echo $this->_var['link']['name']; ?></a>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                <?php endif; ?> </div>
        </div>
        <?php endif; ?>
        <?php echo $this->fetch('library/page_footer.lbi'); ?>

</body>
</html>