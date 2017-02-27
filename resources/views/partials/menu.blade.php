
<?php
$allSettings = Helpers::settingsVal(null, true);
?>
@if($allSettings != false)
@if(Helpers::fileExists($allSettings->page_menu_url))
<header class="s-header" style="background-image:url({{ asset($allSettings->page_menu_url) }})"> 
    @endif
    @else
    <header class="s-header">
        @endif

        @include('partials.menulinks')

        <div class=button-wrapper> 
            <div class=container>
                <div class=row> 
                    <a href=# class=btn-content>@yield('title')</a> 
                </div> 
            </div> 
        </div>  
    </header> 