@if($agent->isDesktop())
    <script src="{{mix('admin/desktop/js/app.js')}}" type="module"></script>
@endif 

@if($agent->isMobile())
    <script src="{{mix('admin/mobile/js/app.js')}}" type="module"></script>
@endif   
