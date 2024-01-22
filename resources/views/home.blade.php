<x-layout>

    <x-slot:btn>
        <a href="" class="btn btn-primary">
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
            @php
                $tasks = [
                    ['id'=>1,
                    'done' =>false,
                    'title' => 'Minha Primeira Task',
                    'category' => 'Categoria 1',
                    'delete_url'=>'#',
                    'edit_url'=> '#'
                    ],

                    ['id'=>2,
                    'done' =>true,
                    'title' => 'Minha Segunda Task',
                    'category' => 'Categoria 2',
                    'delete_url'=>'#',
                    'edit_url'=> '#'
                    ],


                ]
            @endphp

            <x-task :data=$tasks[0]/>
            <x-task :data=$tasks[1]/>
        </div>

    </section>
</x-layout>
