<div class="w-full h-full">
    {{-- The best athlete wants his opponent at his best. --}}

    <div class="flex flex-row mx-auto mt-10 ">

        @if ($userType === 'admin')
            <div class="flex flex-row items-center justify-center w-full ">

                <div class="p-4 mt-1 bg-white rounded-sm h-80">

                    <div class="flex flex-col w-full mt-2 text-xl font-bold text-center ">
                        <h4>PERSONNEL MANAGEMENT SYSTEM </h4>
                        <span class="text-green-700 ">(PMS)</span>

                        <input class="h-6 mt-2 border border-black rounded-full" wire:model.live='search' type="text">
                    </div>

                    <div class="flex flex-col gap-y-4">
                        <div class="flex flex-row mt-5 gap-x-5">
                            <label class="w-32" for="">Firstname</label>
                            <input type="text" wire:model='fname' class="w-full h-6 border border-black">
                        </div>
                        <div class="flex flex-row gap-x-5 ">
                            <label class="w-32" for="">Middlename</label>
                            <input type="text" wire:model='mname' class="w-full h-6 border border-black">
                        </div>
                        <div class="flex flex-row gap-x-5 ">
                            <label class="w-32" for="">Lastname</label>
                            <input type="text" wire:model='lname' class="w-full h-6 border border-black">
                        </div>
                        <div class="flex flex-row mt-5 gap-x-5 ">
                            <button type="submit" wire:click='add'
                                class="w-full px-3 py-1 text-white bg-green-600 rounded-full">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="w-full p-5 mt-5 bg-white">

            <h5 class="mb-5 text-2xl font-bold">User Information</h5>
            <table class="p-4">

                <tr class="p-2">
                    <th class="p-1">FIRSTNAME</th>
                    <th class="p-1">MIDDLENAME</th>
                    <th class="p-1">LASTNAME</th>
                    <th class="p-1">ACTION</th>
                </tr>

                @foreach ($users as $user)
                    <tr>
                        <td>
                            @if ($edittingID === $user->id)
                                <label for="">Firstname</label>
                                <input class="border border-black" wire:model='edittingFname' type="text">
                            @else
                                {{ $user->fname }}
                            @endif

                        </td>
                        <td>
                            @if ($edittingID === $user->id)
                                <label for="">Middlename</label>
                                <input class="border border-black" wire:model='edittingMname' type="text">
                            @else
                                {{ $user->mname }}
                            @endif
                        </td>
                        <td>
                            @if ($edittingID === $user->id)
                                <label for="">Lastname</label>
                                <input class="border border-black" wire:model='edittingLname' type="text">
                            @else
                                {{ $user->lname }}
                            @endif

                        </td>
                        <td>
                            @if ($edittingID === $user->id)
                                <button wire:click='update()'
                                    class="px-3 py-1 text-sm text-white bg-green-700 rounded-full">Save</button>
                                <button class="px-3 py-1 text-sm text-white bg-red-700 rounded-full">Cancel</button>
                            @else
                                <button wire:click='edit({{ $user->id }})'
                                    class="px-3 py-1 text-sm text-white bg-green-700 rounded-full">Edit</button>
                                <button wire:click='delete({{ $user->id }})'
                                    class="px-3 py-1 text-sm text-white bg-red-700 rounded-full">Delete</button>
                            @endif


                        </td>
                    </tr>
                @endforeach




            </table>

            <div class="w-full">
                {{ $users->links() }}
            </div>
        </div>
    </div>

</div>
