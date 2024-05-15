<x-layout>
<<<<<<< HEAD
    <div class=" flex justify-start items-center flex-col gap-[30px] ">
        <div class=" border px-[20px] py-[10px] border-black text-[24px]">
            <a>
                <h1 class="">Edit Note</h1>
            </a>
        </div>
        <div class="flex flex-col bg-yellow-500 w-[300px]  text-slate-700 rounded-2xl overflow-hidden">
            <form action="{{ route('note.update', $note) }}" method="POST" class="w-full h-full p-[20px]">
                @csrf
                @method('PUT')
                <textarea name="note" rows="10"d placeholder="Enter your notes here"
                    class="w-full h-full resize-none outline-none">{{ $note->note }}</textarea>
                <div class="h-[100px] flex justify-center items-center bg-slate-500 ">
                    <div class="flex flex-row gap-[20px] text-white">
                        <a href="{{ route('note.index', $note) }}"
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
=======
     <h1>edit</h1>
>>>>>>> parent of ab1bf61 (fix: set width and height for html and body)

</x-layout>
