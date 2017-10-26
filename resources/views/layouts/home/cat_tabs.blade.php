@foreach($categories as $category)

<section class="section_offset animated transparent" data-animation="fadeInDown">

        <h3>{{$category->name}}</h3>

<!-- - - - - - - - - - - - - - Tabs - - - - - - - - - - - - - - - - -->

        @if(count($category->children))
        @include('layouts.home.manage_subcat',['children' => $category->children])
        @endif
        

<!-- - - - - - - - - - - - - - End of tabs - - - - - - - - - - - - - - - - -->

</section><!--/ .section_offset -->
@endforeach
       <!-- - - - - - - - - - - - - - End of Medicine & Health - - - - - - - - - - - - - - - - -->

