<div>
    {!!
        Form::textarea(
            $fieldType->getKey(),
            $fieldType->getData(),
            [
                'class' => 'textarea_content ckeditor_textarea', 
                'style' => 'height: ' . $fieldType->getSetting('height', '300') . 'px;', 
            ]
        )
    !!}
</div>
