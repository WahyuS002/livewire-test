<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="{{ asset('css/dependent-dropdown.min.css') }}" media="all" rel="stylesheet" type="text/css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{ asset('js/dependent-dropdown.min.js') }}" type="text/javascript"></script>
</head>
<body>
    <!-- HTML Markup (Parent) -->
    <select id="cat-id" class="form-control">
        <option id="">Provinsi</option>
        <!-- other options -->
        @foreach ($villages as $v)
            
        @endforeach
        <option value="{{ $v->id }}">{{ $v->name }}</option>
    </select>
    
    <!-- HTML Markup (Child # 1) -->
    <select id="subcat-id" class="form-control">
        <option id="">Kota</option>
        <!-- other options -->
    </select>
    
    <!-- HTML Markup (Child # 2) -->
    <select id="prod-id" class="form-control">
        <option id="">Kecamatan</option>
        <!-- other options -->
    </select>

    <!-- HTML Markup (Child # 2) -->
    <select id="kel-id" class="form-control">
        <option id="">Kelurahan</option>
        <!-- other options -->
    </select>
    
    <!-- Javascript call on document ready -->
    <script>
        // Child # 1
        $("#subcat-id").depdrop({
            // url: '{{ route('get.regency') }}',
            data: '{{ $regencies }}',
            depends: ['cat-id']
        });
    
        // Child # 2
        $("#prod-id").depdrop({
            url: '/server/getProd.php',
            depends: ['cat-id', 'subcat-id']
        });

        $("#kel-id").depdrop({
            url: '/server/getProd.php',
            depends: ['cat-id', 'subcat-id']
        });
    </script>
</body>
</html>