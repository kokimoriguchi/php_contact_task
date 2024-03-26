@props(['name', 'label', 'type', 'data', 'value'])
@if ($type === 'input')
  <x-common.base_input :name="$name" :label="$label" :value="$value"/>
@elseif ($type === 'select')
  <x-common.base_select :name="$name" :label="$label" :data="$data" :value="$value"/>
@elseif ($type === 'textarea')
  <x-common.base_textarea :name="$name" :label="$label" :value="$value"/>
@elseif ($type === 'radio')
  <x-common.base_radio :name="$name" :label="$label" :data="$data" :value="$value"/>
@endif


