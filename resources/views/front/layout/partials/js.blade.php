@if($agent->isDesktop())
    <script src="{{mix('front/desktop/js/app.js')}}" type="module"></script>
@endif 

@if($agent->isMobile())
    <script src="{{mix('front/mobile/js/app.js')}}" type="module"></script>
@endif   
