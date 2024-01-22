<x-layout page="Todo: Tasks">

    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>

    </x-slot:btn>

    <section id="create_task_section">
        <h1>Criar Tarefa</h1>

        <form action="">

            <x-form.text_input
                name="title"
                label="Título da Task"
                required="required"
                placeholder="Digite o título da tarefa"/>

            <x-form.text_input
                type="date"
                name="due_date"
                label="Data de Realização"
                required="required"/>


            <x-form.select_input
                name="category"
                label="Categoria"
                required="required">


                <option> Valor qualquer</option>

            </x-form.select_input>


            <x-form.textarea_input
            name="description"
            label="Descrição"
            required="required"
            placeholder="Digite a descrição da tarefa"/>


            <x-form.form_button resetTxt="Resetar" submitTxt="Criar Tarefa"/>


        </form>

    </section>
</x-layout>
