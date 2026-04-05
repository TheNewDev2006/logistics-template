<div class="search-popup offcanvas offcanvas-top" id="offcanvas-search" data-bs-scroll="true">
    <div class="container d-flex flex-row py-5 align-items-center position-relative">
        <button type="button" class="btn-close bg-primary rounded-5" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
        <div class="col-lg-9 mx-auto">
            <form class="search-form w-100 mb-5">
                @csrf
                <input id="search-form" type="text" class="form-control shadow-1"
                    placeholder="Type keyword and hit enter">
            </form>

        </div>
    </div>
</div>
