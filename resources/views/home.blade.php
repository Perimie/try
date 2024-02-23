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
    <title>Home</title>
    <style>
        .div-sec{
            padding: 30px;
        }
    </style>

</head>
<body>
        <h1>Add Product</h1>
        @if($errors)

            @foreach($errors->all() as $errors)

                <li style="color: red;">
                    {{$errors}}
                </li>
            @endforeach
        @endif
        <form onsubmit="return confirm('Do you really want to add the product?');" method="Post" action="{{url('/add_product')}}" enctype="multipart/form-data">
            @csrf
            <div class="div-sec">
                <label for="">Product Title</label>
                <input type="text" name="title">
            </div>
            <div class="div-sec">
                <label for="">Product Description</label>
                <input type="textarea" name="description">
            </div>
            <div class="div-sec">
                <label for="">Product Image</label>
                <input type="file" name="image">
            </div>
            <div>
                <input type="submit" value="Add Product" class="btn btn-primary">
            </div>
        </form>
        <a class="btn btn-success" href="{{url('show_product')}}">Show Product</a>
</body>
</html>