@extends('delgont::layout.master')

@section('title', 'Create Page')
@section('pageHeading', 'Create Page')


@section('requiredJs')
<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
@endsection

@section('content')
<section class="mt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
            </div>
        </div>
        <form action="{{ route('delgont.pages.update', ['id' => $page->id]) }}" class="row" id="" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- page title, name and content -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <label for="title">Page Title</label>
                        <textarea name="page_title" id="title" class="form-control" placeholder="Page Title">{{ (old('page_title')) ? old('page_title') : $page->page_title }}</textarea>
                        <small class="text-danger page-title-error">{{ $errors->first('page_title') }}</small>
                        <textarea name="page_content" id="editor" class="form-control mt-4" cols="30" rows="10" placeholder="Page Body">{{ (old('page_content')) ? old('page_content') : $page->page_content }}</textarea>
                    </div>
                </div>
            </div>

            <!-- Column 1 -->
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">

                        <!-- Page Key -->
                        @if (count($page_keys))
                        <label for="pageKey">Page Key</label>
                        <select name="page_key" id="" class="form-control">
                            <option value="0" selected>{{ _('Select Or Ignore') }}</option>
                            @for ($i = 0; $i < count($page_keys); $i++)
                                <option value="{{ $page_keys[$i] }}">{{ _($page_keys[$i]) }}</option>
                            @endfor
                        </select>
                        <small class="text-danger page-key-error">{{ $errors->first('page_key') }}</small>
                        @endif
                       

                        <!-- page Extract Text -->
                        <label for="extractText">Page Extract Text | Description</label>
                        <textarea name="extract_text" id="extractText" cols="30" rows="5" class="mt-2 form-control" placeholder="page Extract Text">{{ old('extract_text') }}</textarea>
                        <small class="text-danger page-extract-error">{{ $errors->first('extract_text') }}</small>
                        <small>
                            Extract Text are optional hand-crafted summaries of your news content that can be used in your website
                        </small>

                        <!-- Categorize you page -->
                        <h6 class="mb-2 text-capitalize">Categorize your post</h6>
                        @if (count($categories))
                            @foreach ($categories as $category)
                                <div class="form-check {{ ($category->parent_id) ? 'ml-3' : '' }}">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="category[]" id="{{ 'category'.$category->id }}" value="{{ $category->id }}">
                                    {{ $category->name }}
                                    </label>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>

            

            <div class="col-lg-3">

                <!-- page Featured Image -->
                <div class="card shadow-sm mb-3">
                    <div class="card-header">
                        <h6>Page Featured Image</h6>
                    </div>
                    <div class="card-body p-0">
                        <img src="{{ ($page->page_featured_image != null) ? asset($page->page_featured_image) : asset('img/featured_image.png') }}" alt="" id="postFeaturedImageHolder" class="img-fluid ">
                    </div>
                    <div class="card-footer">
                        <input type="file" name="page_featured_image" id="selectpageFeaturedImage" class="render-image-on-input-file-change" data-imgHolder="#postFeaturedImageHolder" /><hr />
                        <small class="text-danger featured-image-error">
                            {{ $errors->first('page_featured_image') }}
                        </small><hr />
                        <a class="text-primary" data-toggle="collapse" href="#pageImageSize" aria-expanded="false" aria-controls="contentId">
                            Standard Recommended Image Sizes
                        </a>
                        <div class="collapse" id="pageImageSize">
                            <!-- here -->
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm mb-3">
                    <div class="card-header">
                        <h6>Page Icon</h6>
                    </div>
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <input type="file" name="page_icon" class="choose-icon-image" data-imgHolder="#iconImageHolderId" id="iconInput"  />
                            </div>
                            <div class="col-lg-6">
                                <select name="icon_format" id="iconFormat" class="form-control d-none">
                                    <option value="img" selected>Image</option>
                                    <option value="css_class">CSS Class</option>
                                </select>
                            </div>
                        </div>
                        <img src="{{ ($page->icon) ? asset($page->icon->icon) : asset('img/post_featured_image.png') }}" alt="" id="iconImageHolderId" class="w-25">
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="card shadow-sm">
                    <div class="card-body">
                        <input type="submit" value="Update" class="btn btn-sm btn-primary" />
                    </div>
                </div>

            </div>
            <div class="col-lg-12 text-center text-success success"></div>
            <div class="col-lg-12 text-center text-danger error"></div>
        </form>
    </div>
</section>
@endsection