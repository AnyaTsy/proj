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
    <style scoped>
        .gallery.editable .gallery-item {
            cursor: pointer;
        }

        .gallery .gallery-item-image.gallery-item {
            width: 200px;
            height: 200px;
        }

        .gallery.editable .gallery-item {
            cursor: pointer;
        }

        .gallery .gallery-item {
            float: left;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            border-radius: 10px;
            background-color: #f9fafc;
        }

        .gallery .gallery-item-image.gallery-item .gallery-item-info {
            display: none;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: #f9fafc;
            border-radius: 10px;
            position: absolute;
            z-index: 10;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }

        .gallery .gallery-item .gallery-item-info {
            display: flex;
            background-color: #f9fafc;
            border-radius: 10px;
            z-index: 10;
        }

        .gallery .gallery-item-image.gallery-item .gallery-image {
            -o-object-fit: contain;
            object-fit: contain;
            display: block;
            max-height: 100%;
            border-radius: 10px;
        }

        .gallery-item-file.gallery-item {
            width: 100%;
        }

        .gallery-item-file.gallery-item .gallery-item-info a .label {
            flex-grow: 1;
            color: #495057;
        }

    </style>
@endsection
@section('content')
    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">{{$lecture->name}}</h1>
                <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a style="font-size: 1rem; font-weight: 400; line-height: 1.5; color: #495057;"
                               href="/my-products/{{$lecture->product->slug}}">{{$lecture->product->name}}</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{$lecture->name}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- END Hero -->
    <div class="content" id="vue-lectures">
        <!-- Horizontal Navigation - Hover Centered -->
        <div class="bg-white p-3 rounded push">
            <!-- Toggle Navigation -->
            <div class="d-lg-none">
                <!-- Class Toggle, functionality initialized in Helpers.coreToggleClass() -->
                <button type="button" class="btn btn-block btn-light d-flex justify-content-between align-items-center"
                        data-toggle="class-toggle" data-target="#horizontal-navigation-hover-centered"
                        data-class="d-none">
                    Меню
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <!-- END Toggle Navigation -->

            <!-- Navigation -->
            <div id="horizontal-navigation-hover-centered" class="d-none d-lg-block mt-2 mt-lg-0">
                <ul class="nav-main nav-main-horizontal nav-main-hover nav-main-horizontal-center">
                    <li class="nav-main-item">
                        <a class="nav-main-link " :class="showElement == 'lecture' ? ' active' : ''"
                           href="javascript:void(0)" @click="showElement = 'lecture'">
                            <i class="nav-main-link-icon fas fa-book"></i>
                            <span class="nav-main-link-name">Лекция</span>
                        </a>
                    </li>
                    @foreach($lecture->tasks as $k => $task)
                        <li class="nav-main-item">
                            <a class="nav-main-link " :class="showElement == 'task-{{$k}}' ? ' active' : ''"
                               href="javascript:void(0)" @click="showElement = 'task-{{$k}}'">
                                <i class="nav-main-link-icon fas fa-tasks"></i>
                                <span class="nav-main-link-name">Задание {{$k + 1}}</span>
                            </a>
                        </li>
                    @endforeach
                    <li class="nav-main-item">
                        <a class="nav-main-link " :class="showElement == 'action' ? ' active' : ''"
                           href="javascript:void(0)" @click="showElement = 'action'">
                            <i class="nav-main-link-icon fas fa-spinner"></i>
                            <span class="nav-main-link-name">Прогресс</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END Navigation -->
        </div>
        <!-- END Horizontal Navigation - Hover Centered -->

        <!-- Dummy content -->
        <div class="block block-rounded block-bordered d-lg-block">
            <div class="block-content">
                <div :style="showElement == 'lecture' ? '' : 'display: none'">
                    @if($lecture->is_frame)
                        <iframe id="iframe-new"
                                src="/frame/{{$lecture->id}}"
                                style="width: 100%; height: {{$lecture->frame_height}}px"
                                allowfullscreen="allowfullscreen"
                                frameBorder="0"
                                mozallowfullscreen="mozallowfullscreen"
                                msallowfullscreen="msallowfullscreen"
                                oallowfullscreen="oallowfullscreen"
                                webkitallowfullscreen="webkitallowfullscreen">

                        </iframe>
                @else
                    @include($lecture->view_name)
                @endif
                <!-- Files Content -->
                    <div class="gallery editable" slot="value">
                        <div class="gallery-list clearfix">
                            @foreach($lecture->getMedia('multi_files_collection') as $file)
                                <div class="gallery-item gallery-item-file mb-3 p-3 mr-3" style="border-radius: 0;">
                                    <div class="gallery-item-info">
                                        <a href="{{$file->getUrl()}}" target="_blank" class="download mr-2"
                                           draggable="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                 viewBox="0 0 20 20" aria-labelledby="search" role="presentation"
                                                 class="fill-current">
                                                <path fill-rule="nonzero"
                                                      d="M14.32 12.906l5.387 5.387a1 1 0 0 1-1.414 1.414l-5.387-5.387a8 8 0 1 1 1.414-1.414zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                                            </svg>
                                        </a>
                                        <a href="{{$file->getUrl()}}" class="download mr-2" draggable="false"
                                           target="_blank">
                                            <span class="label">{{$file->file_name}}</span>
                                        </a>

                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!--  End of Files Tab Content -->
                </div>
                @foreach($lecture->tasks as $k => $task)
                    <div :style="showElement == 'task-{{$k}}' ? '' : 'display: none'" id="task-{{$k}}">
                    @include($task->view_name)
                    <!-- Files Tab Content -->
                        <div class="gallery editable" slot="value">
                            <div class="gallery-list clearfix">
                                @foreach($task->getMedia('multi_files_collection') as $file)
                                    <div class="gallery-item gallery-item-file mb-3 p-3 mr-3" style="border-radius: 0;">
                                        <div class="gallery-item-info">
                                            <a href="{{$file->getUrl()}}" target="_blank" class="download mr-2"
                                               draggable="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                     viewBox="0 0 20 20" aria-labelledby="search" role="presentation"
                                                     class="fill-current">
                                                    <path fill-rule="nonzero"
                                                          d="M14.32 12.906l5.387 5.387a1 1 0 0 1-1.414 1.414l-5.387-5.387a8 8 0 1 1 1.414-1.414zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                                                </svg>
                                            </a>
                                            <a href="{{$file->getUrl()}}" class="download mr-2" draggable="false"
                                               target="_blank">
                                                <span class="label">{{$file->file_name}}</span>
                                            </a>

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!--  End of Files Tab Content -->
                    </div>
                @endforeach


                <div :style="showElement == 'action' ? '' : 'display: none'">
                    <div class="progress push">
                        <input type="hidden" id="progress-bar-value" class="js-bar-randomize">
                        <div class="progress-bar" role="progressbar" style="width: {{$lecture->getProgress()}}%;"
                             aria-valuenow="{{$lecture->getProgress()}}"
                             aria-valuemin="0" aria-valuemax="100">
                            <span class="font-size-sm font-w600">{{$lecture->getProgress()}}%</span>
                        </div>
                    </div>
                    <div class="form-group row items-push mb-0">
                        <div class="col-md-6">
                            <div class="custom-control custom-block custom-control-success">
                                <input type="checkbox" class="custom-control-input" id="lecture-checkbox"
                                       name="lecture-checkbox" @change="saveAction('lecture', {{$lecture->id}})"
                                       @if($lecture->checkForInteraction('lecture')) checked @endif>
                                <label class="custom-control-label" for="lecture-checkbox">
                                                    <span class="d-block text-center">
                                                        <i class="fas fa-book fa-2x mb-2 text-black-50"></i><br>
                                                        Изучение Лекции
                                                    </span>
                                </label>
                                <span class="custom-block-indicator">
                                    <i class="fa fa-check"></i>
                                </span>
                            </div>
                        </div>
                        @foreach($lecture->tasks as $k => $task)
                            <div class="col-md-6">
                                <div class="custom-control custom-block custom-control-success">
                                    <input type="checkbox" class="custom-control-input" id="task-{{$k}}-checkbox"
                                           name="task-{{$k}}-checkbox"
                                           @change="saveAction('task-{{$task->id}}', {{$lecture->id}})"
                                           @if($lecture->checkForInteraction('task-' . $task->id)) checked @endif>
                                    <label class="custom-control-label" for="task-{{$k}}-checkbox">
                                                    <span class="d-block text-center">
                                                        <i class="fas fa-tasks fa-2x mb-2 text-black-50"></i><br>
                                                        Выполнение Задания №{{$k + 1}}
                                                    </span>
                                    </label>
                                    <span class="custom-block-indicator">
                                    <i class="fa fa-check"></i>
                                </span>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>

            </div>
        </div>
        <!-- END Dummy content -->
    </div>
@endsection
@section('js_after')
    <script src="/js/pages/be_ui_progress.min.js"></script>
@endsection
