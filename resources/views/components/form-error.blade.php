@props(['name'])
@error($name)
    <i class="text-red-400 text-sm">{{ $message }}</i>
@enderror
