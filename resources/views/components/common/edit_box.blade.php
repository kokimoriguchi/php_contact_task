@props(['name', 'label', 'type', 'data'])
@if ($type === 'input')
  <x-common.base_input :name="$name" :label="$label"/>
@elseif ($type === 'select')
  <x-common.base_select :name="$name" :label="$label" :data="$data"/>
@elseif ($type === 'textarea')
  <x-common.base_textarea :name="$name" :label="$label"/>
@elseif ($type === 'radio')
  <x-common.base_radio :name="$name" :label="$label" :data="$data"/>
@endif


