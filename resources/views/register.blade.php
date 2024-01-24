<x-layout page="Todo: Register">

    <x-slot:btn>
        <a href="{{route('login')}}" class="btn btn-primary">
            Faça Login
        </a>

    </x-slot:btn>
    <section id="task_section">
        <h1>Registrar-se</h1>

        <form method="POST" action="{{ route('user.register_action') }}">
            @csrf

            <x-form.text_input
                name="name"
                label="Nome"
                required="required"
                placeholder="Digite seu nome"
             />
             @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
             @enderror

            <x-form.text_input
                type="email"
                name="email"
                label="E-mail"
                required="required"
                placeholder="Digite seu email"
            />

            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <x-form.text_input
                type="password"
                name="password"
                label="Senha"
                required="required"
                placeholder="Digite sua senha"
            />

            @error('password')
             <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <x-form.text_input
                type="password"
                name="password_confirmation"
                label="Confirmar Senha"
                required="required"
                placeholder="Confirme sua senha"
            />
            @error('password_confirmation')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <x-form.form_button resetTxt="Limpar Campos" submitTxt="Registrar-se" />


        </form>

    </section>
</x-layout>
