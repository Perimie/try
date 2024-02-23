<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <title>Show Product</title>
</head>
<body>
    <h1>All Product</h1>

    <table border="1px">

    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Image</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>
    @foreach ($product as $product)
    <tr>
    <td><h3>{{$product->title}}</h3></td>
    <td>{{$product->description}}</td>
    <td><img height="200px" width="200px" src="product_image/{{$product->image}}" alt="img"></td>
    <td><a onclick="return confirm ('are you sure to delete this?')"; 
     class="btn btn-danger" href="{{url('delete_product',$product->id)}}">Delete</a></td>
    <td><a onclick="return confirm ('are you sure to update this?')" class="btn btn-primary" href="{{url('update_product',$product->id)}}">Update</a></td> 
    </tr>
    @endforeach
    </table>
<br>
    <a href="{{url('back')}}" class="btn btn-primary">Add more Product</a>


</body>
</html>