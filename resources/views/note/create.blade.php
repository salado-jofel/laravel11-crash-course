<x-layout>
    <div class=" flex justify-start items-center flex-col gap-[30px] ">
        <div class=" border px-[20px] py-[10px] border-black text-[24px]">
            <a>
                <h1 class="">Create Note</h1>
            </a>
        </div>
        <div class="flex flex-col bg-yellow-500 w-[300px]  text-slate-700 rounded-2xl overflow-hidden">
            <form action="{{ route('note.store') }}" method="POST" class="w-full h-full p-[20px]">
                @csrf
                <textarea name="note" rows="10"d placeholder="Enter your notes here"
                    class="bg-white w-full h-full resize-none outline-none"></textarea>
                <div class="h-[100px] flex justify-center items-center bg-slate-500 ">
                    <div class="flex flex-row gap-[20px] text-white">
                        <a href="{{ route('note.index') }}"
                            class="bg-red-500 px-[15px]
                            py-[8px] rounded-md shadow-2xl scale-100 hover:scale-125 duration-300">CANCEL</a>
                        <a>
                            <button
                                class="bg-blue-500
                            px-[15px] py-[8px] rounded-md shadow-2xl cursor-pointer scale-100 hover:scale-125
                            duration-300">SAVE</button>
                        </a>
                    </div>
                </div>
            </form>

        </div>
    </div>

</x-layout>
