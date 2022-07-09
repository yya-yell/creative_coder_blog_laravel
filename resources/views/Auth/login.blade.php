<x-layout>
    @if (session('fail'))
        <div class="d-flex justify-content-center mt-4">
            <div class="alert alert-danger alert-dismissible fade show mt-5 text-center w-75" role="alert">
                {{ session('fail') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif
    <div class="container my-5 py-5">
        <div class="row justify-content-center  my-5">
            <div class="col-6 my-1">
                <div class="card my-5 p-3">
                    <div class="card-header bg-white">
                        <p>Login</p>
                    </div>
                    <form method="post" class="mt-3">
                        @csrf
                        <x-forms.input name="email" type="email"/>
                        <x-forms.input name="password" type="password"/>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layout>
