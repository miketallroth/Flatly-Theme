<?php
    $l = $link['Link'];
    $desc = $l['description'];

    if (empty($linkAttr['target'])) $linkAttr['target'] = '_blank';
    $linkAttr['class'] .= ' btn btn-link';

    $url = $this->Html->link($l['title'], $l['link'], $linkAttr);
    echo $url . $desc;
