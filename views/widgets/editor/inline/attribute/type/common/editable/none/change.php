<?php

// Текущее значение атрибута
$this->render('layouts.widgets.editor.inline.attribute.type.part.value', array(
	'class' => 'none',
	'attribute' => $attribute,
	'value' => $attribute->value
));

// Действия, применимые к атрибуту
$this->render('layouts.widgets.editor.inline.attribute.type.part.action', array(
	'action' => $this->actions->remove,
	'class'=>'del'
));