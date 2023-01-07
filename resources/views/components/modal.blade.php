@props(['formAction' => false])

<div>
    @if($formAction)
        <form wire:submit.prevent="{{ $formAction }}">
    @endif
            <div class="p-4 px-sm-6 py-sm-4">
                @if(isset($title))
                    <h3 class="text-lg text-dark">
                        {{ $title }}
                    </h3>
                @endif
            </div>
            <div class="bg-white px-4 sm:p-6">
                <div class="space-y-6">
                    {{ $content }}
                </div>
            </div>

            <div class="pb-5 px-4 d-flex justify-content-end">
                {{ $buttons }}
            </div>
    @if($formAction)
        </form>
    @endif
</div>