<x-layout.app-layout title="Blade to PDF">
    <div class="container mx-auto">
        <form action="/pdf" method="POST">
            @csrf
            <div class="grid grid-cols-3 gap-4 ">
                <div class="flex flex-col w-25">
                    <label class="text-lg font-medium" for="dataArea">Data</label>
                    <textarea class="w-full rounded shadow-md" name="datas" id="dataArea" cols="30" rows="10">{"name":"emircan","surname":"çetin"}</textarea>
                </div>
                <div class="flex flex-col col-span-2 w-75">
                    <label class="text-lg font-medium " for="codeArea">Blade Code</label>
                    {{--            <textarea class="w-full rounded shadow-md" name="code" id="codeArea" cols="30" rows="10"></textarea>--}}
                    <div  class="w-full rounded shadow-md" id="codeArea"> </div>
                    <input type="hidden" name="code">
                </div>
            </div>

{{--            <div  class="w-full rounded shadow-md" name="code" id="dataArea"> </div>--}}

            <button class="absolute top-5 right-10 px-5 py-3 rounded shadow-md mt-5 h-16 bg-red-400 hover:bg-red-500 cursor-pointer ">Get PDF</button>
        </form>
    </div>

    <script src="{{asset('js/app.js')}}"></script>

    <style>
        .codeflask{
            width: 50% !important;
            height: 50vh;
        }
    </style>
</x-layout.app-layout>
