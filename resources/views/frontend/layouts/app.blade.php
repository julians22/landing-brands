<!DOCTYPE html>
@langrtl
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
@else
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@endlangrtl
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', app_name())</title>
        <meta name="description" content="@yield('meta_description', 'Laravel Boilerplate')">
        <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
        @yield('meta')

        {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
        @stack('before-styles')

        <!-- Check if the language is set to RTL, so apply the RTL layouts -->
        <!-- Otherwise apply the normal LTR layouts -->
        {{ style(mix('css/frontend.css')) }}
        <link rel="stylesheet" type="text/css" href="{{ asset('css/dev/style.css') }}">
        <script src="https://www.google.com/recaptcha/api.js?render=6Ldt8uAUAAAAAMf7lGU01N65E0OFKW1DAOFkI2YD"></script>
        @stack('after-styles')

    </head>
    <body>
        @include('includes.partials.read-only')

        <div id="app">

            <div class="container" id="custom-container">
                @include('includes.partials.messages')
                @yield('content')
            </div><!-- container -->
            @include('frontend.includes.footer')
        </div><!-- #app -->

        <!-- Scripts -->
        @stack('before-scripts')
        {!! script(mix('js/manifest.js')) !!}
        {!! script(mix('js/vendor.js')) !!}
        {!! script(mix('js/frontend.js')) !!}
        <script src="{{ asset('js/app.js') }}"></script>
        <script>
            grecaptcha.ready(function() {
                    grecaptcha.execute('6Ldt8uAUAAAAAMf7lGU01N65E0OFKW1DAOFkI2YD', {action: 'customer/add'}).then(function(token) {
                        if (token) {
                            document.getElementById('recaptcha').value = token;
                        }
                    });
                });
            (function() {
                document.querySelector("#custForm").addEventListener("submit", function(e) {
                        e.preventDefault();
                        axios.post(this.action, {
                                nama: document.querySelector("#nama").value,
                                email: document.querySelector("#email").value,
                                nomor: document.querySelector("#nomor").value,
                                alamat: document.querySelector("#alamat").value
                            })
                            .then(response => {
                                clearErrors();
                                $('.success-modal').modal('show');
                                this.reset();
                            })
                            .catch(error => {
                                const errors = error.response.data.errors;
                                const firstItem = Object.keys(errors)[0];
                                const firstItemDOM = document.getElementById(firstItem);
                                const firstErrorMessage = errors[firstItem][0];

                                clearErrors();

                                // show the error message
                                firstItemDOM.insertAdjacentHTML(
                                    "afterend",
                                    `<div class="text-danger futura_std_bold">${firstErrorMessage}</div>`
                                );

                                // highlight the form control with the error
                                firstItemDOM.classList.add("border", "border-danger");
                            });
                    });

                function clearErrors() {
                    // remove all error messages
                    const errorMessages = document.querySelectorAll(".text-danger");
                    errorMessages.forEach(element => (element.textContent = ""));

                    // remove all form controls with highlighted error text box
                    const formControls = document.querySelectorAll(".form-control");
                    formControls.forEach(element =>
                        element.classList.remove("border", "border-danger")
                    );
                }
            })();
            function showModal() {
                var n = $('#term');
                if (n.prop("checked") == true) {
                    $('.term-modal').modal('show');
                    $('.my-btn').removeAttr("disabled");
                } else {
                    $('.my-btn').attr("disabled", "disabled");
                }
            }
        </script>

        @stack('after-scripts')

        @include('includes.partials.ga')
    </body>
</html>
