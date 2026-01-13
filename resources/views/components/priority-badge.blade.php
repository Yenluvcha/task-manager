@props(['priority'])

@switch($priority)
@case('low')
<span
    class="inline-flex items-center px-2 py-1 text-xs font-medium text-blue-500 rounded-md bg-blue-500/10 inset-ring inset-ring-blue-500/30">
    <span class="h-1.5 w-1.5 bg-blue-500 rounded-full me-1"></span>
    Low
</span>
@break
@case('medium')
<span
    class="inline-flex items-center px-2 py-1 text-xs font-medium text-yellow-500 rounded-md bg-yellow-500/10 inset-ring inset-ring-yellow-500/30">
    <span class="h-1.5 w-1.5 bg-yellow-500 rounded-full me-1"></span>
    Medium
</span>
@break
@case('high')
<span
    class="inline-flex items-center px-2 py-1 text-xs font-medium text-red-500 rounded-md bg-red-500/10 inset-ring inset-ring-red-500/30">
    <span class="h-1.5 w-1.5 bg-red-500 rounded-full me-1"></span>
    High
</span>
@break
@case('urgent')
<span
    class="inline-flex items-center px-2 py-1 text-xs font-medium text-purple-500 rounded-md bg-purple-500/10 inset-ring inset-ring-purple-500/30">
    <span class="h-1.5 w-1.5 bg-purple-500 rounded-full me-1"></span>
    Urgent
</span>
@break

@default

@endswitch