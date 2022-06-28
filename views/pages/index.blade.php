@extends('delgont::layout.master')

@section('title', 'Pages')
@section('pageHeading', 'Pages')

@section('content')

<section class="page-section mt-4">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-10">
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
                                                <td>{{$page->page_title}}</td>
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
                                                    <a href="{{route('delgont.pages.edit', ['id' => $page->id])}}" class=""><i class='bx bxs-edit bx-sm'></i></a>
                                                    <a href="" class="btn btn-sm btn-danger">Delete</a>
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