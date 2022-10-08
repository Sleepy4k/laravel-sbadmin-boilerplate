
<!DOCTYPE html>
<html lang="en">
    <head>
        @includeIf('partials.head.meta')

        @includeIf('partials.head.icon')
        
        <title>{{ config('app.name') }}</title>
        
        @includeIf('partials.head.css')
    </head>
    <body id="page-top">
        <div id="wrapper">

            @includeIf('partials.sidebar.main')

            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    @includeIf('partials.navbar.main')

                    <div class="container-fluid">
                        @includeIf('partials.navbar.breadcrumb')

                        @yield('main-content')
                    </div>
                </div>

                @includeIf('partials.footer.main')
            </div>
        </div>

        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        @includeIf('partials.script.main')
    </body>
</html>