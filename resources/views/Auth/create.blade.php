<x-layout>
    <div class="container my-5 py-5">
        <div class="row justify-content-center  my-5">
            <div class="col-6 my-1">
                <div class="card my-5 p-3">
                    <div class="card-header bg-white">
                        <p>Register</p>
                    </div>
                    <form method="post" class="mt-3">
                        @csrf
                        <x-forms.input name="name"/>
                        <x-forms.input name="user_name"/>
                        <x-forms.input name="email" type="email"/>
                        <x-forms.input name="password" type="password"/>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layout>
