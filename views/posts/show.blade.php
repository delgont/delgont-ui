@extends('delgont::layout.master')

@section('title', 'Posts | Edit')
@section('pageHeading', 'Edit Post')


@section('content')
<section class="mt-4">
    <div class="container-fluid">

       
        <!-- Edit Post Form -->
        <form action="{{ route('delgont.posts.update', ['id' => $post->id]) }}" class="row" id="editStandardPostForm" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="col-lg-3">
                <div class="card shadow-sm">
                    <div class="card-body">

                        <!-- Post Type -->
                        <label for="postType">Post Type</label>
                        <select name="post_type" id="postType" class="form-control w-75">
                            @if ($count = count($standard_posts))
                                @for ($i = 0; $i < $count; $i++)
                                    @if ($post->post_type == $standard_posts[$i])
                                    <option value="{{ $standard_posts[$i] }}" selected>{{ $standard_posts[$i] }}</option>
                                    @else
                                    <option value="{{ $standard_posts[$i] }}">{{ $standard_posts[$i] }}</option>
                                    @endif
                                @endfor
                            @endif
                        </select>
                        <small class="text-danger">{{ $errors->first('post_type') }}</small>

                        <!-- Post Extract Text -->
                        <label for="extractText">Post Extract Text | Description</label>
                        <textarea name="extract_text" id="extractText" cols="30" rows="5" class="mt-2 form-control" placeholder="Post Extract Text">{{ (old('extract_text') != null) ? old('extract_text') : $post->extract_text  }}</textarea>
                        <small class="text-danger post-extract-error">{{ $errors->first('extract_text') }}</small>
                        <small>
                            Extract Text are optional hand-crafted summaries of your news content that can be used in your website
                        </small>
                    </div>
                </div>
            </div>

            <!-- post title, name and content -->
            <div class="col-lg-6">
                <div class="card shadow-sm mb-3">
                    <div class="card-body">
                        <label for="title">Post Title</label>
                        <textarea name="post_title" id="title" cols="10" rows="1" class="form-control" placeholder="Post Title">{{ (old('post_title') != null) ? old('post_title') : $post->post_title  }}</textarea>
                        <small class="text-danger post-title-error">{{ $errors->first('post_title') }}</small>
                    </div>
                </div>
                <div class="card shadow-sm">
                    <div class="card-body p-0">
                        <textarea name="post_content" id="content" class="form-control" cols="30" rows="10" >
                            {{ (old('post_content') != null) ? old('post_content') : $post->post_content  }}
                        </textarea>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">

                <!-- Post Featured Image -->
                <div class="card">
                    <img class="card-img-top" src="{{ ($post->post_featured_image != null) ? asset($post->post_featured_image) : asset('img/featured_image.png') }}" alt="Card image cap" />
                    <div class="card-body">
                      <h5 class="card-title mb-2">Choose Featured Image</h5>
                      <input type="file" name="post_featured_image" id="selectPostFeaturedImage" /><hr />
                        <small class="text-danger featured-image-error">
                            {{ $errors->first('post_featured_image') }}
                        </small>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="card shadow-sm">
                    <div class="card-body">
                        <input type="submit" class="btn btn-sm btn-primary" value="Update" />
                    </div>
                </div>

            </div>
            <div class="col-lg-12 text-center text-success success"></div>
            <div class="col-lg-12 text-center text-danger error"></div>
        </form>
    </div>
</section>

@endsection