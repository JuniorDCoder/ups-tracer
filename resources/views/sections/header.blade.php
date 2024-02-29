<div class="jumbotron jumbotron-fluid mb-5">
    <div class="container text-center py-5">
        @if (Route::currentRouteName() == 'home')
        <h1 class="text-primary mb-4">Safe & Faster</h1>
        <h1 class="text-white display-3 mb-5">Logistics Services</h1>
        @else
            @yield('header')

        @endif

        @if (Route::currentRouteName() == 'home')
        <div class="mx-auto" style="width: 100%; max-width: 600px;">
            <div class="input-group">
                <form action="{{ route('track') }}" method="POST">
                    @csrf

                    <div class="input-group">
                        <input type="text" name="tracking_id" class="form-control border-light" style="padding: 30px;" placeholder="Product Number">
                        <button type="submit" class="btn btn-primary px-5">Track & Trace</button>
                    </div>
                </form>
            </div>
        </div>

        @endif
    </div>
</div>
