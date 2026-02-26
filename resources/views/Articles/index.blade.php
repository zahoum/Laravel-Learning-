
<body>
    <table border=1>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Content</th>
        </tr>
        @foreach ($articles as $article)
        <tr>
            <td>{{ $article->id }}</td>
            <td>{{ $article->title }}</td>
            <td>{{ $article->content }}</td>
        </tr>
        @endforeach
    </table>
</body>