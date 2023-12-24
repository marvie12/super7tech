<!-- <div id="banner">
    <img src="{!! url('images/banners/OLE777_OCT_31.webp') !!}" alt="Banner">
</div> -->
<div id="banner" class="carousel slide" data-ride="carousel">
    <!-- <ol class="carousel-indicators">
        @foreach($banners as $i => $banner)
            <li data-target="#carouselIndicators" data-slide-to="{{$i}}" class="{{!$i ? 'active':''}}"></li>
        @endforeach
    </ol> -->
    <div class="carousel-inner">
        @foreach($banners as $i => $banner)
        <div class="carousel-item {{!$i ? 'active':''}}">
            <img class="d-block w-100" src="{!! $banner->img !!}" alt="{!! $banner->name !!}">
        </div>
        @endforeach
    </div>    
    <!-- <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a> -->
</div>