</head>
<body>

<table>
  <thead>
    <tr>
      <th>NO</th>
      <th>Title</th>
      <th>Pengarang</th>
      <th>Penerbit</th>
      <th>Tahun_terbit</th>
      <th>Description</th>
      
    </tr>
  </thead>
  <tbody>
    
    @foreach($book as $book)
    <tr>
      <th scope="row">{{ $book->id }}</th>
      <td>{{ $book->title }}</td>
      <td>{{ $book->pengarang }}</td>
      <td>{{ $book->penerbit }}</td>
      <td>{{ $book->tahun_terbit }}</td>
      <td>{{ $book->description }}</td>
      
    </tr>
    @endforeach
  </tbody>
</table>
</body>