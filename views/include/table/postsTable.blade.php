@if (count($posts))
<div class="table-responsive">
    <table class="table table-borderless">
        <thead>
            <th>
                <input type="checkbox">
            </th>
            <th>Title</th>
            <th>Author</th>
            <th>Category</th>
            <th>Created On</th>
            <th>Last Update</th>
            <th>Updated By</th>
            <th></th>
        </thead>
        <tbody>
           @foreach ($posts as $post)
            <tr>
                <td>
                    <input type="checkbox">
                </td>
                <td>{{ $post->post_title }}</td>
                <td>{{ ($post->author != null) ? $post->author->name : 'System' }}</td>
                <td>{{ $post->post_type }}</td>
                <td>{{ $post->created_at->toFormattedDateString() }}</td>
                <td>{{ $post->updated_at->toFormattedDateString() }}</td>
                <td>{{ ($post->updatedBy != null) ? $post->updatedBy->name : 'System' }} <small>(Author)</small></td>

                <td>
                    <a href="{{ route('delgont.posts.show', ['id' => $post->id]) }}" class="btn btn-sm btn-primary"><i class="bx bx-edit"></i></a>
                    <a href="{{ route('delgont.posts.destroy', ['id' => $post->id]) }}" class="btn btn-sm btn-danger"><i class="bx bx-trash"></i></a>
                </td>
            </tr>
           @endforeach
        </tbody>
        <tfoot>
        </tfoot>
    </table>
</div>
{{ (count($posts) > 1) ? $posts->links() : '' }}
<div>
</div>
@else
<div>
    no posts
</div>
@endif