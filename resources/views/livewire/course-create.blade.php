<form wire:submit.prevent="formSubmit">
   <div class="mb-6">
        @include('components.form-field',[
            'name' => 'name',
            'label'   => 'Name',
            'type'=> 'text',
            'placeholder'=> 'Enter Name',
            'required'      => 'required',
        ])
   </div>
   <div class="mb-6">
        @include('components.form-field',[
            'name' => 'description',
            'label'   => 'Description',
            'type'=> 'textarea',
            'placeholder'=> 'Enter Description',
            'required'      => true,
        ])
    </div>
    <div class="mb-6">
        @include('components.form-field',[
            'name' => 'price',
            'label'   => 'Price',
            'type'=> 'number',
            'placeholder'=> 'Add a price',
            'required'      => true,
        ])
    </div>
    <div class="flex justify-between items-center">
        <div class="mb-6 min-w-max">
            <label for="days" class="font-bold">Days</label>
            <div class="flex flex-wrap -mx-4">
                @foreach ($days as $day )
                <div class="flex px-4 min-w-max items-center">
                    <input wire:model.lazy="selectedDays" type="checkbox" class="mr-2" id="{{ $day }}" value="{{ $day }}"> <label for="{{ $day }}">{{ ucfirst($day) }}</label>
                </div>
                @endforeach
            </div>
        </div>
        <div class="min-w-max">
            @include('components.form-field',[
                'name' => 'time',
                'label'   => 'Time',
                'type'=> 'time',
                'placeholder'=> 'Enter Time',
                'required'      => true,
            ])
        </div>
        <div class="min-w-max">
            @include('components.form-field',[
                'name' => 'end_time',
                'label'   => 'End Time',
                'type'=> 'date',
                'placeholder'=> 'Enter End Time',
                'required'      => true,
            ])
        </div>
    </div>

    @include('components.wire-loading-btn')
</form>
