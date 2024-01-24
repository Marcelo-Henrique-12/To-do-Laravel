<x-layout page="Todo: Login">

    <x-slot:btn>
        <a href="{{route('register')}}" class="btn btn-primary">
            Registre-se
        </a>

    </x-slot:btn>
    <section id="task_section">
        <h1>Login</h1>

        <form method="POST" action="{{ route('user.login_action') }}">
            @csrf

            <x-form.text_input
                type="email"
                name="email"
                label="E-mail"
                required="required"
                placeholder="Digite seu email"
            />

            <x-form.text_input
                type="password"
                name="password"
                label="Senha"
                required="required"
                placeholder="Digite sua senha"
            />


            <x-form.form_button resetTxt="Limpar Campos" submitTxt="Entrar" />


        </form>

    </section>
</x-layout>
