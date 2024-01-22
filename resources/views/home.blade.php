<x-layout>

    <x-slot:btn>
        <a href="{{ route('task.create') }}" class="btn btn-primary">
            Criar tarefa
        </a>

    </x-slot:btn>

    <section class="graph">
        <div class="graph_header">
            <h2>Progresso do dia</h2>
            <div class="graph_header-line"></div>
            <div class="graph_header-date">

                <img src="{{ asset('images/icon-prev.png') }}" alt="">
                13 de Dez
                <img src="{{ asset('images/icon-next.png') }}" alt="">

            </div>
        </div>

        <div class="graph_header-subtitle">
            Tarefas: <b>3/6</b>
        </div>

        <div class="graph-content">
            <div class="graph-placeholder">

            </div>

            <div class="tasks_left_footer">

                <img src="{{ asset('images/icon-info.png') }}" alt="Tasks restantes">
                Restam 3 tarefas para serem realizadas


            </div>

        </div>



    </section>

    <section class="list">
        <div class="list_header">
            <select class="list_header-select">
                <option value="'"> Todas as tarefas</option>

            </select>
        </div>

        <div class="task_list">
            @foreach ($tasks as $task)
                <x-task :data=$task />
            @endforeach

        </div>

    </section>
</x-layout>
