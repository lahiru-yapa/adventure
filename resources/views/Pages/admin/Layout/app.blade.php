<!DOCTYPE html>
<html lang="en">


@include('Pages.admin.Layout.header')

<body>
    <!--== MAIN CONTRAINER ==-->
    @include('Pages.admin.Layout.nav')


    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
                <!--== USER INFO ==-->

                @include('Pages.admin.Layout.sidebar')
            </div>

            <!--== BODY INNER CONTAINER ==-->
            @yield('content')

        </div>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/materialize.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>

</body>

</html>
