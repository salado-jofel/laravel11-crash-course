<x-layout>
    <div class=" flex justify-start items-center flex-col gap-[30px] ">
        <div class=" border px-[20px] py-[10px] border-black text-[24px]">
            <a>
                <h1 class="">View Note</h1>
            </a>
        </div>
        <div
            class="flex flex-col bg-yellow-500 w-[400px]  text-slate-700 rounded-2xl overflow-hidden items-center pt-[20px]">
            <div>{{ $note->created_at }}</div>
            <form action="{{ route('note.store') }}" method="POST" class="w-full h-full p-[20px]">
                <textarea disabled name="note" rows="10"d placeholder="Enter your notes here"
                    class="bg-white w-full h-full resize-none outline-none">{{ $note->note }}</textarea>
            </form>
            <div class="h-[100px] flex justify-center items-center bg-slate-500 w-full">
                <div class="flex flex-row text-white  items-center justify-center w-full gap-[20px]">
                    <a href="{{ route('note.index') }}"
                        class="bg-orange-500 w-[87.73px]
                            py-[8px] rounded-md shadow-2xl scale-100 hover:scale-125 duration-300 text-center">CANCEL</a>
                    <a href="{{ route('note.edit', $note) }}"
                        class="bg-blue-500 w-[87.73px]
                            py-[8px] rounded-md shadow-2xl scale-100 hover:scale-125 duration-300 text-center">EDIT</a>
                    <form action="{{ route('note.destroy', $note) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button
                            class="bg-red-500  w-[87.73px]
                            py-[8px] rounded-md shadow-2xl scale-100 hover:scale-125 duration-300 text-center">DELETE</button>
                    </form>
                </div>
            </div>
            </div?>
        </div>

</x-layout>
