@extends('delgont::layout.master')

@section('title', 'Posts | Create')
@section('pageHeading', 'Create Post')

@section('requiredJs')
<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
@endsection




@section('content')
<section class="mt-4">
    <div class="container-fluid">
        <!-- Create Post Form -->
        <form action="{{ route('delgont.posts.store') }}" class="row" id="createPostForm" method="POST" enctype="multipart/form-data">
            @csrf
           
            <!-- Column 1 -->
            <div class="col-lg-3">
                <div class="card shadow-sm">
                    <div class="card-body">

                        <!-- Post Type -->
                        <label for="postType">Post Type</label>
                        <select name="post_type" id="postType" class="form-control w-100 text-capitalize">
                            @if ($count = count($standard_posts))
                                @for ($i = 0; $i < $count; $i++)
                                    <option value="{{ $standard_posts[$i] }}" {{ ($standard_posts[$i] == old('post_type') ? 'selected' : '') }}>{{ str_replace('_', ' ', $standard_posts[$i]) }}</option>
                                @endfor
                            @endif
                        </select>
                        <small class="text-danger">{{ $errors->first('post_type') }}</small><br />
                        <!-- Post Extract Text -->
                        <label for="extractText">Post Extract Text | Description</label>
                        <textarea name="extract_text" id="extractText" cols="30" rows="5" class="mt-2 form-control" placeholder="Post Extract Text">{{ old('extract_text') }}</textarea>
                        <small class="text-danger post-extract-error">{{ $errors->first('extract_text') }}</small>
                        <small>
                            Extract Text are optional hand-crafted summaries of your news content that can be used in your website
                        </small>

                        <hr />

                        <h6 class="mb-2 text-capitalize">Categorize your post</h6>

                        <!-- Post Category -->
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

            <!-- post title, name and content -->
            <div class="col-lg-6">
                <div class="card shadow-sm mb-3">
                    <div class="card-body">
                        <label for="title">Post Title</label>
                        <textarea name="post_title" id="title" cols="10" rows="1" class="form-control" placeholder="Post Title">{{ old('post_title') }}</textarea>
                        <small class="text-danger post-title-error">{{ $errors->first('post_title') }}</small>
                    </div>
                </div>
                <div class="card shadow-sm">
                    <div class="card-body p-0">
                        <textarea name="page_content" id="editor" class="form-control mt-4" cols="30" rows="10" placeholder="Page Body">{{ old('page_content') }}</textarea>

                    </div>
                </div>
            </div>

            <div class="col-lg-3">

                <!-- Post Featured Image -->
                <div class="card shadow-sm mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-8"><h6>Post Featured Image</h6></div>
                            <div class="col-lg-4"><input type="file" name="post_featured_image" id="selectPostFeaturedImage" class="" /></div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <img src="{{ asset('pagman/img/post_featured_image.png') }}" alt="" id="imageHolderId" class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <small class="text-danger featured-image-error">
                            {{ $errors->first('post_featured_image') }}
                        </small>
                    </div>
                </div>

                <!-- Post Icon - posts may have icons or not -->
                @if (option('asign_icons_to_posts', true))
                    <div class="card shadow-sm mb-3">
                        <div class="card-header">
                            <h6>Post Icon</h6>
                        </div>
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-lg-6">
                                    <input type="file" name="post_icon" class="" id="iconInput"  />
                                </div>
                                <div class="col-lg-6">
                                    <select name="icon_format" id="iconFormat" class="form-control d-none">
                                        <option value="img" selected>Image</option>
                                        <option value="css_class">CSS Class</option>
                                    </select>
                                </div>
                            </div>
                            <img src="{{ asset('pagman/img/post_featured_image.png') }}" alt="" id="iconImageHolderId" class="w-25">
                        </div>
                    </div>
                @endif

                <div class="card">
                    <div class="card-body p-2 text-right">
                        <input type="submit" value="Save post" class="btn btn-md btn-primary" />
                    </div>
                </div>
               

            </div>

            <div class="col-lg-12 mb-3">
                
            </div>

        </form>
    </div>
</section>

@endsection