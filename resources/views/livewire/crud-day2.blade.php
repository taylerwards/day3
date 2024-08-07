{{-- navigation --}}
<div class="p-2 bg-gray-500 ">
    <div class="flex items-start justify-start mt-2 ">
        <div class="flex flex-row gap-y-2">
            @if ($userType === 'admin')
                <a href="/admin" wire:navigate class="px-3 py-1 text-white bg-green-800 hover:bg-green-700 ">Admin</a>
            @endif

            <a wire:click="logout" class="px-3 py-1 text-white bg-green-800 hover:bg-green-700 ">Logout</a>
        </div>
    </div>
</div>
