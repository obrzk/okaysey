<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="row-fluid">
    <div class="span9">
        <div id="content">
            <?php echo $content; ?>
        </div><!-- content -->
    </div>
    <div class="span3">
        <div id="sidebar">
        <?php
            array_unshift($this->menu, array('label' => 'Операции'));
            $this->widget('bootstrap.widgets.TbMenu', array(
                'type'  => 'list',
                'items' => $this->menu,
            ));
        ?>
        </div><!-- sidebar -->
    </div>
</div>
<?php $this->endContent(); ?>