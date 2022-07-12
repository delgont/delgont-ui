@extends('delgont::layout.master')

@section('title', 'Pages')
@section('pageHeading', 'Pages')

@section('actions-right')
    <a href="" class="btn-outline-success text-success btn btn-sm p-1"><i class="bx bx-plus"></i> Create Page</a>
@endsection

@section('actions')
    <a href="" class="btn-outline-success text-success btn btn-sm p-1"><i class="bx bx-tag"></i> Categories</a>
    <a href="" class="btn-outline-danger text-danger btn btn-sm p-1"><i class="bx bx-trash"></i><span class="badge badge-danger badge-counter">7</span></a>
@endsection

@section('content')

<section class="page-section mt-4">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-11">
                <div class="card">
                    <div class="card-body p-2">
                        @if (count($pages))
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <th>
                                            <input type="checkbox">
                                        </th>
                                        <th>Label</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Category</th>
                                        <th>Created On</th>
                                        <th>Updated On</th>
                                        <th>Updated By</th>
                                        <th></th>
                                    </thead>
                                    <tbody>
                                        @foreach ($pages as $page)
                                            <tr>
                                                <td>
                                                    <input type="checkbox">
                                                </td>
                                                <td>{{$page->page_key}}</td>
                                                <td>{{str_limit($page->page_title, 20)}}</td>
                                                <td>{{ ($page->author != null) ? $page->author->name : 'System' }}</td>
                                                <td>
                                                    @if (count($page->categories))
                                                        @foreach ($page->categories as $category)
                                                            <span>{{$category->name}}</span>
                                                        @endforeach
                                                    @endif
                                                </td>
                                                <td>{{$page->created_at}}</td>
                                                <td>{{$page->updated_at}}</td>
                                                <td>{{ ($page->updatedBy != null) ? $page->updatedBy->name : 'System' }}</td>
                                                <td>
                                                    <a href="{{route('delgont.pages.edit', ['id' => $page->id])}}" class="btn btn-sm btn-primary"><i class='bx bx-edit'></i></a>
                                                    <a href="" class="btn btn-sm btn-danger"><i class="bx bx-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="pages-pagination">
                                {{$pages->links()}}
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-lg-2">
                hello
            </div>

        </div>
    </div>
</section>
@endsection