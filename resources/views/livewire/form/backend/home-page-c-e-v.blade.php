<x-backend.custom-form title="Edit Update Data">
    <form wire:submit.prevent="submit">
        @csrf
        @wire('debounce.200ms')
            <h4 class="my-4 text-2xl font-medium card-title" wire:ignore>
                {{ __('Descriptions') }}
            </h4>

            <x-form-textarea name="address" label="Address" />

            <x-form-input name="email" label="Email" type="email" />

            <x-form-input name="contact_no"
                label="Contact No. (If you have multiple numbers please add ; between each number)" type="text" />

            <h4 class="my-4 text-2xl font-medium card-title" wire:ignore>
                {{ __('Images') }}
            </h4>
            {{-- Logo Start --}}
            @if ($this->logo)
                <div class="my-4">
                    <div class="mb-2">
                        <label class="block">
                            <x-form-label label="Uploaded Logo Preview" />
                            <img src="{{ $this->logoIsUploaded ? $this->logo->temporaryUrl() : url('storage/' . $this->logo) }}"
                                class="mt-2" width="250" height="300">
                        </label>
                    </div>
                </div>
            @endif

            <div class="my-4">
                <div class="mb-2">
                    <label class="block">
                        <x-form-label label="Logo" />
                        <input type="file" accept="image/*" wire:model="logo"
                            class="block w-full mt-2 text-xl font-normal text-gray-500 border rounded outline-none focus:border-blue-400 focus:shadow">
                    </label>
                </div>
                <x-form-errors name="logo" />
            </div>
            {{-- Logo End --}}

            <h4 class="my-4 text-2xl font-medium card-title" wire:ignore>
                {{ __('Descriptions') }}
            </h4>

            <x-form-textarea name="features_excerpt" label="Service Excerpt" type="text" />

            <x-form-textarea name="faq_excerpt" label="FAQ Excerpt" type="text" />

            <x-form-textarea name="review_excerpt" label="Review Excerpt" type="text" />

            <x-form-textarea name="team_excerpt" label="Doctor Excerpt" type="text" />

            <h4 class="my-4 text-2xl font-medium card-title" wire:ignore>
                {{ __('Social Media Links') }}
            </h4>

            <x-form-input name="twitter" label="Twitter" type="text" />

            <x-form-input name="facebook" label="Facebook" type="text" />

            <x-form-input name="instagram" label="Instagram" type="text" />

            <x-form-input name="linkedin" label="Linkedin" type="text" />

            <x-form-input name="youtube" label="Youtube" type="text" />

            <x-form-input name="google_business" label="Google Business" type="text" />

            <h4 class="my-4 text-2xl font-medium card-title" wire:ignore>
                {{ __('Google Map & Review APIs') }}
            </h4>

            <x-form-input name="embed_map_link"
                label="Embed Map Link(Directly from Google Maps Search, Share, Embed copy src link & paste)" type="text" />

            <x-form-input name="gr_api"
                label="Google Review API(Follow the Instructions from https://googlereviews.cws.net & paste the value of load_google_reviews from 2nd script)"
                type="text" />

            <x-form-input name="gr_count_api"
                label="Google Review Count API(Follow the Instructions from https://www.review-widget.net & paste the value of data-uuid from script)"
                type="text" />
        @endwire
        <div class="mt-3">
            <x-backend.submit-button>
                {{ __('Update') }}
            </x-backend.submit-button>
        </div>
    </form>
</x-backend.custom-form>
