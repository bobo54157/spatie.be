<section id="postcards" class="section pt-0 -mt-8 overflow-visible">
    <div class="wrap-gallery items-start">
        @foreach($postcards as $postcard)
                @include('pages.open-source.partials.postcard')
        @endforeach
    </div>
</section>
