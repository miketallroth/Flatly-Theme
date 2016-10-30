<div id="list-<?php echo $menu['Menu']['id']; ?>" class="list">
<?php
    $_options = array(
        'listTag' => 'div',     // wraps entire list
        'listClass' => 'panel panel-primary',
        'groupTag' => null,     // wraps each lead with its item set
        'groupClass' => '',
        'leadTag' => 'div',     // wraps each lead
        'leadClass' => 'panel-heading',
        'itemsetTag' => 'div',  // wraps each set of items w/o lead
        'itemsetClass' => 'panel-body',
        'itemTag' => '',        // wraps each item (link)
        'itemClass' => '',
    );
    $options = array_merge($_options, $options);

    $list = $this->List->nestedList($menu['threaded'], $options);
    echo $this->Html->tag($options['listTag'], $list, array('class' => $options['listClass']));
?>
</div>
