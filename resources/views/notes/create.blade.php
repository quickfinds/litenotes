<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-gray-200 shadow-sm sm:rounded-lg">
                @foreach ($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
                <form action="{{route('notes.store')}}" method="POST" >
                    @csrf
                    <x-input type="text" name="title" field="title" placeholder="title" class="w-full" autocomplete="off" :value="@old('title')" ></x-input>
                    
                    <x-textarea name="text" rows="10" placeholder="start typing here !" class="w-full" :value="@old('text')"></x-textarea>
                    @error('text')
                        <div class="text-red-600 text-sm">{{$message}}</div>
                    @enderror
                    <x-button class="mt-6">Save Note</x-button>
                </form>
            </div>
         </div>
    </div>
</x-app-layout>
  