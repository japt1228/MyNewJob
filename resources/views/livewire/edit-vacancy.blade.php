<form  class="md:w-1/2 space-y-5" wire:submit.prevent='createVacancy'>
    <div>
        <x-input-label for="title" :value="__('Vacancy Title')" />
        <x-text-input
        id="title" 
        class="block mt-1 w-full" 
        type="text" 
        wire:model="title" 
        :value="old('title')" 
        placeholder="Vacancy Title"
        />
    </div>

    @error('title')
        <livewire:show-alert :message="$message" />
    @enderror

    <div>
        <x-input-label for="salary" :value="__('Salary')" />
        <select
        id="salary"  
        wire:model="salary"  
        
        class="rounded-md shadow-sm border-gray-200 focus:border-indigo-200 
        focus:ring  focus:ring-indigo-200 focus:ring-opacity-50 w-full"
        >
        <option>--Salary Range--</option>
        @foreach ($salaries as $salary )
            <option value="{{$salary->id}}">{{$salary->salary}}</option> 
        @endforeach
        </select>
    </div>

    @error('salary')
        <livewire:show-alert :message="$message" />
    @enderror

    <div>
        <x-input-label for="category" :value="__('Category')" />
        <select
        id="category"  
        wire:model="category"  
        class="rounded-md shadow-sm border-gray-200 focus:border-indigo-200 
        focus:ring  focus:ring-indigo-200 focus:ring-opacity-50 w-full"
        >
        <option>--Category--</option>
        @foreach ($categories as $category )
            <option value="{{$category->id}}">{{$category->category}}</option> 
        @endforeach
        </select>
    </div>

    @error('category')
        <livewire:show-alert :message="$message" />
    @enderror

    <div>
        <x-input-label for="company" :value="__('Company')" />
        <x-text-input
        id="company" 
        class="block mt-1 w-full" 
        type="text" 
        wire:model="company" :value="old('company')" 
        placeholder="Companie's name"
        />
    </div>

    @error('company')
        <livewire:show-alert :message="$message" />
    @enderror

    <div>
        <x-input-label for="apply_before" :value="__('Apply before')" />
        <x-text-input
        id="apply_before" 
        class="block mt-1 w-full" 
        type="date" 
        wire:model="apply_before" :value="old('apply_before')" 
        
        />
    </div>
    
    @error('apply_before')
        <livewire:show-alert :message="$message" />
    @enderror

    <div>
        <x-input-label for="description" :value="__('Description')" />
        <textarea 
        wire:model="description" 
        placeholder="Job's description"
        class="rounded-md shadow-sm border-gray-200 focus:border-indigo-200 
        focus:ring  focus:ring-indigo-200 focus:ring-opacity-50 w-full h-70"
        ></textarea>
    </div>

    @error('description')
        <livewire:show-alert :message="$message" />
    @enderror


    <div>
        <x-input-label for="location" :value="__('Location')" />
        <x-text-input
        id="location" 
        class="block mt-1 w-full" 
        type="text" 
        wire:model="location" :value="old('location')" 
        placeholder="location"
        />
    </div>

    @error('location')
        <livewire:show-alert :message="$message" />
    @enderror

    <x-primary-button>
        Publish Vacancy
    </x-primary-button>
</form>
