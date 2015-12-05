<!DOCTYPE html>
<html>
<head>
    <meta name="description" content="[Hello World amb estil]">
    <meta charset="utf-8">
    <link href="{{ asset('css/all.css')  }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css')  }}" rel="stylesheet" type="text/css">
    <title>Vue</title>
</head>
<body>

<div id="app">

    @{{message}}

    <input type="text"
           v-model="message">
    <pre>@{{$data}}</pre>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.10/vue.min.js"></script>
<script src="{{ asset('js/all.js') }}"></script>
<script src="{{ asset('js/vue.js') }}"></script>
</body>
</html>