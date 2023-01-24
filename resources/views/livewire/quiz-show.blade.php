<div class="">
    <h2 class="text-2xl font-bold">Questions</h2>
    {{-- {{ dd($questions) }} --}}
    <ul>
        @foreach ($questions as $question)
            <li>{{ $question->name }}</li>
        @endforeach
    </ul>
    <h2 class="text-xl font-bold">Add Question</h2>
    <form wire.sumbmit.prevent="addQuestion">
      <div class="mb-4">
        <label for="question_id" class="lms-label">Question</label>
        <select wire:model.prevent="question_id" id="question_id" class="lms-input">
            <option value="">Select a question</option>
            @foreach ($questions as $question)
            <option value="{{ $question->id }}">{{ $question->name }}</option>
            @endforeach
        </select>
      </div>
      @include('components.wire-loading-btn')
    </form>
</div>
