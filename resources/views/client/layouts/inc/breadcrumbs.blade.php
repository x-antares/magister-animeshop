<!-- Breadcrumb Start -->
<div class="breadcrumbs container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumbs-container breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="/">Головна</a>
                @if(isset($subpage))
                    <a class="breadcrumb-item text-dark" href="{{ $suburl }}">{{ $subpage }}</a>
                @endif
                @if(isset($page))
                    <span class="breadcrumb-item active">{{ $page }}</span>
                @endif
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
