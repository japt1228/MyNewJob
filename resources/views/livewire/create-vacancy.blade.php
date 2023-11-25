<form  class="md:w-1/2 space-y-5" action="">
    <div>
        <x-input-label for="title" :value="__('Vacancy Title')" />
        <x-text-input
        id="title" 
        class="block mt-1 w-full" 
        type="text" 
        name="title" :value="old('title')" 
        placeholder="Vacancy Title"
        />
    </div>
    <div>
        <x-input-label for="salary" :value="__('Salary')" />
        <select
        id="salary"  
        name="salary"  
        
        class="rounded-md shadow-sm border-gray-200 focus:border-indigo-200 
        focus:ring  focus:ring-indigo-200 focus:ring-opacity-50 w-full"
        >
        <option>--Salary Range--</option>
        @foreach ($salaries as $salary )
            <option value="{{$salary->id}}">{{$salary->salary}}</option> 
        @endforeach
        </select>
    </div>
    <div>
        <x-input-label for="category" :value="__('Category')" />
        <select
        id="category"  
        name="category"  
        class="rounded-md shadow-sm border-gray-200 focus:border-indigo-200 
        focus:ring  focus:ring-indigo-200 focus:ring-opacity-50 w-full"
        >
        <option>--Category--</option>
        @foreach ($categories as $category )
            <option value="{{$category->id}}">{{$category->category}}</option> 
        @endforeach
        </select>
    </div>
    <div>
        <x-input-label for="company" :value="__('Company')" />
        <x-text-input
        id="company" 
        class="block mt-1 w-full" 
        type="text" 
        name="company" :value="old('company')" 
        placeholder="Companie's name"
        />
    </div>
    <div>
        <x-input-label for="apply-before" :value="__('Apply before')" />
        <x-text-input
        id="apply-before" 
        class="block mt-1 w-full" 
        type="date" 
        name="apply-before" :value="old('apply-before')" 
        
        />
    </div>
    <div>
        <x-input-label for="description" :value="__('Description')" />
        <textarea 
        name="description" 
        placeholder="Job's description"
        class="rounded-md shadow-sm border-gray-200 focus:border-indigo-200 
        focus:ring  focus:ring-indigo-200 focus:ring-opacity-50 w-full h-70"
        ></textarea>
    </div>
    <div>
        <x-input-label for="location" :value="__('Location')" />
        <x-text-input
        id="location" 
        class="block mt-1 w-full" 
        type="text" 
        name="location" :value="old('location')" 
        placeholder="location"
        />
    </div>
    <x-primary-button>
        Publish Vacancy
    </x-primary-button>
</form>
