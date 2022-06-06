<div class="faq-main">
    @if(isset($faqs))
        @foreach($faqs as $faq)
            <div class="faq">
                <div class="faq-question">
                    <p>{{ $faq->title }}</p>
                    <div class="faq-stick">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24"><path d="M14,20H10V11L6.5,14.5L4.08,12.08L12,4.16L19.92,12.08L17.5,14.5L14,11V20Z"/></svg>
                    </div>
                </div>
                <div class="faq-answer">
                    <p>{!! $faq->description !!}</p>
                </div>
            </div>
        @endforeach
    @endif
</div>

