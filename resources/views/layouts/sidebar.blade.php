<nav class="sidebar-wrapper">

    <!-- Sidebar content start -->
    <div class="sidebar-tabs">
        @php $str = '' @endphp
        <!-- Tabs nav start -->
        <div class="nav" role="tablist" aria-orientation="vertical">
            <a href="#" class="logo">
                <img src="{{ asset('website/images/yogasna_logo.png') }}" alt="Yogasna">
            </a>
           
            @foreach ($array as $parent )
                @php $show = '';$child_str = '';$child_menu = '';
                    if(isset($parent->children)){
                        foreach($parent->children as $child){
                            $route  = route($child->href.'.index');
                            $current = ($child->parent==$parent->id&&(request()->segment(2)==$child->href||request()->segment(1)==$child->href))?'current-page':'';
                            if($child->parent==$parent->id&&(request()->segment(2)==$child->href||request()->segment(1)==$child->href)){
                                $show = 'active show';
                            }
                            $child_menu .= '<li><a  class="'.$current.'"  href="'.$route.'">'. $child->name.'</a></li>';
                        }
                    }
                    if($child_menu!=''){
                        $child_str = '<div class="sidebarMenuScroll"><div class="sidebar-menu"><ul>'.$child_menu.'</ul></div></div>';
                    }
                    $str .= '<div class="tab-pane '. $show .'" id="tab-'. $parent->id.'" role="tabpanel" aria-labelledby="'. $parent->id.'-tab">
                        <div class="tab-pane-header">'.$parent->name.'</div>'.$child_str.'</div>';
                @endphp
                
                
               
                <a class="nav-link {{ $show }}" id="{{ $parent->id }}-tab" data-bs-toggle="tab" href="#tab-{{ $parent->id }}" role="tab" aria-controls="tab-{{ $parent->id }}" aria-selected="false">
                    <i class="{{ $parent->icon }}"></i>
                    <span class="nav-link-text">{{ $parent->name }} </span>
                </a>
            @endforeach
        </div>
        <!-- Tabs nav end -->

        <!-- Tabs content start -->
        <div class="tab-content">
          @php echo  $str @endphp
        </div>
        <!-- Tabs content end -->
    </div>
    <!-- Sidebar content end -->
</nav>
<!-- Sidebar wrapper end -->