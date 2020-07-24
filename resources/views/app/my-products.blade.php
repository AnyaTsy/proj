@extends('layouts.backend')
@section('css_after')
    <style>
        .cropped-text {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
@endsection
@section('content')
    <!-- Page Content -->
    <div class="content content-boxed">
        <div class="row row-deck">
            @forelse($products as $product)
                <div class="col-md-4">
                    <a class="block block-rounded block-transparent d-md-flex align-items-md-stretch bg-image js-click-ripple-enabled" style="background-image: url({{$product->main_image_path}}); overflow: hidden; position: relative; z-index: 1;" href="/my-products/{{$product->slug}}" data-toggle="click-ripple">
                        <div class="block-content block-content-full bg-black-50">
                                    <span class="d-inline-block py-1 px-2 rounded bg-black-75 font-size-sm font-w700 text-uppercase text-white">
                                       {{$product->getTranslation('label', lang())}}
                                    </span>
                            <div class="py-6">
                                <h3 class="font-w700 text-white mb-1">{{ $product->getTranslation('name', lang()) }}</h3>
                                <p class="font-size-sm font-italic text-muted mb-0 cropped-text text-white">
                                    {{$product->getTranslation('description', lang())}}
                                </p>
                            </div>
                            <span class="font-size-sm font-w700 text-uppercase text-white-75">
                               {{$product->lectures_count}} {{$product->lectures_count_name}} | {{$product->tasks_count}} {{$product->tasks_count_name}}
                            </span>
                        </div>
                    </a>
                </div>
            @empty
                <div class="col-md-12">
                    <div class="block">
                        <div class="block-content">
                            <p>{{ t('Пока что вы не приобрели ни одного продукта.') }}</p>
                        </div>
                    </div>
                </div>
            @endforelse

        </div>
    </div>
    <!-- END Page Content -->
@endsection
@section('js_after')

@endsection
