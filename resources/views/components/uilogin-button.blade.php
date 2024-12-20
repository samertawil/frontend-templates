@props([
    'type' => '',
    'name' => 'حفظ',
    'divlclass'=>'',
    'iclass'=>'',
    '$iclassName'=>''
])


<div @class(['my-4 text-left mx-1 ', $divlclass])> 

    <button type="{{ $type }}"
        {{$attributes->class(['btn btn-md btn-info',
             ]) }}  >{{$name}}
               @if($iclass)
               <i class="{{$iclassName}}"></i>
               @endif
    </button>

</div>

{{-- wire:click.prevent="storeAbility" --}}
{{-- 

<x-uilogin-button :name="__('uilogin.check')" class="bg-primary text-white"
divlclass="d-grid gap-2"></x-uilogin-button> --}}

