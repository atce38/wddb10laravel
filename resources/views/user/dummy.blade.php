<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dummy</title>
</head>
<body>

    <h1> Hello I m Dummy Page</h1>
    <?php echo $first_heading; ?>
    {{ $second_heading }}
    {!! $third_heading !!}

    @foreach($employees as $key=> $emp)
    <h1>{{ $emp }}</h1>
    @endforeach
</body>
</html>
