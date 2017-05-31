<!DOCTYPE html>
<html>
<head>
    <title> </title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>

    <div id="app">
        <div class="container">
          <h3> Basic Routing </h3>
          <div class="row">
            <div class="col-md-4">
                <div class="list-group">
                    <router-link to="/" class="list-group-item ">Home</router-link>
                    <router-link to="/foo" class="list-group-item ">Foo</router-link>
                    <router-link to="/bar" class="list-group-item ">Bar</router-link>
                    <router-link to="/test" class="list-group-item ">Test</router-link>
                </div>
            </div>

            <router-view class="view"></router-view>

        </div>
    </div>{{-- /container --}}
</div>

{{-- / setting value to your CSRFglobal variables  --}}
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
        ]); ?>
</script>
<script src="/js/app.js"></script>
</body>
</html>