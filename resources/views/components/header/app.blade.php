    <header class="section-header py-3 border-bottom px-3 bg-white">
        <div class="container-fluid px-5 d-flex justify-content-between align-items-center">
            <a href="/">
                <img src="{{ asset('images/logo.png') }}" alt="logo" class="logo" style="width: 135px">
            </a>
            <form action="/logout" method="POST">
                @csrf
                <button class="d-flex align-items-center border-0 bg-transparent text-secondary" type="submit">
                    <i class="fas fa-user-circle fa-2x"></i>
                    <p class="m-0 px-2 text-capitalize">{{ auth()->user()->name }}</p>
                    <i class="fas fa-chevron-down fa-xs mt-1"></i>
                </button>
            </form>
        </div>
    </header>
