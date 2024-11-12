<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel API</title>
</head>
<body>
    {{-- learning Laravel APIs with Laravel API --}}

    <h1>Laravel API</h1>
      {{-- show product list in table --}}
      <table style="width:100%" border="1">
        <tr style="text-align: center">
            <th style="">Name</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
        @foreach ($products as $product)
            <tr style="text-align: center">
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
            </tr>
        @endforeach
    </table>

    {{-- need some free api and display it --}}

        

</body>
</html>